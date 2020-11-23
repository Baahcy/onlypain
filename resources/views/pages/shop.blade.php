@extends('layouts.pageapp')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            @if(count($shops) > 0)
            @foreach ($shops as $shop)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="/storage/shop/{{$shop->image}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$shop->title}}</a>
                        </h4>
                        <h5 style="color: black"><b>${{$shop->price}}</b> </h5>
                        <p style="color: black" class="card-text">{{$shop->description}}</p>
                    </div>

                    <div class="card-footer">
                    {{-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> --}}
                    <a href="#"> <button class="btn btn-primary float-right">purchase</button> </a>
                </div>


                </div>
            </div>
            @endforeach
            @else
            <p style="text-align: center">No item is for sale!</p>
            @endif


        </div>

    </div>

@endsection
