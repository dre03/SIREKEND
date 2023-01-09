<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'produk'];

    function mobil()
    {
        return $this->hasMany(Mobil::class);
    }
}
