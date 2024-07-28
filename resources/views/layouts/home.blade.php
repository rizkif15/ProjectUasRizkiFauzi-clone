@extends('layouts.contents')

@section('title', 'Home') 

@section('content')
<style>
    .pagination svg {
        width: 1em;
        height: 1em;
    }
</style>
    <div class="card border-0 shadow-sm rounded" style="background: black; color: white;">
        <div class="card-body">
            <div class="container" style="padding: 20px;"> <!-- Tambahkan container dengan padding di sini -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title" style="color: #FFFFFF;">Data Posts</h5>
                    <a href="{{ route('posts.add') }}" class="btn btn-outline-light">TAMBAH POST</a>
                    <a href="{{ route('posts.pdf') }}" class="btn btn-outline-light">GENERATE PDF</a>
                </div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr style="background: #444;" class="text-center">
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <td class="text-center">
                                @if($post->foto)
                                <img src="{{ asset('storage/' . $post->foto) }}" class="rounded" style="width: 150px" alt="Post Image">
                                @else
                                <span>No Image</span>
                                @endif
                            </td>
                            <td class="text-center">{{ $post->nama }}</td>
                            <td class="text-center">{{ $post->email }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-light btn-sm">SHOW</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary btn-sm">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Jika tidak ada data -->
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                <div class="alert alert-danger" style="background: #ff4444; color: white;">
                                    Data Post belum Tersedia.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-dark"> <!-- Tambahkan class pagination-dark -->
                        <li class="page-item disabled">
                            <a class="page-link text-white bg-dark border-dark" href="#" tabindex="-1">Previous</a> <!-- Gunakan text-white, bg-dark, dan border-dark -->
                        </li>
                        <li class="page-item"><a class="page-link text-white bg-dark border-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-white bg-dark border-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-white bg-dark border-dark" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link text-white bg-dark border-dark" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
@endsection
