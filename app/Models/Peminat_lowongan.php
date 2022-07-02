<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminat_lowongan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Lowongans()
    {
        return $this->belongsTo(Lowongan::class);
    }
}
