@extends('layouts.app')

@section('content')
    {{-- Artikel --}}
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="container">

                    <div class="inner-wrapper mb-2 mt-3">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="title">{{ $post->judul_artikel }}</h1>
                                    <h4 class="text-right">Published At : {{ $post->created_at }}</h4>
                                    <h4 class="text-right">Kategori : {{ $post->kategori->nama_kategori }}</h4>
                                    {!! $post->isi_artikel !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                {{-- Komentar --}}
                <div class="container">
                    <div class="container">

                        <h4>Komentar</h4>
                        <textarea id="mymce" name="isi_artikel" value="{{ old('isi_artikel') }}" class="form-control @error('isi_artikel') is-invalid @enderror"></textarea>
                        <a href="" class="btn btn-primary pull-right mt-2">Kirim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
