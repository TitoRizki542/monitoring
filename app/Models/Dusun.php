<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    use HasFactory;

    protected $fillable = [
        'anak_id',
        'nama_dusun',
        'jumlah_pendusuk',
        'rt',
        'rw',
    ];

    // public function anak()
    // {
    //     return $this->belongsTo(anak::class);
    // }
}
