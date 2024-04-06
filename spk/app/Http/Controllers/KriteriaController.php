<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Kriteria;
use App\Models\Sub_kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kriteria::all();
        $sub = Sub_kriteria::join('kriterias', 'kriterias.id','=', 'sub_kriterias.kriteria_id')
            ->select('sub_kriterias.*','kriterias.nama_kriteria')
            ->get();
        return view('kriteria.index', compact('data','sub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Alternative::all();

        return view('kriteria.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kriteria' => 'required',
            'kode' => 'required',
            'bobot' => 'required',
            'attribute' => 'required',
        ]);

        $data = new Kriteria();
        $data->kode = $request->kode;
        $data->nama_kriteria = $request->nama_kriteria;
        $data->bobot = $request->bobot;
        $data->attribute = $request->attribute;
        if ($request->id_alternative)
        {
            $data->id_alternatif = $request->id_alternatif;
        }
        $data->save();

        return redirect(route('kriteria.index'))->with('msg','Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alternative = Alternative::all();
        $data = Kriteria::find($id);

        return view('kriteria.edit',compact('data', 'alternative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kriteria::find($id);
        $this->validate($request,[
            'kode' => 'required',
            'nama_kriteria' => 'required',
            'bobot' => 'required',
            'attribute' => 'required',
        ]);
        $data->kode = $request->kode;
        $data->nama_kriteria = $request->nama_kriteria;
        $data->bobot = $request->bobot;
        $data->attribute = $request->attribute;
        if ($request->id_alternative)
        {
            $data->id_alternatif = $request->id_alternatif;
        }
        $data->save();

        return redirect(route('kriteria.index'))->with('msg','Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kriteria::find($id);
        $data->delete();

        return redirect(route('kriteria.index'))->with('msg','Data Berhasil Dihapus');

    }
}
