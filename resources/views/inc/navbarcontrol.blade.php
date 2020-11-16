@if (Request::is('shop'))
@include('inc/navbar/shop')
@elseif(Request::is('home'))
@include('inc/navbar.index')
@elseif(Request::is('music'))
@include('inc/navbar.music')
@elseif(Request::is('video'))
@include('inc/navbar.video')
@endif
