@extends('layouts.appAdmin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Judul Artikel</th>
                    <th>Published At</th>
                    <th>View Artikel</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($post as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->kategori->nama_kategori }}</td>
                        <td>{{ $row->judul_artikel }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td><a href="{{ url('viewPost') }}/{{ $row->slug }}" class="btn btn-primary">View Post</a></td>
                        <td>
                            <form action="{{route('post.destroy',$row->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route("post.show", $row->id) }}" class="btn btn-success">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
