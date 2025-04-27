@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<<h2>Detail Karyawan</h2>
Nama: {{ $karyawan['nama'] }}<br>
Posisi: {{ $karyawan['posisi'] }}<br>
Jadwal: {{ $karyawan['jadwal'] }}<br>
Telepon: {{ $karyawan['telepon'] }}<br>
Alamat: {{ $karyawan['alamat'] }}<br>
<a href="/karyawan">Kembali</a>
@endsection