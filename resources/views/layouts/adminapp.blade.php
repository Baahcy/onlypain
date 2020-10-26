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
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    @if (Request::is('admin-subscriber'))
        @include('admin/navbar.subscriber')
    @elseif(Request::is('admin-shop'))
        @include('admin/navbar.shop')
    @elseif(Request::is('admin-music'))
        @include('admin/navbar.music')
    @elseif(Request::is('admin-newsletter'))
        @include('admin/navbar.newsletter')
    @elseif(Request::is('admin-dashboard'))
        @include('admin/navbar.dashboard')
    @elseif(Request::is('admin-shop/create'))
        @include('admin/navbar.shop')
    {{-- @elseif(Request::is('admin-shop/{{ $shop->id }}/edit'))
        @include('admin/navbar.shop') --}}
    @endif
    {{-- @include('admin/navbar.subscriber') --}}

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
