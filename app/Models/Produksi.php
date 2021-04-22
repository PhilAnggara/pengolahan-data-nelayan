<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'produksi';

    protected $fillable = [
        'lokasi', 'pasar', 'ikan', 'hasil_produksi', 'terjual', 'created_at'
    ];


    protected $hidden = [
        
    ];
}
