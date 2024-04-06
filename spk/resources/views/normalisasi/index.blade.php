@extends('layouts.admin')
@section('page')
    Normalisasi
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Tabel Ternormalisasi Berbobot</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Marketplace</th>
                            @forelse ($kriteria as $index => $item)
                                <th>{{$item->kode}}</th>
                            @empty

                            @endforelse
                            </thead>
                            <tbody>
                            @forelse ($matriks as $index => $item)
                                <tr>
                                    <th scope="row">{{$index + 1}}</th>
                                    <td>{{$item->nama_alternative}}</td>
                                    @foreach ($item->keputusan as $key => $keputusan)
                                        <td>{{$keputusan->normalisasi_berbobot_hasil}}</td>
                                    @endforeach
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

            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Tabel Matriks Solusi Ideal Positif(A+) dan Negatif(A-)</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>#</th>
                                <th>Kriteria</th>
                                <th>A+</th>
                                <th>A-</th>
                            </thead>
                            <tbody>
                            @forelse ($kriteria as $index => $item)

                                <tr>
                                    <th scope="row">{{$index + 1}}</th>
                                    <td>{{$item->kode}}</td>
                                    <td>{{$item->a_plus}}</td>
                                    <td>{{$item->a_min}}</td>

                                </tr>

                            @empty
                                <tr>
                                    <td colspan="{{1 + count($kriteria)}}" align="center">Data Tidak Ada</td>
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
