<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PaScore;
use Illuminate\Http\Request;

class RekomendasiController extends Controller {

    public function index(Request $request) {
        $daftarMahasiswa = Mahasiswa::orderBy('nama')->get();
        $mahasiswaTerpilih = null;
        $analisis = null;

        if ($request->has('mahasiswa_id') && $request->mahasiswa_id != '') {
            $mahasiswaTerpilih = Mahasiswa::with('paScore')->find($request->mahasiswa_id);

            // Sinkronisasi otomatis: Hitung ulang dan simpan/update ke tabel pa_scores
            $this->saveOrUpdatePaScore($mahasiswaTerpilih);

            // Muat ulang relasi paScore setelah dipastikan terisi/diperbarui
            $mahasiswaTerpilih->load('paScore');

            $analisis = $this->hitungMatematikaRekomendasi($mahasiswaTerpilih);
        }

        return view('rekomendasi', compact('daftarMahasiswa', 'mahasiswaTerpilih', 'analisis'));
    }

    private function hitungMatematikaRekomendasi($mhs) {
        // 1. RELASI MATEMATIKA: Mengambil nilai riil dari database (tabel pa_scores)
        if ($mhs->paScore) {
            $skorSoftware = $mhs->paScore->software_score;
            $skorJaringan = $mhs->paScore->jaringan_score;
            $skorMultimedia = $mhs->paScore->multimedia_score;
        } else {
            $skorSoftware = ($mhs->alpro + $mhs->praktikum_alpro + $mhs->pbo + $mhs->praktikum_pbo + $mhs->bengkel_web + $mhs->struktur_data + $mhs->bengkel_framework1 + $mhs->bengkel_framework2 + $mhs->rpl2) / 9;
            $skorJaringan = ($mhs->orskom + $mhs->os + $mhs->praktikum_os + $mhs->jarkom + $mhs->praktikum_jarkom + $mhs->admin_jaringan + $mhs->praktikum_admin_jaringan) / 7;
            $skorMultimedia = ($mhs->imk + $mhs->animasi1 + $mhs->animasi2 + $mhs->game_dev) / 4;
        }

        // 2. POHON KEPUTUSAN: Aturan kondisional untuk menentukan Daun Keputusan Tertinggi
        if ($skorSoftware >= $skorJaringan && $skorSoftware >= $skorMultimedia) {
            $opsiPA = "Software (RPL)";
            $skorFinal = $skorSoftware;
            $alasan = "Mahasiswa menunjukkan performa stabil tinggi di jalur pemrograman (Alpro, PBO, Struktur Data, Framework).";
            $kunciRumpun = 'software';
        } elseif ($skorJaringan >= $skorSoftware && $skorJaringan >= $skorMultimedia) {
            $opsiPA = "Jaringan (Network)";
            $skorFinal = $skorJaringan;
            $alasan = "Mahasiswa memiliki nilai sangat baik pada subjek infrastruktur, sistem operasi, dan pengelolaan jaringan.";
            $kunciRumpun = 'jaringan';
        } else {
            $opsiPA = "Multimedia & Game";
            $skorFinal = $skorMultimedia;
            $alasan = "Kompetensi mahasiswa terlihat menonjol pada elemen desain interaksi, animasi, serta logika pengembangan game.";
            $kunciRumpun = 'multimedia';
        }

        // 3. KOMBINATORIKA DENGAN ACADEMIC FILTERING
        // Menyaring teman yang memiliki kecenderungan rumpun PA sejenis di tabel pa_scores
        $semuaTemanSejenis = Mahasiswa::where('id', '!=', $mhs->id)
            ->whereHas('paScore', function($query) use ($kunciRumpun) {
                if ($kunciRumpun === 'software') {
                    $query->whereRaw('software_score >= jaringan_score AND software_score >= multimedia_score');
                } elseif ($kunciRumpun === 'jaringan') {
                    $query->whereRaw('jaringan_score >= software_score AND jaringan_score >= multimedia_score');
                } else {
                    $query->whereRaw('multimedia_score >= software_score AND multimedia_score >= jaringan_score');
                }
            })
            ->pluck('nama')
            ->toArray();

        // Fallback: Jika data teman sejenis di database kurang dari 6, ambil teman acak umum agar kombinasi tidak kosong
        if (count($semuaTemanSejenis) < 6) {
            $sisaKebutuhan = 6 - count($semuaTemanSejenis);
            $rekanTambahan = Mahasiswa::where('id', '!=', $mhs->id)
                ->whereNotIn('nama', $semuaTemanSejenis)
                ->limit($sisaKebutuhan)
                ->pluck('nama')
                ->toArray();
            $semuaTemanSejenis = array_merge($semuaTemanSejenis, $rekanTambahan);
        }

        // Kita naikkan menjadi ruang sampel n = 6 orang kandidat agar menghasilkan 15 kelompok unik
        $kandidatTeman = array_slice($semuaTemanSejenis, 0, 6);

        // Hitung kombinasi C(6, 2)
        $kombinasiKelompok = $this->generateKombinasi($kandidatTeman, 2);

        return [
            'skor' => [
                'Software' => round($skorSoftware, 2),
                'Jaringan' => round($skorJaringan, 2),
                'Multimedia' => round($skorMultimedia, 2),
            ],
            'rekomendasi' => $opsiPA,
            'skor_final' => round($skorFinal, 2),
            'alasan' => $alasan,
            'kunci_rumpun' => $kunciRumpun,
            'kandidat_nama' => $kandidatTeman, // Dikirim ke blade untuk dasar penulisan keterangan alasan
            'kombinasi' => $kombinasiKelompok
        ];
    }

    private function saveOrUpdatePaScore(Mahasiswa $mhs): void {
        // Rumus rerata kurikulum riil sesuai rumpun mata kuliah
        $software = ($mhs->alpro + $mhs->praktikum_alpro + $mhs->pbo + $mhs->praktikum_pbo + $mhs->bengkel_web + $mhs->struktur_data + $mhs->bengkel_framework1 + $mhs->bengkel_framework2 + $mhs->rpl2) / 9;
        $jaringan = ($mhs->orskom + $mhs->os + $mhs->praktikum_os + $mhs->jarkom + $mhs->praktikum_jarkom + $mhs->admin_jaringan + $mhs->praktikum_admin_jaringan) / 7;
        $multimedia = ($mhs->imk + $mhs->animasi1 + $mhs->animasi2 + $mhs->game_dev) / 4;

        PaScore::updateOrCreate(
            ['mahasiswa_id' => $mhs->id],
            [
                'software_score' => round($software, 2),
                'jaringan_score' => round($jaringan, 2),
                'multimedia_score' => round($multimedia, 2),
            ]
        );
    }

    private function generateKombinasi($arr, $r) {
        $hasil = [];
        $this->getKombinasiRekursif($arr, $r, 0, [], $hasil);
        return $hasil;
    }

    private function getKombinasiRekursif($arr, $r, $start, $lokal, &$hasil) {
        if (count($lokal) == $r) {
            $hasil[] = $lokal;
            return;
        }
        for ($i = $start; $i < count($arr); $i++) {
            $lokal[] = $arr[$i];
            $this->getKombinasiRekursif($arr, $r, $i + 1, $lokal, $hasil);
            array_pop($lokal);
        }
    }
}
