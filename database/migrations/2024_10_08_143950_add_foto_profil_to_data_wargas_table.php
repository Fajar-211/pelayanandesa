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
        Schema::table('data_wargas', function (Blueprint $table) {
            $table->string('foto_profil')->nullable();  // Menambahkan kolom foto_profil yang bisa null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_wargas', function (Blueprint $table) {
            $table->dropColumn('foto_profil');  // Menghapus kolom jika rollback
        });
    }
};
