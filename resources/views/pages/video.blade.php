@extends('layouts.pageapp')

@section('content')
<div class="container">
    <br>
    <div class="row">
        @if(count($videos) > 0)
        @foreach ($videos as $video)
        <div class="col-lg-4 col-md-6 mb-4 ">
            <div class="card ">
                <a href="#"><img class="card-img-top" src="/storage/music/{{$video->image}}" alt=""></a>
                <div class="card-body">
                    <video width="280" height="240" controls>
                        <source src="../storage/video/{{$video->video}}" type="video/ogg">
                        <source src="../storage/video/{{$video->video}}" type="video/mpeg">
                    </video>
                    <h4 class="card-title">
                        <a href="#">{{$video->title}}</a>
                    </h4>

                </div>

            </div>
        </div>
        @endforeach
        @else
        <div class="container">
            <p style="text-align: center">No video has been uploaded yet!</p>
        </div>
        @endif


    </div>

</div>

@endsection
