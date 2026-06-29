<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\PaScore;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder {

    public function run(): void {
        // Data Mahasiswa Utama (Contoh Unggul di Coding/Software)
        $mahasiswaUtama = Mahasiswa::create([
            'nim' => '22001',
            'nama' => 'Budi Santoso (Fokus Coding)',
            'alpro' => 92, 'praktikum_alpro' => 95, 'orskom' => 70, 'matematika' => 85,
            'pbo' => 88, 'praktikum_pbo' => 92, 'bengkel_web' => 90, 'os' => 75, 'praktikum_os' => 70,
            'struktur_data' => 85, 'bengkel_framework1' => 88, 'jarkom' => 72, 'praktikum_jarkom' => 70, 'imk' => 75, 'animasi1' => 65,
            'bengkel_framework2' => 92, 'rpl2' => 85, 'admin_jaringan' => 68, 'praktikum_admin_jaringan' => 70, 'animasi2' => 60, 'game_dev' => 70
        ]);
        $this->savePaScores($mahasiswaUtama);

        // Tambah data mahasiswa lain secara acak untuk keperluan kombinasi kelompok
        $teman = [
            'Andi', 'Dewi', 'Fajar', 'Hendra', 'Siti', 'Rian', 'Putri', 'Rina', 'Anton', 'Lia',
            'Intan', 'Rizki', 'Nina', 'Doni', 'Vina', 'Adi', 'Salsa', 'Galih', 'Bayu', 'Nadia',
            'Rama', 'Mira', 'Yudi', 'Lutfi', 'Tika', 'Rani', 'Yoga', 'Fina', 'Bima'
        ];

        foreach ($teman as $index => $nama) {
            // Perbaikan format NIM otomatis (menggunakan str_pad agar panjang NIM konsisten, misal 22002 s.d 22030)
            $nimOtomatis = '22' . str_pad($index + 2, 3, '0', STR_PAD_LEFT);

            $mahasiswaTeman = Mahasiswa::create([
                'nim' => $nimOtomatis,
                'nama' => $nama,
                'alpro' => rand(70,95), 'praktikum_alpro' => rand(70,95), 'orskom' => rand(70,95), 'matematika' => rand(70,95),
                'pbo' => rand(70,95), 'praktikum_pbo' => rand(70,95), 'bengkel_web' => rand(70,95), 'os' => rand(70,95), 'praktikum_os' => rand(70,95),
                'struktur_data' => rand(70,95), 'bengkel_framework1' => rand(70,95), 'jarkom' => rand(70,95), 'praktikum_jarkom' => rand(70,95), 'imk' => rand(70,95), 'animasi1' => rand(70,95),
                'bengkel_framework2' => rand(70,95), 'rpl2' => rand(70,95), 'admin_jaringan' => rand(70,95), 'praktikum_admin_jaringan' => rand(70,95), 'animasi2' => rand(70,95), 'game_dev' => rand(70,95)
            ]);
            $this->savePaScores($mahasiswaTeman);
        }
    }

    private function savePaScores(Mahasiswa $mhs): void {
        $software = ($mhs->alpro + $mhs->praktikum_alpro + $mhs->pbo + $mhs->praktikum_pbo + $mhs->bengkel_web + $mhs->struktur_data + $mhs->bengkel_framework1 + $mhs->bengkel_framework2 + $mhs->rpl2) / 9;
        $jaringan = ($mhs->orskom + $mhs->os + $mhs->praktikum_os + $mhs->jarkom + $mhs->praktikum_jarkom + $mhs->admin_jaringan + $mhs->praktikum_admin_jaringan) / 7;
        $multimedia = ($mhs->imk + $mhs->animasi1 + $mhs->animasi2 + $mhs->game_dev) / 4;

        PaScore::create([
            'mahasiswa_id' => $mhs->id,
            'software_score' => round($software, 2),
            'jaringan_score' => round($jaringan, 2),
            'multimedia_score' => round($multimedia, 2),
        ]);
    }
} // <- Penutup kurung kurawal kelas yang sebelumnya hilang sudah ditambahkan di sini
