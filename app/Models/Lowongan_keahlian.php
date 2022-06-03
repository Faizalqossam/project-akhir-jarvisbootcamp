<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan_keahlian extends Model
{
    use HasFactory;


    public function Keahlians(){
        return $this->belongsTo(Keahlian::class);
    }

    public function Lowongans(){
        return $this->belongsTo(Lowongan::class);
    }
}
