@extends('layouts.appAdmin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Post</h4>
                <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="">Judul Artikel</label>
                        <input type="text" name="judul_artikel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea id="mymce" name="isi_artikel"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" readonly value="Artikel-{{ rand(1, 10000) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
