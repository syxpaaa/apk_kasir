@extends('../adminlayout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
            </div>
            <div class="">
               <form action="{{ url('admin/edit/'.$editad->adminid) }}" method="post">
                    @csrf
                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{session('pesan')}}
                          </div>
                        @endif
                        {{-- pesan jika validasi gagal --}}
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            Gagal login
                          </div>
                        @endif
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $editad->nama }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    value="{{ $editad->alamat }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Telepon</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="telpon" id="telpon"
                                    value="{{ $editad->telpon }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="username" id="username"
                                    value="{{ $editad->username }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="password" id="password"
                                    value="{{ $editad->password }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-level" for="basic-default-name">Akses</label>
                            <div class="col-sm-2">
                                <select class="form-select" name="akses" id="akses" placeholder="akses">
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-8">
                                <button class="btn btn-primary w-100 m-2" type="submit">Simpan</button>
                                <a href="{{url ('admin')}}" class="btn btn-primary w-100 m-2" type="reset">Kembali</a>
                            </div>
                        </div>
                </form>
                </table>
            </div>
        </div>
    </div>
@endsection