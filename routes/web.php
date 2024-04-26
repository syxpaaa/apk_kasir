<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('login',[loginController::class,'login']);
Route::post('login',[loginController::class,'ceklogin']);
Route::get('keluar',[loginController::class,'keluar']);

Route::view('layout','adminlayout');
Route::get('/',[adminController::class,'index']);

Route::get('produk',[adminController::class,'produk']);
Route::get('produk/tambah',[adminController::class,'tambah']);
Route::post('produk/tambah',[adminController::class,'cektambah']);
Route::get('produk/edit/{id}',[adminController::class,'edit']);
Route::post('produk/edit/{id}',[adminController::class,'cekedit']);
Route::get('produk/hapus/{id}',[adminController::class,'hapus']);

Route::get('admin',[adminController::class,'admin']);
Route::get('admin/tambah',[adminController::class,'tambahadmin']);
Route::post('admin/tambah',[adminController::class,'cektambahadmin']);
Route::get('admin/edit/{id}',[adminController::class,'editadmin']);
Route::post('admin/edit/{id}',[adminController::class,'cekeditadmin']);
Route::get('admin/hapus/{id}',[adminController::class,'hps']);
