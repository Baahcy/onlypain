@extends('layouts.pageapp')

@section('content')
<div class="container">
    <br>
    <div class="row">
        @if(count($musics) > 0)
        @foreach ($musics as $music)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card ">
                <a href="#"><img class="card-img-top" src="/storage/music/{{$music->image}}" alt=""></a>
                <div class="card-body">
                    <audio controls>
                        <source src="../storage/mp3/{{$music->music}}" type="audio/ogg">
                        <source src="../mp3/{{$music->music}}" type="audio/mpeg">
                    </audio>
                    <h4 class="card-title">
                        <a href="#">{{$music->title}}</a>
                    </h4>
                    <h5 style="color: black">{{$music->music}}</h5>
                    <p class="card-text" style="color: black">{{$music->artist}}</p>
                </div>

            </div>
        </div>
        @endforeach
        @else
        <div class="container">
            <p style="text-align: center">No music uploaded yet!</p>
        </div>
        @endif


    </div>

</div>

@endsection
