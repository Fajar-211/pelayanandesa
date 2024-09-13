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
        Schema::create('wajib_lapors', function (Blueprint $table) {
            $table->string('nik_tamu');
            $table->string('nama_tamu');
            $table->string('foto_tamu'); // Kolom untuk menyimpan path gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wajib_lapors');
    }
};
