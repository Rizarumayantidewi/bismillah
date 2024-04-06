<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    public function hasil(){
        return $this->hasMany('App\Models\Hasil');
    }

    public function sub_kriteria(){
        return $this->hasMany('App\Models\Sub_kriteria');
    }

    public function scopeBerdasarkan($query){
        $query->orderBy('id','asc');
    }
}
