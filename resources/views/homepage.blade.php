@extends('layout.template')

@section('title', 'Homepage')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Music Favorite</h1>
    <div class="row">
        @foreach ($musics as $music)
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $music['judul'] }}</h5>
                                <p class="card-text">{{ $music['makna'] }}</p>
                                <a href="/music/{{ $music['id'] }}" class="btn btn-outline-secondary">Lihat Selanjutnya</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="/images/{{ $music['foto_sampul'] }}" class="img-fluid rounded-end" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $musics->links() }}
        </div>
    </div>
@endsection
