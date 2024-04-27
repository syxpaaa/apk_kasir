<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\penjualController;
use App\Http\Controllers\produkController;
use App\Http\Middleware\adminMidleware;
use App\Http\Middleware\cekadminMidleware;
use Illuminate\Support\Facades\Route;

Route::get('login',[loginController::class,'login']);
Route::post('login',[loginController::class,'ceklogin']);
Route::get('keluar',[loginController::class,'keluar']);

Route::view('layout','adminlayout');
Route::get('/',[adminController::class,'index'])->middleware(adminMidleware::class);

//produk
Route::get('produk',[produkController::class,'produk'])->middleware(adminMidleware::class);
Route::get('produk/tambah',[produkController::class,'tambah'])->middleware(adminMidleware::class);
Route::post('produk/tambah',[produkController::class,'cektambah'])->middleware(adminMidleware::class);
Route::get('produk/edit/{id}',[produkController::class,'edit'])->middleware(adminMidleware::class);
Route::post('produk/edit/{id}',[produkController::class,'cekedit'])->middleware(adminMidleware::class);
Route::get('produk/hapus/{id}',[produkController::class,'hapus'])->middleware(adminMidleware::class);

//admin
Route::get('admin',[adminController::class,'admin'])->middleware(adminMidleware::class);
Route::get('admin/tambah',[adminController::class,'tambahadmin'])->middleware(adminMidleware::class);
Route::post('admin/tambah',[adminController::class,'cektambahadmin'])->middleware(adminMidleware::class);
Route::get('admin/edit/{id}',[adminController::class,'editadmin'])->middleware(adminMidleware::class);
Route::post('admin/edit/{id}',[adminController::class,'cekeditadmin'])->middleware(adminMidleware::class);
Route::get('admin/hapus/{id}',[adminController::class,'hps'])->middleware(adminMidleware::class);

//pelanggan
Route::get('pelanggan',[pelangganController::class,'pelanggan'])->middleware(adminMidleware::class);
Route::get('pelanggan/tambah',[pelangganController::class,'tambah'])->middleware(adminMidleware::class);
Route::post('pelanggan/tambah',[pelangganController::class,'cektambah'])->middleware(adminMidleware::class);
Route::get('pelanggan/edit/{id}',[pelangganController::class,'edit'])->middleware(adminMidleware::class);
Route::post('pelanggan/edit/{id}',[pelangganController::class,'cekedit'])->middleware(adminMidleware::class);
Route::get('pelanggan/hapus/{id}',[pelangganController::class,'hapus'])->middleware(adminMidleware::class);

//transaksi
Route:: get('transaksi',[penjualController::class,'transaksi']);
Route:: get('transaksi/tambah',[penjualController::class,'tambahtransaksi']);