<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $fillable = ['nopol', 'warna', 'harga_sewa', 'deskripsi', 'cc', 'km_mobil', 'tahun', 'merk_id', 'foto'];

    function merk()
    {
        return $this->belongsTo(Merk::class);
    }

    function sewa()
    {
        return $this->hasMany(Sewa::class);
    }
}
