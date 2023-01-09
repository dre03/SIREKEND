<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'biaya', 'deskripsi', 'mobil_id', 'jenis_perawatan_id'];

    function jenis_perawatan()
    {
        return $this->belongsTo(JenisPerawatan::class);
    }
    function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
    function perawatan()
    {
        return $this->hasMany(Perawatan::class);
    }
}
