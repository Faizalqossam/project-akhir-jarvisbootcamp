<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat','kontak','telepon','email','web'];

    public function Lowongans(){
        return $this->hasMany(Lowongan::class);
    }

    public function Bidang_usahas(){
        return $this->belongsTo(Bidang_usaha::class);
    }

    public function Sektor_usahas(){
        return $this->belongsTo(Sektor_usaha::class);
    }


}
