@extends('layouts.app')

@section('content')
    {{-- Artikel --}}
    <div class="wrapper">
        <div class="container">
            <h1 class="title">Artikel Saya</h1>
            <div class="inner-wrapper mb-2">
                @foreach ($post as $row)
                    <div class="card mb-2">
                        <div class="inner-card mx-3">
                            <div class="img-wrapper">
                                <img src="https://source.unsplash.com/collection/190727/900x600" alt="">
                            </div>
                            <div class="content">
                                <h1>{{ $row->judul_artikel }}</h1>
                                <p>Kategori : {{ $row->kategori->nama_kategori }}</p>
                                <p>Published at : {{ $row->created_at }}</p>
                                <p style="height: 125px; width:100%;overflow:hidden;text-align: center">
                                    {{ $row->isi_artikel }}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="" class="btn btn-primary"
                                    data-src="https://source.unsplash.com/collection/190727/900x600">tampil</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $post->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <div class="light-box">
        <div class="box-wrapper">
            <div class="box">
                <span class="close-btn">&times</span>
                <img src="" alt="" class="light-img">
            </div>
        </div>
    </div>
@endsection
