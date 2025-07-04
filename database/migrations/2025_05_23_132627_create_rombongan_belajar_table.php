<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rombongan_belajar', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('thn_masuk');
            $table->foreignId('dosen_pa')->constrained('dosen')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rombongan_belajar');
    }
};
