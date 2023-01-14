@extends('layout.main')

@section('content')

<div class="container-fluid" style="min-height: 73vh">

    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Kader</h1>
        </div>
        <div>
            <form action="/update/{{$admin->id}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input name="nama_lengkap" type="text" class="form-control" id="nama" placeholder="Masukan Nama"
                    value="{{ $admin->nama_lengkap }}">
                </div>
                <div class="form-group">
                    <label for="TempatLahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="TempatLahir" placeholder="Masukan Tempat Lahir"
                    value="{{ $admin->tempat_lahir }}">
                  </div>
                  <div class="form-group">
                    <label for="TanggalLahir">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" id="TanggalLahir" placeholder="Masukan Tanggal Lahir"
                    value="{{ $admin->tgl_lahir }}">
                  </div>
                  <div class="form-group">
                    <label for="umur">Umur</label>
                    <input name="umur" type="text" class="form-control" id="umur" placeholder="Masukan Umur"
                    value="{{ $admin->umur }}">
                  </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat"
                  value="{{ $admin->alamat }}">
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                      <option selected>{{ $admin->gender }}</option>
                      <option value="laki-laki">Laki Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                <div class="form-group mt-3">
                  <label for="no_hp">No Handphone</label>
                  <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Masukan No Handphone"
                    value="{{ $admin->no_hp }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Masukan Email"
                    value="{{ $admin->email }}">
                  </div>
                </div>
                <button type="submit" class="mt-2 btn btn-danger">Perbarui</button>
                </div>
              </form>
        </div>
</div>
@endsection
