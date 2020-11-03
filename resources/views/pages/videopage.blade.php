@include('inc.header')

<body class=" container home">
    @include('inc.videonavbar')

    <div class="container home">
        <div class="row">
            @if(count($videos) > 0)
            @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6 mb-4 ">
                <div class="card ">
                    <a href="#"><img class="card-img-top" src="/storage/music/{{$video->image}}" alt=""></a>
                    <div class="card-body">
                        <video width="320" height="240" controls>
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
            <p style="text-align: center">No video has been uploaded yet!</p>
            @endif


        </div>
    </div>

    @include('inc.footer')
    @include('inc.jsactions')


</body>
