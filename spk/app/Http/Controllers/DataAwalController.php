<?php

namespace App\Http\Controllers;


use App\Models\Alternative;
use App\Models\DataAwal;
use App\Models\Keputusan;
use App\Models\Kriteria;
use App\Models\Normalisasi;
use App\Models\Sub_kriteria;
use App\Supports\Logika;
use Illuminate\Http\Request;

class DataAwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Logika $logika){
        $this->logika = $logika;
    }

    public function index()
    {
        $this->logika->normalisasi();
        // return $keputusan = Keputusan::all();
        $kriteria   = Kriteria::berdasarkan()->get();
// Asumsikan 'v' adalah nama kolom yang ingin Anda periksa nilainya.
        $matriks = Alternative::with(['keputusan' => function ($query) {
            $query->orderBy('kriteria_id', 'asc');
            $query->with('sub_kriteria.kriteria');
        }])
            ->get();

        // $matriks    = Hasil::berdasarkanAlternatif()->get();
        $nilai      = '' ;
        return view('data_awal.index',compact('nilai','kriteria','matriks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::with('sub_kriteria')->get();
        $alt = Alternative::all();
        return view('data_awal.create', compact('kriteria', 'alt'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $alternatif = Alternative::find($request->alternative_id);
        $alternatif = Alternative::create(
            [
                'nama_alternative'=>$request->nama,
            ]
        );
        $sub_kriterias =  Sub_kriteria::whereIn('id',$request->kriteria)->with('kriteria')->get();

        foreach ($sub_kriterias as $key => $sub_kriteria) {
            Keputusan::create(
                [
                    'alternative_id'      => $alternatif->id,
                    'kriteria_id'      => $sub_kriteria->kriteria->id,
                    'bobot_kriteria'=>$sub_kriteria->kriteria->bobot,
                    'sub_kriteria_id'  => $sub_kriteria->id,
                    'bobot_sub_kriteria'  =>$sub_kriteria->bobot,
                ],
            );
        }
        $this->logika->normalisasi();
        return redirect()->route('dataawal.index');
        // return $request->all();
        // return $this->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataAwal  $dataAwal
     * @return \Illuminate\Http\Response
     */
    public function show(DataAwal $dataAwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataAwal  $dataAwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alternatif =  Alternative::findOrFail($id);
        $keputusan = Keputusan::whereAlternativeId($alternatif->id)->get();
        $sub_kriteria_s = $keputusan->pluck('sub_kriteria_id')->toArray();
        $kriteria = Kriteria::with('sub_kriteria')->get();

        return view('data_awal.edit',compact(
            'alternatif','kriteria','sub_kriteria_s'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataAwal  $dataAwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alternatif =  Alternative::findOrFail($id);
        $alternatif->update(
            [
                'nama_alternative'=>$request->nama,
            ]
        );

        $sub_kriterias =  Sub_kriteria::whereIn('id',$request->kriteria)->with('kriteria')->get();
        Keputusan::whereAlternativeId($alternatif->id)->delete();

        foreach ($sub_kriterias as $key => $sub_kriteria) {
            Keputusan::create(
                [
                    'alternative_id'      => $alternatif->id,
                    'kriteria_id'      => $sub_kriteria->kriteria->id,
                    'bobot_kriteria'=>$sub_kriteria->kriteria->bobot,
                    'sub_kriteria_id'  => $sub_kriteria->id,
                    'bobot_sub_kriteria'  =>$sub_kriteria->bobot,
                ],
            );
        }
        $this->logika->normalisasi();
        return redirect()->route('dataawal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataAwal  $dataAwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasil = Alternative::find($id);
        $hasil->delete();
        $normalisasi = Normalisasi::where('id_alternative',$id);
        $normalisasi->delete();
        $keputusan = Keputusan::where('alternative_id',$id);
        $keputusan->delete();
        return redirect()->back();
    }
}
