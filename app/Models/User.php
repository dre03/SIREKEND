<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['nama', 'username', 'password', 'role', 'email'];

    function sewa()
    {
        return $this->hasMany(Sewa::class);
    }

    // function isAdmin()
    // {
    //     return $this->role === 'admin';
    // }

    // function isUser()
    // {
    //     return $this->role === 'user';
    // }
}
