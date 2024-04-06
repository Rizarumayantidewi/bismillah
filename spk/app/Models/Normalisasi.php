<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    public function alternatif(){
        return $this->belongsTo('App\Models\Alternative');
    }

    public function kriteria(){
        return $this->belongsTo('App\Models\Kriteria');
    }

    public function scopeKondisiJenis($query,$jenis){
        $query->where('jenis',$jenis);
    }

    public function scopeBerdasarkanAlternatif($query){
        $query->orderBy('alternatif_id')->groupBy('alternatif_id');
    }

    public function scopeALternatifKriteria($query,$id){
        $query->where('alternatif_id',$id)
            ->orderBy('kriteria_id');
    }

}
