<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banktemp extends Model
{
    use HasFactory;
    protected $table = 'banktemp';

    protected $fillable = [
        'tanggal',
        'keterangan',
        'cabang',
        'jumlah',
        'status',
        'saldo',
    ];
}
