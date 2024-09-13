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
        Schema::create('data_wargas', function (Blueprint $table) {
            $table->id('no'); // Menjadikan 'no' sebagai primary key dengan tipe data BIGINT (id otomatis menggunakan bigIncrements)
            $table->string('nama'); // Nama dengan tipe VARCHAR
            $table->date('tanggal_lahir'); // Tanggal lahir dengan tipe DATE
            $table->string('no_kk', 16); // No Kartu Keluarga (KK) dengan tipe VARCHAR panjang 16
            $table->string('nik', 16); // NIK dengan tipe VARCHAR panjang 16
            $table->string('email')->unique(); // Email dengan tipe VARCHAR dan unique
            $table->timestamps(); // Untuk kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_wargas');
    }
};
