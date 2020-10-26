@extends('layouts.adminapp')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div>
                        <a href="admin-shop/create" class="btn btn-secondary float-right">Create a Shop
                            Item</a>
                    </div>
                    <h4 class="card-title ">Shop Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID </th>
                                <th> Title </th>
                                <th> Price </th>
                                <th> Description </th>
                                <th>Image</th>
                                <th>edit</th>
                                <th>remove</th>
                            </thead>
                            <tbody>
                                @foreach ($shops as $shop)
                                <tr>
                                    <td>{{ $shop->id }}</td>
                                    <td>{{ $shop->title }}</td>
                                    <td>{{ $shop->price }}</td>
                                    <td>{{ $shop->description }}</td>
                                    <td><img class="card-img" src="/storage/shop/{{$shop->image}}" alt=""
                                            style="width:50px;height:60px;"></td>
                                    <td>
                                        <button type="button" rel="tooltip" title="Edit Shop Item"
                                            class="btn btn-primary btn-link btn-sm">
                                            <a href="/admin-shop/{{$shop->id}}/edit"><i
                                                    class="material-icons">edit</i></a>
                                        </button>

                                    </td>

                                    <td>
                                        <form action="{{ route('admin-shop.destroy', $shop->id)}}" method="post">
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