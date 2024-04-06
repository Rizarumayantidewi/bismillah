@extends('layouts.admin')
@section('page')
    Users
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Pengelolaan Data Kriteria</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('kriteria.create') }}" class="btn btn-primary btn-sm">Tambah Kriteria</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Nama Kriteria</th>
                            <th>Bobot</th>
                            <th>Atribut</th>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->nama_kriteria }}</td>
                                    <td>{{ $d->bobot }}</td>
                                    <td>{{ $d->attribute }}</td>
                                    <td><a href="{{ route('kriteria.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a> |
                                        <a href="{{ route('kriteria.delete',$d->id) }}" class="btn btn-primary btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Pengelolaan Data Sub-Kriteria</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('subkriteria.create') }}" class="btn btn-primary btn-sm">Tambah Sub-Kriteria</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <th>ID</th>
                        <th>Nama Kriteria</th>
                        <th>Nama Sub-Kriteria</th>
                        <th>Bobot</th>
                        <th>Opsi</th>
                        </thead>
                        <tbody>
                        @foreach($sub as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama_kriteria }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->bobot }}</td>
                                <td><a href="{{ route('subkriteria.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a> |
                                    <a href="{{ route('subkriteria.delete',$d->id) }}" class="btn btn-primary btn-sm">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
