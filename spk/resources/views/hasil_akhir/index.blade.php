@extends('layouts.admin')
@section('page')
    Hasil Akhir
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Hasil Akhir</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Marketplace</th>
                            <th>D+</th>
                            <th>D-</th>
                            <th>V</th>
                            <th>Rank</th>
                            </thead>
                            <tbody>
                            @forelse ($matriks as $index => $item)
                                <tr>
                                    <th scope="row">{{$index + 1}}</th>
                                    <td>{{$item->nama_alternative}}</td>
                                    <td>{{$item->d_plus}}</td>
                                    <td>{{$item->d_min}}</td>
                                    <td>{{$item->v}}</td>
                                    <td>{{$item->rank}}</td>
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
@endsection
