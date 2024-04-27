@extends('../adminlayout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
                <a class="btn btn-primary" href="{{url ('transaksi/tambah')}}">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Tanggal penjualan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $ambil)
                            <tr>
                                <td>{{$ambil->panjualanid}}</td>
                                <td>{{$ambil->tanggalpenjualan}}</td>
                                <td>{{$ambil->totalharga}}</td>
                                <td>{{$ambil->pelangganid}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"  href="{{url('produk/edit/'. $ambil->produkid)}}"><i class="bi bi-pencil"></i>Detail</a>
                                    <a class="btn btn-sm btn-danger" href="{{url('produk/hapus/'. $ambil->produkid)}}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection