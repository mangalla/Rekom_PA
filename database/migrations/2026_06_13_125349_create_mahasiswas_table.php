<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');

            // Nilai Semester 1 (Berdasarkan Gambar Kurikulum)
            $table->integer('alpro');
            $table->integer('praktikum_alpro');
            $table->integer('orskom');
            $table->integer('matematika');

            // Nilai Semester 2
            $table->integer('pbo');
            $table->integer('praktikum_pbo');
            $table->integer('bengkel_web');
            $table->integer('os');
            $table->integer('praktikum_os');

            // Nilai Semester 3
            $table->integer('struktur_data');
            $table->integer('bengkel_framework1');
            $table->integer('jarkom');
            $table->integer('praktikum_jarkom');
            $table->integer('imk');
            $table->integer('animasi1');

            // Nilai Semester 4
            $table->integer('bengkel_framework2');
            $table->integer('rpl2');
            $table->integer('admin_jaringan');
            $table->integer('praktikum_admin_jaringan');
            $table->integer('animasi2');
            $table->integer('game_dev');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('mahasiswas');
    }
};
