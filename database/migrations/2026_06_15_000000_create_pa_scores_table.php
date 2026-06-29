<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pa_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onDelete('cascade');
            $table->decimal('software_score', 5, 2);
            $table->decimal('jaringan_score', 5, 2);
            $table->decimal('multimedia_score', 5, 2);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pa_scores');
    }
};
