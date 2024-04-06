<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Sub_kriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kriteria::all();

        return view('subkriteria.create', compact('data'));
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
            'id_kriteria' => 'required',
            'nama_subkriteria' => 'required',
            'bobot' => 'required',
        ]);

        $data = new Sub_kriteria();
        $data->kriteria_id = $request->id_kriteria;
        $data->nama = $request->nama_subkriteria;
        $data->bobot = $request->bobot;
        $data->save();

        return redirect(route('kriteria.index'))->with('msg','Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_kriteria  $sub_kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_kriteria $sub_kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub_kriteria  $sub_kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = Kriteria::all();
        $data = Sub_kriteria::find($id);

        return view('subkriteria.edit', compact('data','kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub_kriteria  $sub_kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id_kriteria' => 'required',
            'nama_subkriteria' => 'required',
            'bobot' => 'required',
        ]);

        $data = Sub_kriteria::find($id);
        $data->kriteria_id = $request->id_kriteria;
        $data->nama = $request->nama_subkriteria;
        $data->bobot = $request->bobot;
        $data->save();

        return redirect(route('kriteria.index'))->with('msg','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_kriteria  $sub_kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_kriteria $sub_kriteria)
    {
        //
    }
}
