<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangkapan extends Model
{
    use HasFactory;
    protected $table = 'tangkapan';

    protected $fillable = [
        'user_id', 'tanggal', 'kecamatan', 'desa', 'hasil_tangkapan'
    ];


    protected $hidden = [
        
    ];
}
