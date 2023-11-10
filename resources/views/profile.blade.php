@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Profile Saya</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>: {{ Auth::user()->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>: {{ Auth::user()->email }}</td>
                        </tr>

                        <tr>
                            <th>Tgl. Terdaftar</th>
                            <td>: {{ Auth::user()->created_at }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
