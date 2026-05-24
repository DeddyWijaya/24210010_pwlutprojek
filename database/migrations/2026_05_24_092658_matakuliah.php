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
         Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan_id');
            $table->string('dosen_id');
            $table->string('nama_mk');
            $table->string('kode_mk')->unique();
            $table->string('sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
  
    }
};