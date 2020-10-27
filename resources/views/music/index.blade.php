@extends('layouts.adminapp')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div>
                        <a href="admin-music/create" class="btn btn-secondary float-right">Add Music</a>
                    </div>
                    <h4 class="card-title ">Music Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID </th>
                                <th> Title </th>
                                <th> Music </th>
                                <th> Artist </th>
                                <th>Image</th>
                                <th>edit</th>
                                <th>remove</th>
                            </thead>
                            <tbody>
                                @foreach ($musics as $music)
                                <tr>
                                    <td>{{ $music->id }}</td>
                                    <td>{{ $music->title }}</td>
                                    <td>{{ $music->music }}</td>
                                    <td>{{ $music->artist }}</td>
                                    <td><img class="card-img" src="/storage/music/{{$music->image}}" alt=""
                                            style="width:50px;height:60px;"></td>
                                    <td>
                                        <button type="button" rel="tooltip" title="Edit music Item"
                                            class="btn btn-primary btn-link btn-sm">
                                            <a href="/admin-music/{{$music->id}}/edit"><i
                                                    class="material-icons">edit</i></a>
                                        </button>

                                    </td>

                                    <td>
                                        <form action="{{ route('admin-music.destroy', $music->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-link btn-sm" type="submit"><i
                                                    class="material-icons">close</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
