<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Website --}}
    <link rel="stylesheet" href="css/app.css">
    {{-- Website --}}

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">

  </head>
  <body>


    <div class="wrap" id="app">

      <header role="banner">
        @include('frontend.inc.topbar')

        @include('frontend.inc.logo')

        @include('frontend.inc.navbar')
      </header>
      <!-- END header -->

      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              @include('frontend.inc.home-slider')

            </div>
          </div>

        </div>


      </section>
      <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">

                <Posts></Posts>


              </div>

              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                    <ul class="pagination">
                      <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                    </ul>
                  </nav>
                </div>
              </div>






            </div>

            <!-- END main-content -->

            @include('frontend.inc.sidebar')
            <!-- END sidebar -->

          </div>
        </div>
      </section>

      @include('frontend.inc.footer')
      <!-- END footer -->

    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    {{-- Website --}}
    <script src="js/app.js"></script>
    {{-- Website --}}

    <script src="{{asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>


    <script src="{{asset('assets/frontend/js/main.js')}}"></script>


  </body>
</html>
