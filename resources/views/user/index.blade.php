@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid" style="min-height: 73vh">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        </div>
        <div class="mb-4">
            <a class="btn btn-danger" href="/user/create"><i class="fa-solid fa-user-plus"></i> Tambah Data</a>
            </button>
        </div>
        @include('include.flash')
        <div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center">No</th>
                        <th scope="col" style="text-align: center">Nama</th>
                        <th scope="col" style="text-align: center">Username</th>
                        <th scope="col" style="text-align: center">Password</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($orangtua_list as $orangtua)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td style="text-align: center">{{ $orangtua->nama_lengkap }}</td>
                            <td style="text-align: center">{{ $orangtua->alamat }}</td>
                            <td style="text-align: center">{{ $orangtua->no_hp }}</td>
                            <td style="text-align: center">
                                <a href="/detail/{{ $orangtua->id }}" class="btn btn-info">Detail</a>
                                <a href="/show/{{ $orangtua->id }}" class="btn btn-warning">Edit</a>
                                <a href="/delete/{{ $orangtua->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
