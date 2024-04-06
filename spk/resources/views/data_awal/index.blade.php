@extends('layouts.admin')
@section('page')
    Matriks
@endsection
@section('content')
    <style>
        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; /* Memungkinkan scrolling kinetik pada iOS. */
        }

    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Pengelolaan Matriks</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('dataawal.create') }}" class="btn btn-primary btn-sm">Tambah Matriks</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width ">
                        <div class="table-responsive">

                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Marketplace</th>
                            @forelse ($kriteria as $index => $item)
                                <th>{{$item->kode}}</th>
                            @empty

                            @endforelse
                            @if (Auth::user() && Auth::user()->role_name == 'admin')

                                <th>Opsi</th>
                            @endif
                            </thead>
                            <tbody>
                            @forelse ($matriks as $index => $item)
                                <tr>
                                    <th scope="row">{{$index + 1}}</th>
                                    <td>{{$item->nama_alternative}}</td>
                                    @foreach ($item->keputusan as $key => $keputusan)
                                        <td>{{$keputusan->sub_kriteria->nama}}</td>
                                    @endforeach
                                    @if (Auth::user() && Auth::user()->role_name == 'admin')

                                    <td><a href="{{route('dataawal.edit',$item->id)}}" class="btn btn-sm btn-primary">Edit</a>  |  <a href="{{route('dataawal.destroy',$item->id)}}"  class="btn btn-sm btn-primary">Hapus</a></td>
                                    @endif
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="{{3 + count($kriteria)}}" align="center">Data Tidak Ada</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
