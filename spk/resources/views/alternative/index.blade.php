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
                                <h4 class="card-title">Pengelolaan Data Alternative</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('alternative.create') }}" class="btn btn-primary btn-sm">Tambah Alternative</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Nama Alternative</th>
                            <th>Deskripsi</th>
                            <th>Opsi</th>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama_alternative }}</td>
                                <td>{{ $d->deskripsi }}</td>
                                <td><a href="{{ route('alternative.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a> |
                                    <a href="{{ route('alternative.delete',$d->id) }}" class="btn btn-primary btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
