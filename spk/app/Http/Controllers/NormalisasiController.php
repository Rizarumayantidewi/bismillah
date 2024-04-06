<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Kriteria;
use App\Models\Normalisasi;
use App\Supports\Logika;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    public function __construct(Logika $logika){
        $this->logika = $logika ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $alternatifs = Alternative::orderBy('id','asc')->get();
        $this->logika->normalisasi();
        $kriteria   = Kriteria::berdasarkan()->get();
        $matriks = Alternative::with(['keputusan' => function ($query) {
            $query->orderBy('kriteria_id','asc');
            $query->with('sub_kriteria.kriteria');
        }])->get();
        // $matriks    = Hasil::berdasarkanAlternatif()->get();
        $nilai      = '' ;
        return view('normalisasi.index',compact(
            'kriteria','matriks','nilai','alternatifs'
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Normalisasi $normalisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Normalisasi  $normalisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Normalisasi $normalisasi)
    {
        //
    }
}
