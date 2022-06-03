<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang_usaha extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];

    public function Bidang_usahas(){
        return $this->hasMany(Mitra::class);
    }
}
