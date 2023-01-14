@extends('layout.main')

@section('content')
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Anak</h1>
        </div>
        <div>
            <form action="/anak" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input name="nama_lengkap" type="text" autocomplete="off"
                        class="form-control @error('nama_lengkap')is-invalid
                  @enderror" id="nama"
                        placeholder="Masukan Nama">
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
                        id="TempatLahir" placeholder="Masukan Tempat Lahir">
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
                        placeholder="Masukan Tanggal Lahir">
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
                        placeholder="Masukan Umur">
                    @error('umur')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="tinggi_badan">Tinggi Badan</label>
                    <input name="tinggi_badan" type="text"
                        class="form-control @error('tinggi_badan')is-invalid
              @enderror" id="tinggi_badan"
                        placeholder="Masukan Tinggi Badan">
                    @error('tinggi_badan')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="berat_badan">Berat Badan</label>
                    <input name="berat_badan" type="text"
                        class="form-control @error('berat_badan')is-invalid
              @enderror" id="berat_badan"
                        placeholder="Masukan Tinggi Badan">
                    @error('berat_badan')
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
                        placeholder="Masukan Alamat">
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
                <button type="submit" class=" my-3 btn btn-danger">Tambahkan</button>
            </form>
        </div>
    @endsection
