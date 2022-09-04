@extends('layouts.app')


@section('title')


Detail of company


@endsection

@section('header')
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

   <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="ftco-animate">

            <h2 class="mb-3 ar-lan">  the title of company </h2>
            <p class="ar-lan">     descrition of company   </p>
             <p class="ar-lan">Name - {{ $companyInfo->cmp_name }} </p>
             <p class="ar-lan">City - {{ $companyInfo->cmp_city }}</p>
             <p class="ar-lan">Phone - {{ $companyInfo->cmp_phone }}</p>
             <p class="ar-lan">Email - {{ $companyInfo->cmp_email }}</p>
             <p>
                <img src="{{ URL::to('/') }}/images/{{ $companyInfo->cmp_image }}"
                alt="" class="img-fluid" />
             </p>
            <button class="btn btn-lg bg-PSC">GET THIS JOB</button>
          </div>
        </div>
    </div>

  </section> <!-- .section -->



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

