@extends('layouts.admin')
@section('page')
    Matriks
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
                                <h4 class="card-title">Tambah Data Matriks</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('dataawal.index') }}" class="btn btn-primary btn-sm">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dataawal.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pilih Alternative</label>
{{--                                <select name="alternative_id" class="form-control" id="">--}}
{{--                                    @foreach($alt as $a)--}}
{{--                                        <option value="{{ $a->id }}">{{ $a->nama_alternative }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
                                <input name="nama" type="text" class="form-control">
                            </div>
                            @forelse ($kriteria as $index => $item)
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="nilai_{{$item->id}}">{{$item->nama_kriteria}}</label>
                                    <div class="col-sm-10">
                                        <select name="kriteria[]"  class="form-control">
                                            <option value=""> ======   Pilih ======</option>
                                            @foreach ($item->sub_kriteria as $index => $sub_kriteria)
                                                <option value="{{$sub_kriteria->id}}">{{$sub_kriteria->nama}} - {{ $sub_kriteria->bobot }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @empty


                            @endforelse

                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
