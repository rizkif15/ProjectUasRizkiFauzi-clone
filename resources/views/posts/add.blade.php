@extends('layouts.contents')

@section('title', 'Tambah Post')

@section('header-title', 'Tambah Post')

@section('content')
<div class="card border-0 shadow-sm rounded" style="background-color: #333; color: white;">
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="email" style="color: #f8f9fa;">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" style="background-color: #444; border-color: #555; color: white;">
                @error('email')
                <div class="alert alert-danger mt-2" style="background-color: #ff4444; color: white;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="passsword" style="color: #f8f9fa;">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password" style="background-color: #444; border-color: #555; color: white;">
                @error('password')
                    <div class="alert alert-danger mt-2" style="background-color: #ff4444; color: white;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="nama" style="color: #f8f9fa;">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama" style="background-color: #444; border-color: #555; color: white;">
                @error('nama')
                    <div class="alert alert-danger mt-2" style="background-color: #ff4444; color: white;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="foto" style="color: #f8f9fa;">Gambar</label>
                <input type="file" class="form-control-file @error('foto') is-invalid @enderror" id="foto" name="foto" style="color: #f8f9fa;">
                @error('foto')
                    <div class="alert alert-danger mt-2" style="background-color: #ff4444; color: white;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-light">Simpan</button>
            <a href="{{ route('layouts.home') }}" class="btn btn-outline-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
