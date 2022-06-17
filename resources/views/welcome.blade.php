@extends('layouts.app')

@section('content')
    {{-- Banner --}}
    <div class="container">
        <div class="jumbotron">
            <img src="{{ asset('banner/banner1.png') }}" alt="" class="img-fluid banner">
        </div>
    </div>
    {{-- Artikel --}}
    <div class="wrapper">
        <div class="container">
            <h1 class="title">Artikel Saya</h1>
            <div class="inner-wrapper">
                <div class="card">
                    <div class="inner-card">
                        <div class="img-wrapper">
                            <img src="https://source.unsplash.com/collection/190727/900x600" alt="">
                        </div>
                        <div class="content">
                            <h1>Card Title</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolore!</p>
                        </div>
                        <div class="btn-wrapper">
                            <button class="view-btn"
                                data-src="https://source.unsplash.com/collection/190727/900x600">View</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="inner-card">
                        <div class="img-wrapper">
                            <img src="https://source.unsplash.com/collection/190727/901x601" alt="">
                        </div>
                        <div class="content">
                            <h1>Card Title</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolore!</p>
                        </div>
                        <div class="btn-wrapper">
                            <button class="view-btn"
                                data-src="https://source.unsplash.com/collection/190727/901x601">View</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="inner-card">
                        <div class="img-wrapper">
                            <img src="https://source.unsplash.com/collection/190727/903x603" alt="">
                        </div>
                        <div class="content">
                            <h1>Card Title</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolore!</p>
                        </div>
                        <div class="btn-wrapper">
                            <button class="view-btn"
                                data-src="https://source.unsplash.com/collection/190727/903x603">View</button>
                        </div>
                    </div>
                </div>
            </div>
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
