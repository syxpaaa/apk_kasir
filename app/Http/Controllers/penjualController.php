<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;

class penjualController extends Controller
{
    public function transaksi(){
        $ambil = new penjualan();
        return view('transaksi.transaksi', ['data' => $ambil->all()]);
    }

    public function tambahtransaksi(){
        return view('transaksi.tambah');
    }
}
