<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class RekomendasiController extends Controller {

    public function index(Request $request) {
        $daftarMahasiswa = Mahasiswa::all();
        $mahasiswaTerpilih = null;
        $analisis = null;

        if ($request->has('mahasiswa_id') && $request->mahasiswa_id != '') {
            $mahasiswaTerpilih = Mahasiswa::find($request->mahasiswa_id);
            $analisis = $this->hitungMatematikaRekomendasi($mahasiswaTerpilih);
        }

        return view('rekomendasi', compact('daftarMahasiswa', 'mahasiswaTerpilih', 'analisis'));
    }

    private function hitungMatematikaRekomendasi($mhs) {
        // 1. RELASI MATEMATIKA: Pemetaan Bobot Rerata Rumpun Ilmu Kurikulum Sem 1-4
        $skorSoftware = ($mhs->alpro + $mhs->praktikum_alpro + $mhs->pbo + $mhs->praktikum_pbo + $mhs->bengkel_web + $mhs->struktur_data + $mhs->bengkel_framework1 + $mhs->bengkel_framework2 + $mhs->rpl2) / 9;
        $skorJaringan = ($mhs->orskom + $mhs->os + $mhs->praktikum_os + $mhs->jarkom + $mhs->praktikum_jarkom + $mhs->admin_jaringan + $mhs->praktikum_admin_jaringan) / 7;
        $skorMultimedia = ($mhs->imk + $mhs->animasi1 + $mhs->animasi2 + $mhs->game_dev) / 4;

        // 2. POHON KEPUTUSAN: Aturan If-Else untuk menentukan Daun Keputusan Tertinggi
        if ($skorSoftware >= $skorJaringan && $skorSoftware >= $skorMultimedia) {
            $opsiPA = "Software (RPL)";
            $skorFinal = $skorSoftware;
            $alasan = "Mahasiswa menunjukkan performa stabil tinggi di jalur pemrograman (Alpro, PBO, Struktur Data, Framework).";
        } elseif ($skorJaringan >= $skorSoftware && $skorJaringan >= $skorMultimedia) {
            $opsiPA = "Jaringan (Network)";
            $skorFinal = $skorJaringan;
            $alasan = "Mahasiswa memiliki nilai sangat baik pada subjek infrastruktur, sistem operasi, dan pengelolaan jaringan.";
        } else {
            $opsiPA = "Multimedia & Game";
            $skorFinal = $skorMultimedia;
            $alasan = "Kompetensi mahasiswa terlihat menonjol pada elemen desain interaksi, animasi, serta logika pengembangan game.";
        }

        // 3. KOMBINATORIKA: C(n, r) -> Mencari 2 rekan dari total 4 teman mahasiswa lain secara acak
        $semuaTeman = Mahasiswa::where('id', '!=', $mhs->id)->pluck('nama')->toArray();
        $kandidatTeman = array_slice($semuaTeman, 0, 4); // Ambil 4 orang teratas
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
            'kombinasi' => $kombinasiKelompok
        ];
    }

    // Fungsi Pembantu Pencari Kombinasi Rekursif C(n, r)
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
