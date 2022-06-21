<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sektor_usaha extends Model
{
    use HasFactory;
    protected $fillable = ['nama_sektor'];

    public function Sektor_usahas()
    {
        return $this->hasMany(Mitra::class);
    }
}
