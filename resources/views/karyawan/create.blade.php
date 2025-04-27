@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<h2>Tambah Karyawan</h2>
<form action="/karyawan" method="POST">
    @csrf
    Nama: <input name="nama"><br>
    Posisi: <input name="posisi"><br>
    Jadwal: <input name="jadwal"><br>
    Telepon: <input name="telepon"><br>
    Alamat: <input name="alamat"><br>
    <button type="submit">Simpan</button>
</form>
@endsection