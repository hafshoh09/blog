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
                        <input type="text" name="judul_artikel" value="{{ old('judul_artikel') }}" class="form-control @error('judul_artikel') is-invalid @enderror">
                        @error('judul_artikel')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                            @foreach ($kategori as $row )
                            <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea id="mymce" name="isi_artikel" value="{{ old('isi_artikel') }}" class="form-control @error('isi_artikel') is-invalid @enderror"></textarea>
                        @error('isi_artikel')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" readonly  value="Artikel-{{ rand(1, 10000) }}" class="form-control @error('slug') is-invalid @enderror">
                        @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
