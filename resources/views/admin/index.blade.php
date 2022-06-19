@extends('layouts.appAdmin')

@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <div class="d-flex no-block align-items-center m-t-20">
                    <div class="display-6"><i class="icon-people text-info"></i></div>
                    <div class="ml-auto">
                        <h1>{{ $user }}</h1></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-3 col-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kategori</h5>
                <div class="d-flex no-block align-items-center m-t-20">
                    <div class="display-6"><i class="icon-folder text-purple"></i></div>
                    <div class="ml-auto">
                        <h1>{{ $kategori }}</h1></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-3 col-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Post</h5>
                <div class="d-flex no-block align-items-center m-t-20">
                    <div class="display-6"><i class="icon-folder-alt text-danger"></i></div>
                    <div class="ml-auto">
                        <h1>{{ $post }}</h1></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-3 col-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kategori</h5>
                <div class="d-flex no-block align-items-center m-t-20">
                    <div class="display-6"><i class="ti-wallet text-success"></i></div>
                    <div class="ml-auto">
                        <h1>117</h1></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection
