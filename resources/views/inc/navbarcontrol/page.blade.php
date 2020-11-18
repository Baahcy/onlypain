@if (Request::is('shop'))
@include('inc/navbar/page/shop')
@elseif(Request::is('home'))
@include('inc/navbar/page/index')
@elseif(Request::is('music'))
@include('inc/navbar/page/music')
@elseif(Request::is('video'))
@include('inc/navbar/page/video')
@endif
