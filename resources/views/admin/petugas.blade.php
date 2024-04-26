@extends('../adminlayout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data</h6>
                <a class="btn btn-primary" href="{{url ('admin/tambah')}}">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">akses</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $inem)
                            <tr>
                                <td>{{$inem->adminid}}</td>
                                <td>{{$inem->nama}}</td>
                                <td>{{$inem->alamat}}</td>
                                <td>{{$inem->telpon}}</td>
                                <td>{{$inem->username}}</td>
                                <td>{{$inem->password}}</td>
                                <td>{{$inem->akses}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"  href="{{url('admin/edit/'. $inem->adminid)}}"><i class="bi bi-pencil"></i></a>
                                    <a class="btn btn-sm btn-danger" href="{{url('admin/hapus/'. $inem->adminid)}}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection