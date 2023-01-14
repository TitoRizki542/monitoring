@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Kader</h1>
        </div>
        <table class="table table-striped" style="width:100%">
            <thead>
                {{-- <tr>
                    <th scope="col" style="text-align: center">No</th>
                    <th scope="col" style="text-align: center">Nama Lengkap</th>
                    <th scope="col" style="text-align: center">Alamat</th>
                    <th scope="col" style="text-align: center">No Handphone</th>
                    <th scope="col" style="text-align: center">Jenis Kelamin</th>
                    <th scope="col" style="text-align: center">Aksi</th>
                </tr> --}}
                <tr>
                    <td>Nama Lengkap
                    <td>
                    <th>{{ $admin->nama_lengkap }}</th>
                </tr>
                <tr>
                    <td>Tempat Lahir
                    <td>
                    <td>{{ $admin->tempat_lahir }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir
                    <td>
                    <td>{{ $admin->tgl_lahir }}</td>
                </tr>
                <tr>
                    <td>Umur
                    <td>
                    <td>{{ $admin->umur }} Tahun</td>
                </tr>
                <tr>
                    <td>Alamat
                    <td>
                    <td>{{ $admin->alamat }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin
                    <td>
                    <td>{{ $admin->gender }}</td>
                </tr>
                <tr>
                    <td>No Handphone
                    <td>
                    <td>{{ $admin->no_hp }}</td>
                </tr>
                <tr>
                    <td>Email
                    <td>
                    <td>{{ $admin->email }}</td>
                </tr>
            </thead>
        </table>
        <div>
            <a href="/kader" class="btn btn-danger">Kembali</a>
        </div>
    </div>
@endsection
