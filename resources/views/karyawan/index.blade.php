@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<h2>Daftar Karyawan</h2>
<a href="/karyawan/create">Tambah Karyawan</a>
<ul>
    @foreach($karyawans as $karyawan)
        <li>
            {{ $karyawan['nama'] }} - {{ $karyawan['posisi'] }}
            <a href="/karyawan/{{ $karyawan['id'] }}">Detail</a>
            <a href="/karyawan/{{ $karyawan['id'] }}/edit">Edit</a>
            <a href="/karyawan/{{ $karyawan['id'] }}/delete">Hapus</a>
        </li>
    @endforeach
</ul>
@endsection
