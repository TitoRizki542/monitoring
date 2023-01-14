@extends('layout.main')

@section('content')
    <div class="container-fluid" style="min-height: 73vh">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Rekap</h1>
        </div>
        <div class="mb-4">
            <a class="btn btn-danger" href="/rekap/create"><i class="fa-solid fa-user-plus"></i> Tambah Data</a>
            </button>
        </div>
        @include('include.flash')
        <div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center">No</th>
                        <th scope="col" style="text-align: center">Nama Anak</th>
                        <th scope="col" style="text-align: center">Tanggal</th>
                        <th scope="col" style="text-align: center">Hari</th>
                        <th scope="col" style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekap_list as $rekap)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td style="text-align: center">{{ $rekap->nama_lengkap }}</td>
                            <td style="text-align: center">{{ $rekap->tanggal }}</td>
                            <td style="text-align: center">{{ $rekap->hari }}</td>
                            <td style="text-align: center">
                                <a href="/detailrekap/{{ $rekap->id }}" class="btn btn-info">Detail</a>
                                {{-- <a href="/showrekap/{{ $rekap->id }}" class="btn btn-warning">Edit</a> --}}
                                <a href="/deleterekap/{{ $rekap->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
