@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<h2>Edit Karyawan</h2>
<form action="/karyawan/{{ $karyawan['id'] }}" method="POST">
    @csrf
    Nama: <input name="nama" value="{{ $karyawan['nama'] }}"><br>
    Posisi: <input name="posisi" value="{{ $karyawan['posisi'] }}"><br>
    Jadwal: <input name="jadwal" value="{{ $karyawan['jadwal'] }}"><br>
    Telepon: <input name="telepon" value="{{ $karyawan['telepon'] }}"><br>
    Alamat: <input name="alamat" value="{{ $karyawan['alamat'] }}"><br>
    <button type="submit">Update</button>
</form>
@endsection