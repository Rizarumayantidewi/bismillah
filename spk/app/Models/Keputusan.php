<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;
    protected $table = 'keputusans';
    protected $guarded = [];

    public function sub_kriteria(){
        return $this->belongsTo('App\Models\Sub_kriteria');
    }

}
