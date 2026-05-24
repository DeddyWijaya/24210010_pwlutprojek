<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'Kelas';

    protected $fillable = [
        'kode_kelas',
        'kode_mata_kuliah',
        'kode_dosen',
        'hari',
        'jam',
        'tahun_ajaran',
        'ruang_kelas',
        'jumlah_max',
        'jumlah_mahasiswa',
        'semester',
        'created_at',
        'updated_at',
    ];
}