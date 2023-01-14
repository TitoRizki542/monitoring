@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid" style="min-height: 73vh">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Rekap</h1>
        </div>
        {{-- <table class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center">No</th>
                    <th scope="col" style="text-align: center">Nama</th>
                    <th scope="col" style="text-align: center">Tanggal</th>
                    <th scope="col" style="text-align: center">Hari</th>
                    <th scope="col" style="text-align: center">Tinggi Badan Sebelum</th>
                    <th scope="col" style="text-align: center">Tinggi Badan Sesudah</th>
                    <th scope="col" style="text-align: center">Berat Badan Sebelum</th>
                    <th scope="col" style="text-align: center">Berat Badan Sesudah</th>
                </tr>
            </thead>
        </table> --}}
        <table class="table table-striped" style="width:100%">
            <tr>
                <td>Nama
                <td>
                <th>{{ $rekap->nama_lengkap }}</th>
            </tr>
            <tr>
                <td>Tanggal Rekap
                <td>
                <td>{{ $rekap->tanggal }}</td>
            </tr>
            <tr>
                <td>Hari
                <td>
                <td>{{ $rekap->hari }}</td>
            </tr>
            <tr>
                <td>Tinggi Badan Sebelum
                <td>
                <td>{{ $rekap->tinggi_badan_sebelum }} Cm</td>
            </tr>
            <tr>
                <td>Tinggi Badan Sesudah
                <td>
                <td>{{ $rekap->tinggi_badan_sesudah }} Cm</td>
            </tr>
            <tr>
                <td>Berat Badan Sebelum
                <td>
                <td>{{ $rekap->berat_badan_sebelum }} Kg</td>
            </tr>
            <tr>
                <td>Berat Badan Sesudah
                <td>
                <td>{{ $rekap->berat_badan_sesudah }} Kg</td>
            </tr>
        </table>
        <div>
            <a href="/rekap" class="btn btn-danger">Kembali</a>
            <a href="/stunting" class="btn btn-info">Grafik</a>
        </div>
    </div>
@endsection
