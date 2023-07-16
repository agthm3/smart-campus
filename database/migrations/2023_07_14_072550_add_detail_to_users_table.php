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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nim');
            $table->enum('jabatan', ['mahasiswa', 'dosen','staff'])->default('mahasiswa');
            $table->enum('kendaraan', ['mobil', 'motor'])->default('motor');
            $table->enum('status', ['confirm', 'pending', 'reject'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
