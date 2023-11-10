@extends('adminlte::page')

@section('title', 'Pengguna')

@section('content_header')
    <h1 class="m-0 text-dark">Pengguna</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">List Data Pengguna</h2>
                    <a href="{{ route('pengguna.create') }}" class="btn btn-md btn-primary float-right">Tambah Pengguna</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th class="text-center">Aksi</th>
                        </tr>

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($user as $u)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                <a href="" class="btn btn-md btn-warning">Edit</a>
                                <a href="" class="btn btn-md btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
