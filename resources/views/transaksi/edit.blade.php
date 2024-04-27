@extends('../adminlayout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
            </div>
            <div class="">
               <form action="{{ url('produk/edit/'.$edit->produkid) }}" method="post">
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
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Produk</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="namaproduk" id="namaproduk" value="{{ $edit->namaproduk }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Harga</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="harga" id="harga"
                                    value="{{ $edit->harga }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Stok</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="stok" id="stok"
                                    value="{{ $edit->stok }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-8">
                                <button class="btn btn-primary w-100 m-2" type="submit">Simpan</button>
                                <a href="{{url ('produk')}}" class="btn btn-primary w-100 m-2" type="reset">Kembali</a>
                            </div>
                        </div>
                </form>
                </table>
            </div>
        </div>
    </div>
@endsection