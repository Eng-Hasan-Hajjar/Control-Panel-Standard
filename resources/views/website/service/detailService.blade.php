@extends('layouts.app')


@section('title')


Service


@endsection


@section('header')

<link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        />


@endsection


@section('content')




<div class="serves-form-container">
         

            <div class="description row">
                <div class="col-sm-6 col-img">
                    <div class="description-img"></div>
                </div>
                <div class="col-sm-6">
                    <div class="description-text">
                        <h1>YOU need this</h1>
                        <h5>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, iusto!
                            Quia exercitationem ut odio unde ab quis odit voluptas dicta.
                        </h5>
                        <button class="btn"><a href="#body-form">GET IT NOW</a></button>
                    </div>
                </div>
            </div>

            <div class="body-form" id="body-form">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="content">
                        <h3 style="text-align: center;">GET THIS SERVICE</h3>
                        <div class="form-group">
                            <label>Date</label>
                            <div class="input-group date" id="datepicker">
                                <input class="form-control" placeholder="MM/DD/YYYY" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <div class="input-group time" id="timepicker">
                                <input class="form-control" placeholder="HH:MM AM/PM" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text">
                                        <i class="fa fa-clock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group email" id="email">
                                <input class="form-control" placeholder="example@example.com" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>number</label>
                            <div class="input-group number" id="number">
                                <input class="form-control" placeholder="+963 940 404 404" />
                                <span class="input-group-append input-group-addon">
                                    <span class="input-group-text">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <div class="input-group" id="text">
                                <textarea name="description" class="description"></textarea>
                            </div>
                        </div>
                        <button class="btn"><a href="#"> Book this service </a></button>
                    </div>
                </div>
            </div>
        </div>

@endsection