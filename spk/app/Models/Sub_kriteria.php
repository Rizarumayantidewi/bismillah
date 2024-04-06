<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_kriteria extends Model
{
    use HasFactory;

    public function kriteria(){
        return $this->belongsTo('App\Models\Kriteria');
    }
    public function scopeBerdasarkan($query){
        $query->orderBy('id','asc');
    }
}