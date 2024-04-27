<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function produk(){
        $ambil = new produk();
        return view('produk.produk', ['data' => $ambil->all()]);
    }

    public function tambah(){
        return view('produk.tambah');
    }

    public function cektambah(Request $request){
        $p = new produk();
        $cek = $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        $p->create($cek);
        return redirect('produk');
    }

    public function edit($id){
        $cek = new produk();
        return view('produk.edit',['edit'=> $cek ->find($id)]);
    }

    public function cekedit(Request $request, $id){
        $p = new produk();
        $validasi = $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        $p = $p->find($id)->update($validasi);
        return redirect('produk')->with('pesan','update produk berhasil');
    }

    public function hapus($id){
        $p = new produk();
        $p = $p->find($id);
        $p->delete();
        return back();
    }
}
