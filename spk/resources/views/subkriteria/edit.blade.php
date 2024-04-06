@extends('layouts.admin')
@section('page')
    Users
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Tambah Data Kriteria</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('kriteria.index') }}" class="btn btn-primary btn-sm">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subkriteria.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pilih Kriteria</label>
                                <select name="id_kriteria" class="form-control" id="">
                                    @foreach($kriteria as $d)
                                        <option value="{{ $d->id }}"> {{ $d->nama_kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Sub-Kriteria</label>
                                <input type="text" name="nama_subkriteria" value="{{ $data->nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Bobot</label>
                                <input type="text" name="bobot" value="{{ $data->bobot }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
