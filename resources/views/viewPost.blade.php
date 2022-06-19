@extends('layouts.app')

@section('content')
    {{-- Artikel --}}
    <div class="wrapper">
        <div class="container">
            <div class="container">

                <h1 class="title">{{ $post->judul_artikel }}</h1>
                <h4 class="text-right">Published At : {{ $post->created_at }}</h4>
                <h4 class="text-right">Kategori : {{ $post->kategori->nama_kategori }}</h4>
            </div>
            <div class="inner-wrapper mb-2 mt-3">
                <div class="container">
                    <div class="card">
                        <div class="card-body">

                            {!! $post->isi_artikel !!}
                        </div>
                    </div>
                </div>
            </div>
            {{-- Komentar --}}
            <div class="container">
                <div class="container">

                    <h4>Komentar</h4>
                    <textarea id="mymce" name="isi_artikel" value="{{ old('isi_artikel') }}" class="form-control @error('isi_artikel') is-invalid @enderror"></textarea>
                </div>
            </div>
        </div>
    </div>

@endsection
