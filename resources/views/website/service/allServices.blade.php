@extends('layouts.app')


@section('title')


All Services


@endsection


@section('header')

  


@endsection


@section('content')


<div class="ssc container">

@foreach($serviceAll as $row)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-show">
                    <div class="profile-containt">
                        <img src="{{ URL::to('/') }}/images/{{ $row->ser_image }}" alt="" />
                        <div class="name">
                            <h2>{{ $row->ser_name }} <span>arabi</span></h2>
                            <div class="job"> {{ $row->ser_price }} $</div>
                        </div>
                    </div>
                    <div class="job-text">
                        <p>
                        {{ $row->ser_description }}
                        </p>
                    </div>
                    <div class="buttons col-12">
                        <a href="{{url('/ShowDetailService/'.$row->id)}}"><button class="s-s-btn">HIRE</button></a>
                        <a href=""><button class="s-s-btn">SHARE</button></a>
                    </div>
                </div>
            </div>
 @endforeach
 </div>

        <section class="ftco-section-parallax">
            <div class="parallax-img d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div
                            class="col-md-7 text-center heading-section heading-section-white ftco-animate"
                        >
                            <h2 class="white">Subcribe to our Newsletter</h2>
                            <p class="white">
                                Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia, there live the blind texts. Separated they
                                live in
                            </p>
                            <div class="row d-flex justify-content-center mt-4 mb-4">
                                <div class="col-md-12">
                                    <form action="#" class="subscribe-form">
                                        <div class="form-group d-flex">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter email address"
                                            />
                                            <input
                                                type="submit"
                                                value="Subscribe"
                                                class="submit px-3"
                                            />
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
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle
                    class="path-bg"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke="#eeeeee"
                />
                <circle
                    class="path"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke-miterlimit="10"
                    stroke="#F96D00"
                />
            </svg>
        </div>




		
@endsection