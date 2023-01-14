<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tanggal',
        'hari',
        'tinggi_badan_sebelum',
        'tinggi_badan_sesudah',
        'berat_badan_sebelum',
        'berat_badan_sesudah',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(user::class);
    // }
}
