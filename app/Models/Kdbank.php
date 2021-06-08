<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kdbank extends Model
{
    use HasFactory;
    protected $table = 'kdbank';

    protected $fillable = [
        'nama_bank', 'kode'
    ];
}
