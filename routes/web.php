<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan', [KaryawanController::class, 'store']);
Route::get('/karyawan/{id}', [KaryawanController::class, 'show']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::post('/karyawan/{id}', [KaryawanController::class, 'update']);
Route::get('/karyawan/{id}/delete', [KaryawanController::class, 'destroy']);
