<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        return redirect('/karyawan')->with('success', 'Data disimpan (simulasi).');
    }

    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        return redirect('/karyawan')->with('success', 'Data diperbarui (simulasi).');
    }

    public function destroy($id)
    {
        return redirect('/karyawan')->with('success', 'Data dihapus (simulasi).');
    }
}