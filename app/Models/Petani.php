<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petani extends Authenticatable
{
    protected $fillable = [
        'nama_petani',
        'password',
        'email',
    ];

    // Tambahkan ini jika kamu ingin menggunakan fitur remember_token
    protected $hidden = [
        'password', 
        'remember_token',
    ];
}


