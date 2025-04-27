@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="text-center">
        <h1 class="display-4">Selamat Datang di Sistem Reservasi Bioskop</h1>
        <p class="lead">Kelola data karyawan, film, dan pemesanan tiket dengan mudah.</p>

        <hr class="my-4">

        <a href="/karyawan" class="btn btn-primary btn-lg">Kelola Karyawan</a>
        <a href="/film" class="btn btn-success btn-lg">Lihat Film</a>
        <a href="/jadwal" class="btn btn-info btn-lg">Jadwal Tayang</a>
        <a href="/pemesanan" class="btn btn-warning btn-lg">Pemesanan Tiket</a>
    </div>
@endsection

Route::get('/', function () {
    return view('home');
});
