@extends('../adminlayout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
            </div>
            <div class="">
                <form action="{{ url('admin/tambah') }}" method="post">
                    @csrf
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Alamat">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Telepon</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="telpon" id="telpon"
                                    placeholder="Telepon">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="password" id="password"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-level" for="basic-default-name">akses</label>
                            <div class="col-sm-1">
                                <select class="form-selest" name="akses" id="akses">
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-8">
                                <button class="btn btn-primary w-100 m-2" type="submit">Kirim</button>
                                <a href="{{url ('admin')}}" class="btn btn-primary w-100 m-2" type="reset">Kembali</a>
                            </div>
                        </div>
                </form>
                </table>
            </div>
        </div>
    </div>
@endsection