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
        Schema::create('kas_wargas', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->date('tanggal');
            $table->string('info_pemasukan')->nullable();
            $table->decimal('saldo_masuk', 10, 2)->nullable();
            $table->string('info_pengeluaran')->nullable();
            $table->decimal('saldo_keluar', 10, 2)->nullable();
            $table->decimal('saldo', 10, 2);
            $table->decimal('saldo_awal_tahun', 10, 2)->nullable();
            $table->decimal('total_saldo', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas_wargas');
    }
};
