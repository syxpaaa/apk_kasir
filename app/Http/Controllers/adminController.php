<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\produk;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

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

    public function admin(){
        $inem = new admin();
        return view('admin.petugas',['data'=> $inem->all()]);
    }

    public function tambahadmin(){
        return view('admin.tambah');
    }

    public function cektambahadmin(Request $request){
        $p = new admin();
        $cek = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        $p->create($cek);
        if($p->where('nama',$request->input('nama'))->where('alamat',$request->input('alamat'))->where('telpon',$request->input('telpon'))->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
        return redirect('admin')->with('pesan','Tambah berhasil');
        }
        return back()->with('pesan','Tambah gagal');
    }

    public function editadmin($id){
        $p = new admin();
        return view('admin.edit',['editad'=> $p ->find($id)]);
    }

    public function cekeditadmin(Request $request, $id){
        $p = new admin();
        $validasi = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        $p = $p->find($id)->update($validasi);
        return redirect('admin')->with('pesan','update produk berhasil');
    }

    public function hps($id){
        $p = new admin();
        $p = $p->find($id);
        $p->delete();
        return back();
    }
}
