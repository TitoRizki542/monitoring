@extends('layout.main')

@section('content')
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Orang Tua</h1>
        </div>
        <div>
            <form action="/user" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text"
                        class="form-control @error('nama')is-invalid
                  @enderror" id="nama"
                        value="{{ old('nama') }}" placeholder="Masukan Nama">
                    @error('nama')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <select name="tipe" id="tipe"
                        class="form-control @error('tipe')is-invalid
                    @enderror">
                        <option value="" selected>Pilih Tipe Users</option>
                        <option value="laki-laki">Admin</option>
                        <option value="perempuan">User</option>
                    </select>
                    @error('tipe')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="username">Username</label>
                    <input name="username" type="text"
                        class="form-control @error('username')is-invalid
                  @enderror" id="username"
                        value="{{ old('username') }}" placeholder="Masukan username">
                    @error('username')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input name="password" type="text"
                        class="form-control @error('password')is-invalid
                  @enderror" id="password"
                        value="{{ old('password') }}" placeholder="Masukan Nama">
                    @error('nama')
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
