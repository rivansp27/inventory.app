<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/barang',\App\Http\Controllers\barangController::class);
Route::resource('/penerima_barang',\App\Http\Controllers\penerima_barangController::class);
Route::resource('/supplier',\App\Http\Controllers\supplierController::class);