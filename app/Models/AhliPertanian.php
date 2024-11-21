<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AhliPertanian extends Authenticatable
{
    use Notifiable;

    protected $table = 'ahlipertanian';

    protected $fillable = [
        'nama_ahlipertanian', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}