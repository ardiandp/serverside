<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norekening extends Model
{
    use HasFactory;
    protected $table = 'norekening';

    protected $fillable = [
        'atas_nama', 'alias','norek','bank'
    ];
}
