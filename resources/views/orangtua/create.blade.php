@extends('layout.main')

@section('content')
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Orang Tua</h1>
        </div>
        <div>
            <form action="/orangtua" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input name="nama_lengkap" type="text"
                        class="form-control @error('nama_lengkap')is-invalid
                  @enderror" id="nama"
                        value="{{ old('nama_lengkap') }}" placeholder="Masukan Nama">
                    @error('nama_lengkap')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="TempatLahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text"
                        class="form-control  @error('tempat_lahir')is-invalid
                    @enderror"
                        id="TempatLahir" value="{{ old('tempat_lahir') }}" placeholder="Masukan Tempat Lahir">
                    @error('tempat_lahir')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="TanggalLahir">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date"
                        class="form-control @error('tgl_lahir')is-invalid
                    @enderror" id="TanggalLahir"
                        value="{{ old('tgl_lahir') }}" placeholder="Masukan Tanggal Lahir">
                    @error('tgl_lahir')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input name="umur" type="text"
                        class="form-control @error('umur')is-invalid
                    @enderror" id="umur"
                        value="{{ old('umur') }}" placeholder="Masukan Umur">
                    @error('umur')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text"
                        class="form-control @error('alamat')is-invalid
                  @enderror" id="alamat"
                        value="{{ old('alamat') }}" placeholder="Masukan Alamat">
                    @error('alamat')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender"
                        class="form-control @error('gender')is-invalid
                    @enderror">
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('gender')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="no_hp">No Handphone</label>
                    <input name="no_hp" type="text"
                        class="form-control @error('no_hp')is-invalid
                  @enderror" id="no_hp"
                        value="{{ old('no_hp') }}" placeholder="Masukan No Handphone">
                    @error('no_hp')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="text"
                        class="form-control @error('email')is-invalid
                    @enderror" id="email"
                        value="{{ old('email') }}" placeholder="Masukan Email">
                    @error('email')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class=" my-3 btn btn-danger">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
