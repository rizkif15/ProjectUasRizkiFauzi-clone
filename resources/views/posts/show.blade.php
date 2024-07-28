@extends('layouts.contents')

@section('title', 'View Post')

@section('header-title', 'View Post')

@section('content')
    <div class="card border-0 shadow-sm rounded" style="padding: 20px; background: black; color: white;">
        <div class="card-body" >
            @if($post->foto)
                <img src="{{ asset('storage/' . $post->foto) }}" class="img-fluid rounded mb-3" alt="Post Image" style="max-width: 20%;">
            @else
                <p class="text-muted">No Image</p>
            @endif
            <h5 class="card-title">{{ $post->nama }}</h5>
            <p class="card-text">{{ $post->email }}</p>
            <a href="{{route('layouts.home')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection


