@extends('layout.main')

@section('content')
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Rekap</h1>
        </div>
        <div>
            <form action="/rekap" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama Anak</label>
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
                    <label for="tanggal">Tanggal Rekap</label>
                    <input name="tanggal" type="date"
                        class="form-control  @error('tanggal')is-invalid
                    @enderror" id="tanggal"
                        value="{{ old('tanggal') }}" placeholder="Masukan Tempat Lahir">
                    @error('tanggal')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hari">Hari</label>
                    <select class="form-control" name="hari" id="hari">
                        <option>Pilih Hari </option>
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                    </select>
                    {{-- <input name="hari" type=""
                        class="form-control @error('hari')is-invalid
                    @enderror" id="hari"
                        value="{{ old('hari') }}" placeholder="Masukan Hari "> --}}
                    @error('hari')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tinggi_badan_sebelum">Tinggi Badan Sebelum</label>
                    <input name="tinggi_badan_sebelum" type="text"
                        class="form-control @error('tinggi_badan_sebelum')is-invalid
                    @enderror"
                        id="tinggi_badan_sebelum" value="{{ old('tinggi_badan_sebelum') }}"
                        placeholder="Masukan Tinggi Badan Sebelum">
                    @error('tinggi_badan_sebelum')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tinggi_badan_sesudah">Tinggi Badan Sesudah</label>
                    <input name="tinggi_badan_sesudah" type="text"
                        class="form-control @error('tinggi_badan_sesudah')is-invalid
                  @enderror"
                        id="tinggi_badan_sesudah" value="{{ old('tinggi_badan_sesudah') }}"
                        placeholder="Masukan Tinggi Badan Sesudah">
                    @error('tinggi_badan_sesudah')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="berat_badan_sebelum">Berat Badan Sebelum</label>
                    <input name="berat_badan_sebelum" type="text"
                        class="form-control @error('berat_badan_sebelum')is-invalid
                    @enderror"
                        id="berat_badan_sebelum" value="{{ old('berat_badan_sebelum') }}"
                        placeholder="Masukan Berat Badan Sebelum">
                    @error('berat_badan_sebelum')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="berat_badan_sesudah">Berat Badan Sesudah</label>
                    <input name="berat_badan_sesudah" type="text"
                        class="form-control @error('berat_badan_sesudah')is-invalid
                  @enderror"
                        id="berat_badan_sesudah" value="{{ old('berat_badan_sesudah') }}"
                        placeholder="Masukan Berat badan sesudah">
                    @error('berat_badan_sesudah')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class=" my-3 btn btn-danger">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
