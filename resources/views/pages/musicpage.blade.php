@include('inc.header')

<body class=" container home">
    @include('inc.musicnavbar')

    <div class="container home">
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
                        <h5>{{$music->music}}</h5>
                        <p class="card-text">{{$music->artist}}</p>
                    </div>

                </div>
            </div>
            @endforeach
            @else
            <p style="text-align: center">No music uploaded yet!</p>
            @endif


        </div>
    </div>


    @include('inc.footer')
    @include('inc.jsactions')


</body>
