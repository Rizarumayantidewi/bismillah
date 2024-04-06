@extends('layouts.admin')
@section('page')
    Users
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Pengelolaan Data User</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Tambah User</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->email }}</td>
                                <td><a href="{{ route('user.edit', $d->id) }}" class="btn btn-primary btn-sm">Edit</a>  |
                                    <a href="{{ route('user.delete', $d->id) }}" class="btn btn-primary btn-sm">Hapus</a></td>
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
