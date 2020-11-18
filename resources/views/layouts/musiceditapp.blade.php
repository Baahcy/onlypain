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
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
  <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />

</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="#" class="simple-text logo-normal">
                    Only pain Dashboard
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item   ">
                        <a class="nav-link" href="/admin-dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/admin-subscriber">
                            <i class="material-icons">person</i>
                            <p>Subscribers</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/admin-shop">
                            <i class="material-icons">content_paste</i>
                            <p>Shop</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin-music">
                            <i class="material-icons">library_books</i>
                            <p>Music</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item ">
                        <a class="nav-link" href="/admin-newsletter">
                            <i class="material-icons">library_books</i>
                            <p>Newsletter</p>
                        </a>
                    </li> --}}
                    <li class="nav-item ">
                        <a class="nav-link" href="/admin-video">
                            <i class="material-icons">shop</i>
                            <p>Video</p>
                        </a>
                    </li>





                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Music</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->






    <div class="content">
        @include('inc.message')
        <div>
            @yield('content')
        </div>

    </div>

    @include('inc.footer')
    </div>
    </div>
    @include('inc.jsactions')
</body>

</html>
