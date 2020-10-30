<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Only Pain
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="/form/app.css">

    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet">

</head>

<body class=" container home">
    @include('inc.videonavbar')

    <div class="container home">
        <div class="row">
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


        </div>
    </div>video

    @include('inc.footer')
    @include('inc.jsactions')


</body>
