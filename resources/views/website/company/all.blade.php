@extends('layouts.app')


@section('title')


All Companies


@endsection

@section('header')
<title>professional life style</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="website/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="website/css/animate.css">
    
    <link rel="stylesheet" href="website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="website/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="website/css/magnific-popup.css">

    <link rel="stylesheet" href="website/css/aos.css">

    <link rel="stylesheet" href="website/css/ionicons.min.css">

    <link rel="stylesheet" href="website/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="website/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="website/css/flaticon.css">
    <link rel="stylesheet" href="website/css/icomoon.css">
    <link rel="stylesheet" href="website/css/style.css">




@endsection

@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('website/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          <h1 class="mb-3 bread">companies</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
         @foreach($companyAll as $row)
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{url('ShowDetailCompany/'.$row->id)}}" class="block-20" style="background-image: url('/images/{{ $row->cmp_image }}');"> </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">May 3, 2019</a></div>
                  <div><a href="#">{{ $row->cmp_name }}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading">  {{ $row->cmp_phone }}</h3>
                <h3 class="heading">  {{ $row->cmp_city }}</h3>
                <h3 class="heading">  {{ $row->cmp_email }}</h3>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
   @endforeach
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
       
    </section>
    
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2 class="white">Subcribe to our Newsletter</h2>
              <p class="white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="website/js/jquery.min.js"></script>
  <script src="website/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="website/js/popper.min.js"></script>
  <script src="website/js/bootstrap.min.js"></script>
  <script src="website/js/jquery.easing.1.3.js"></script>
  <script src="website/js/jquery.waypoints.min.js"></script>
  <script src="website/js/jquery.stellar.min.js"></script>
  <script src="website/js/owl.carousel.min.js"></script>
  <script src="website/js/jquery.magnific-popup.min.js"></script>
  <script src="website/js/aos.js"></script>
  <script src="website/js/jquery.animateNumber.min.js"></script>
  <script src="website/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="website/js/google-map.js"></script>
  <script src="website/js/main.js"></script>

  
 


@endsection



