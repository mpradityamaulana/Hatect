<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AhliPertanian extends Authenticatable
{

    protected $fillable = [
        'nama_ahlipertanian', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}