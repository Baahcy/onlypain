@include('inc.header')

<body class=" container home">
    @include('inc.navbar')

      <div class="container py-5">
        <div class="jumbotron text-white jumbotron-image " style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80);">
        {{-- <div class="jumbotron text-white jumbotron-image jumbotron-fluid" > --}}
         </div>

         <h1 class="text-center">This is the homepage</h1>
      </div>

    @include('inc.footer')
    @include('inc.jsactions')

</body>
