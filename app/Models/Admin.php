<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'umur',
        'alamat',
        'gender',
        'no_hp',
        'email',
    ];
    // public function user()
    // {
    //     return $this->belongsTo(user::class);
    // }
}
