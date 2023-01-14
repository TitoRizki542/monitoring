@extends('layout.main')

@section('content')
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Rekap</h1>
        </div>
        <div>
            <form action="/update/{{ $rekap->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="nama" placeholder="Masukan Nama"
                        value="{{ $rekap->nama_lengkap }}">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Rekap</label>
                    <input name="tanggal" type="date" class="form-control" id="tanggal"
                        placeholder="Masukan Tanggal Rekap" value="{{ $rekap->tanggal }}">
                </div>
                <div class="form-group">
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
                </div>
                <div class="form-group">
                    <label for="tinggi_badan_sebelum">Tinggi Badan Sebelum</label>
                    <input name="tinggi_badan_sebelu," type="text" class="form-control" id="tinggi_badan_sebelum"
                        placeholder="Masukan Tinggi Badan Sebelum" value="{{ $rekap->tinggi_badan_sebelum }}">
                </div>
                <div class="form-group">
                    <label for="tinggi_badan_sesudah">Tinggi Badan Sesudah</label>
                    <input name="tinggi_badan_sesudah" type="text" class="form-control" id="tinggi_badan_sesudah"
                        placeholder="Masukan Tinggi Badan Sesudah" value="{{ $rekap->tinggi_badan_sesudah }}">
                </div>
                <div class="form-group">
                    <label for="berat_badan_sebelum">Berat Badan Sebelum</label>
                    <input name="berat_badan_sebelu," type="text" class="form-control" id="berat_badan_sebelum"
                        placeholder="Masukan Berat Badan Sebelum" value="{{ $rekap->berat_badan_sebelum }}">
                </div>
                <div class="form-group">
                    <label for="berat_badan_sesudah">Berat Badan Sesudah</label>
                    <input name="berat_badan_sesudah" type="text" class="form-control" id="berat_badan_sesudah"
                        placeholder="Masukan Berat Badan Sesudah" value="{{ $rekap->berat_badan_sesudah }}">
                </div>
        </div>
        <button type="submit" class="mt-2 btn btn-danger">Perbarui</button>

    </div>
    </form>
@endsection
