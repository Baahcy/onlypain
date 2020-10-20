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
    @include('inc.musicnavbar')

    <div class="container home">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 ">
                <div class="mb-3 pics animation all 2">
                    <img class="img-fluid" src="../images/music3.jpg" alt="Card image cap" width="500" height="400">
                </div>
                  <div class="btn-group">
                    <audio controls>
                        <source src="#" type="audio/ogg">
                        <source src="#" type="audio/mpeg">
                      </audio>
                  </div>
              </div>
            </div>


            <div class="col-md-4">
                <div class="card mb-4 ">
                    <div class="mb-3 pics animation all 2">
                        <img class="img-fluid" src="../images/music.jpg" alt="Card image cap" width="600" height="600">
                      </div>
                      <div class="btn-group">
                        <audio controls>
                            <source src="#" type="audio/ogg">
                            <source src="" type="audio/mpeg">
                          </audio>
                      </div>
                  </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 ">
                    <div class="mb-3 pics animation all 2">
                        <img class="img-fluid" src="../images/music3.jpg" alt="Card image cap" width="600" height="600">
                      </div>
                      <div class="btn-group">
                        <audio controls>
                            <source src="#" type="audio/ogg">
                            <source src="#" type="audio/mpeg">
                          </audio>
                      </div>
                  </div>
            </div>

          </div>
        </div>
      </div>


    @include('inc.footer')
    @include('inc.jsactions')


</body>
