<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcacv extends Model
{
    use HasFactory;
    protected $table = 'bcacv';
     protected $fillable = [
        'tanggal',
        'keterangan',
        'cabang',
        'jumlah',
        'status',
        'saldo',
    ];
}
