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
                    <h2 class="card-title">Edit Pengguna</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('pengguna.update', $user->id) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Nama Lengkap</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama "
                                        value="{{ $user->name }}">
                                </div>
                            </div>

                            <label class="form-label col-sm-2">Email</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Password</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Masukkan Password" value="{{ old('password') }}">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-info" id="simpan">SIMPAN</button>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-danger">BATAL</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
