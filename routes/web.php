<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

// import my class Controller
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ExampleController;



// beranda
Route::get('/', [BarangController::class, 'index']);
Route::get('/get', [BarangController::class, 'get_daftar_barang']);