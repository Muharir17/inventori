<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Alert;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('pengguna.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);

        Alert::success('Berhasilll', 'Menambahkan Data Sukses');
        // toast('berhasil gan','success');

        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('pengguna.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'password' => is_null($request->password) ? $user->password : Hash::make($request->password),
            'email' => $request->email,
        ]);

        Alert::success('Berhasilll', 'Edit Data Sukses');
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        Alert::success('Berhasilll', 'Hapus Data Sukses');
        return redirect()->route('pengguna.index');
    }

    public function export()
    {
        $user = User::all();
        $pdf = PDF::loadview('pengguna.pdf', compact('user'));
        return $pdf->stream('pengguna.pdf');
    }
}
