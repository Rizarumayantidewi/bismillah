<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Kriteria;
use App\Supports\Logika;
use Illuminate\Http\Request;

class AnalisaController extends Controller
{
    public function __construct(Logika $logika){
        $this->logika = $logika;
    }

    public function index(){
        $this->logika->normalisasi();
        $kriteria   = Kriteria::berdasarkan()->get();
        $matriks = Alternative::with(['keputusan' => function ($query) {
            $query->orderBy('kriteria_id','asc');
            $query->with('sub_kriteria.kriteria');
        }])->get();
        // $matriks    = Hasil::berdasarkanAlternatif()->get();
        $nilai      = '' ;


        return view('analisa.index',compact('nilai','kriteria','matriks'));
    }
}
