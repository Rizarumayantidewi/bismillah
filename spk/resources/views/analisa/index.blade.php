@extends('layouts.admin')
@section('page')
    Analisa
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Tabel Hasil Analisa</h4>
                            </div>
{{--                            <div class="col-6 text-right">--}}
{{--                                <a href="{{ route('dataawal.create') }}" class="btn btn-primary btn-sm">Tambah Matriks</a>--}}
{{--                            </div>--}}
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
                                        <td>{{$keputusan->bobot_sub_kriteria}}</td>
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
                                <h4 class="card-title">Tabel Matriks R</h4>
                            </div>
{{--                            <div class="col-6 text-right">--}}
{{--                                <a href="{{ route('dataawal.create') }}" class="btn btn-primary btn-sm">Tambah Matriks</a>--}}
{{--                            </div>--}}
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
                                        <td>{{$keputusan->r_hasil}}</td>
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
                                <h4 class="card-title">Tabel Ternormalisasi Berbobot</h4>
                            </div>
{{--                            <div class="col-6 text-right">--}}
{{--                                <a href="{{ route('dataawal.create') }}" class="btn btn-primary btn-sm">Tambah Matriks</a>--}}
{{--                            </div>--}}
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
        </div>
    </div>
@endsection
