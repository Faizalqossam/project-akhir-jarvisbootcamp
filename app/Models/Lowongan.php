<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    // protected $fillable = ['judul_lowongan','deskripsi_pekerjaan','tanggal_akhir','email'];
    protected $guarded = [];

    public function Lowongan_keahlians()
    {
        return $this->hasMany(Lowongan_keahlian::class);
    }

    public function Mitras()
    {
        return $this->belongsTo(Mitra::class);
    }

    public function Peminat_lowongans()
    {
        return $this->hasMany(Peminat_lowongan::class);
    }
}
