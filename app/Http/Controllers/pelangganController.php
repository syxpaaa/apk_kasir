<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function pelanggan(){
        $ambil = new pelanggan();
        return view('pelanggan.pelanggan', ['data' => $ambil->all()]);
    }

    public function tambah(){
        return view('pelanggan.tambah');
    }

    public function cektambah(Request $request){
        $p = new pelanggan();
        $cek = $request->validate([
            'namapelanggan' => 'required',
            'alamat' => 'required',
            'nomortelepon' => 'required',
        ]);
        $p->create($cek);
        return redirect('pelanggan');
    }

    public function edit($id){
        $cek = new pelanggan();
        return view('pelanggan.edit',['edit'=> $cek ->find($id)]);
    }

    public function cekedit(Request $request, $id){
        $p = new pelanggan();
        $validasi = $request->validate([
            'namapelanggan' => 'required',
            'alamat' => 'required',
            'nomortelepon' => 'required',
        ]);
        $p = $p->find($id)->update($validasi);
        return redirect('pelanggan')->with('pesan','update pelanggan berhasil');
    }

    public function hapus($id){
        $p = new pelanggan();
        $p = $p->find($id);
        $p->delete();
        return back();
    }
}
