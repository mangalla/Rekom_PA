<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Daftarkan MahasiswaSeeder di sini agar dieksekusi oleh Laravel
        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}
