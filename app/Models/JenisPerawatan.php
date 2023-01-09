<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPerawatan extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];

    function perawatan()
    {
        return $this->hasMany(Perawatan::class);
    }
}
