<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Alternative::all();
        return view('alternative.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alternative.create');
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
            'nama_alternative' => 'required',
        ]);

        $data = new Alternative();
        $data->nama_alternative = $request->nama_alternative;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect(route('alternative.index'))->with('msg','Data Berhasil Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternative  $altertive
     * @return \Illuminate\Http\Response
     */
    public function show(Alternative $altertive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternative  $altertive
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Alternative::find($id);

        return view('alternative.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternative  $altertive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Alternative::find($id);
        $this->validate($request,[
            'nama_alternative' => 'required',
        ]);

        $data->nama_alternative = $request->nama_alternative;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect(route('alternative.index'))->with('msg','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternative  $altertive
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Alternative::find($id);
        $data->delete();

        return redirect(route('alternative.index'))->with('msg','Data Berhasil Dihapus');
    }
}
