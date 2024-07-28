@extends('layouts.contents')

@section('title', 'Edit Post')

@section('header-title', 'Edit Post')

@section('content')
<div class="card border-0 shadow-sm rounded" style="background-color: #333; color: white;">
    <div class="card-body">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="email" style="color: #f8f9fa;">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$post->email) }}" style="background-color: #444; border-color: #555; color: white;">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="password" style="color: #f8f9fa;">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password',$post->password) }}" style="background-color: #444; border-color: #555; color: white;">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="nama" style="color: #f8f9fa;">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama',$post->nama) }}" style="background-color: #444; border-color: #555; color: white;">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="foto" style="color: #f8f9fa;">Foto</label>
                <input type="file" class="form-control-file @error('foto') is-invalid @enderror" id="foto" name="foto" style="color: #f8f9fa;">
                @if($post->foto)
                    <img src="{{ asset('storage/' . $post->foto) }}" class="rounded mt-2" style="width: 150px" alt="Post Image">
                @endif
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-light">Simpan</button>
            <a href="{{route('layouts.home')}}" class="btn btn-outline-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
