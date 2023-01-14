<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [

        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'umur',
        'tinggi_badan',
        'berat_badan',
        'gender',
        'alamat',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(user::class);
    // }
}
