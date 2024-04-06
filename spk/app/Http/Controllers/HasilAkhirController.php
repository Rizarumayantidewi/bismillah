<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\HasilAkhir;
use App\Models\Kriteria;
use App\Supports\Logika;
use Illuminate\Http\Request;

class HasilAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Logika $logika){
        $this->logika = $logika ;
    }
    public function index()
    {
        $this->logika->normalisasi();
        $alternatifs = Alternative::orderBy('id','asc')->get();
        $kriteria   = Kriteria::berdasarkan()->get();
        $matriks = Alternative::with(['keputusan' => function ($query) {
            $query->orderBy('kriteria_id','asc');
            $query->with('sub_kriteria.kriteria');
        }])->get();
        // $matriks    = Hasil::berdasarkanAlternatif()->get();
        $nilai      = '' ;

        return view('hasil_akhir.index',compact(
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
     * @param  \App\Models\HasilAkhir  $hasilAkhir
     * @return \Illuminate\Http\Response
     */
    public function show(HasilAkhir $hasilAkhir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilAkhir  $hasilAkhir
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilAkhir $hasilAkhir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasilAkhir  $hasilAkhir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasilAkhir $hasilAkhir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilAkhir  $hasilAkhir
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilAkhir $hasilAkhir)
    {
        //
    }
}
