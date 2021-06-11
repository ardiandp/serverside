<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'telp',
        'agama',
        'jk',
        'status',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'aktif',
    ];
}
