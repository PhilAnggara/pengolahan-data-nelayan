<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangkapan extends Model
{
    use HasFactory;
    protected $table = 'tangkapan';

    protected $fillable = [
        'user_id', 'tanggal', 'kecamatan_id', 'desa_id', 'hasil_tangkapan', 'created_at'
    ];


    protected $hidden = [
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }
    public function desa(){
        return $this->belongsTo(Desa::class, 'desa_id', 'id');
    }
}
