<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    
    public function Lowongan_keahlians(){
        return $this->hasMany(Lowongan_keahlian::class);
    }
}
