<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laura Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  
  
  <!-- Template BackOffice CSS file -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura - v2.2.1
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
  <style type="text/css">
    a {
      color:{{$color->color}};
    }
    a:hover {
      color: {{$color->color}};
    }
    .back-to-top i {
      background-color: {{$color->color}};
    }
    .back-to-top i {
      color: white;
    }
    .back-to-top i:hover {
      background:{{$color->color_effects}};
      /* background: #ffc550; */
    }
    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
      /* color: #ffc85a; */
      color: {{$color->color_effects}};
    }
    .nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
      color: {{$color->color}};
    }
    .mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
      color: {{$color->color}};
    }
    #to-your-site {
      color: white;
      font-family: "Satisfy",serif;
    }
    #to-your-site:hover {
      color: {{$color->color_effects}};
    }
    #hero .btn-scroll:hover {
      color: {{$color->color}};
    }
    .about .content ul i {
      color: {{$color->color}};
    }
    .about .content .count-box i {
      color: {{$color->color}};
    }
    .about .skills-content .progress-bar {
      background-color: {{$color->color}};
    }
    .resume .resume-item h4 {
      color: {{$color->color}};
    }
    .portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active{
      color: {{$color->color_effects}};
      /* color: #f3a200;  */
    }
    .portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active{
      border-color: {{$color->color}};
    }
    .portfolio-details .portfolio-details-carousel .owl-dot.active {
      background-color: {{$color->color}} !important;
    }
    .portfolio .portfolio-item .portfolio-info .preview-link:hover, .portfolio .portfolio-item .portfolio-info .details-link:hover {
      color: {{$color->color_effects}};
    }
    .contact .info-box i.bx {
      color: {{$color->color}};
    }
    .contact .social-links a:hover {
      border-color: {{$color->color}};
      background: {{$color->color}};
    }
    .contact .php-email-form input::focus, .contact .php-email-form textarea::focus {
      background-color: {{$color->color}};
    }
    .contact .php-email-form button[type="submit"] {
      background: {{$color->color}};
    }
    .contact .php-email-form button[type="submit"]:hover {
      background: {{$color->color_effects}};
      /* background: #ffc85a; */
    }
    #footer .social-links a {
      background: {{$color->color}};
    }
    #footer .social-links a:hover {
      background: {{$color->color_effects}};
      /* background: #f3a200; */
    }
  </style>
  <body style="{{Str::contains(Route::getCurrentRoute()->uri(), 'edit')? 'background-color: #343A40;' : null}}">
    @if (Str::contains((Route::getCurrentRoute()->uri()),'bo') || (Str::contains((Route::getCurrentRoute()->uri()),'edit')))
      @if (Str::contains((Route::getCurrentRoute()->uri()),'bo/') || Route::getCurrentRoute()->uri()== "bo")
        @include('partials.0_bo_header')
      @endif
    @else
      @include('partials.header')
    @endif
      
    @yield('content')
    
    @if (Str::contains((Route::getCurrentRoute()->uri()),'bo') || (Str::contains((Route::getCurrentRoute()->uri()),'edit')))
        {{-- display nothing --}}
    @else
      @include('partials.footer')
    @endif
   
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>