<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_mulai', 'tanggal_akhir', 'tujuan', 'noktp', 'user_id', 'mobil_id'];

    function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
