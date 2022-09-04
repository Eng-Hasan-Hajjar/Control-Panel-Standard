@extends('layouts.app')

@section('content')

                <div class="catgorycercelcontainer">
        <ul class='circle-container'>
            <li><a href="ShowCategory"><img src="{{Request::root()}}/website/images/cln.png" alt=""></a></li>
            <li><a href="ShowCategory2"><img src="{{Request::root()}}/website/images/Crpt.png" alt=""></a></li>
            <li><a href="ShowCategory3"><img src="{{Request::root()}}/website/images/dct.png" alt=""></a></li>
            <li><a href="ShowCategory4"><img src="{{Request::root()}}/website/images/tool.png" alt=""></a></li>
            <li><a href="ShowCategory5"><img src="{{Request::root()}}/website/images/wlpnt.png" alt=""></a></li>
            <li><a href="ShowCategory6"><img src="{{Request::root()}}/website/images/Plmb.png" alt=""></a></li>
            <li><a href="ShowCategory7"><img src="{{Request::root()}}/website/images/Elct.png" alt=""></a></li>
            <li><a href="ShowCategory8"><img src="{{Request::root()}}/website/images/weld.png" alt=""></a></li>
            <li><img class="home" src="{{Request::root()}}/website/images/plcRobot.png" alt=""></li>
            <li class="arrli"><img class="arrimg" src="{{Request::root()}}/website/images/arrfin.png" alt=""></li>
        </ul>
        
        <ul class="circle-container-mobile">
            <div class="row-in-line">
                <li><a href="/category/category-1.html"><img src="{{Request::root()}}/website/images/cln.png" alt=""></a></li>
                <li><a href="/category/category-2.html"><img src="{{Request::root()}}/website/images/Crpt.png" alt=""></a></li>
            </div>
            <div class="row-in-line">
                <li><a href="/category/category-3.html"><img src="{{Request::root()}}/website/images/dct.png" alt=""></a></li>
                <li><a href="/category/category-4.html"><img src="{{Request::root()}}/website/images/tool.png" alt=""></a></li>
            </div>
            <div class="row-in-line">
                <li><a href="/category/category-5.html"><img src="{{Request::root()}}/website/images/wlpnt.png" alt=""></a></li>
                <li><a href="/category/category-6.html"><img src="{{Request::root()}}/website/images/Plmb.png" alt=""></a></li>
            </div>
            <div class="row-in-line">
                <li><a href="/category/category-7.html"><img src="{{Request::root()}}/website/images/Elct.png" alt=""></a></li>
                <li><a href="/category/category-8.html"><img src="{{Request::root()}}/website/images/weld.png" alt=""></a></li>
            </div>
        </ul>
    </div>
        <section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Services</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Services</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Services</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
        <section class="ftco-section img" style="background-image: url(website/images/bg_1.jpg); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="browse-job p-5">
                        <span class="icon-search2 icon"></span>
                        <span class="subheading">Searching for a Service?</span>
                        <h2>find one whis us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 pr-lg-5">
                        <div class="row justify-content-center pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                    <span class="subheading">Recently Added Services</span>
                    <h2 class="mb-4">Hot Services</h2>
                  </div>
                </div>
                        <div class="row">
                            <div class="col-md-12 ftco-animate">
                    <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header d-flex align-items-center">
                          <h2 class="mr-3 text-black"><a href="#">doctor</a></h2>
                          <div class="badge-wrap">
                           <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                          </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                          <div class="mr-3"><span class="icon-layers"></span> <a href="#">Alklemh hospital</a></div>
                          <div><span class="icon-my_location"></span> <span>aleppo, syria</span></div>
                        </div>
                      </div>

                      <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                        <div>
                            <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary py-2 apply-service-btn">Apply Service</a>
                      </div>
                    </div>
                  </div><!-- end -->

                            <div class="col-md-12 ftco-animate">
                    <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header d-flex align-items-center">
                          <h2 class="mr-3 text-black"><a href="#">Plumber</a></h2>
                          <div class="badge-wrap">
                           <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                          </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                          <div class="mr-3"><span class="icon-layers"></span> <a href="#">Alkadi</a></div>
                          <div><span class="icon-my_location"></span> <span>aleppo, syria</span></div>
                        </div>
                      </div>

                      <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                        <div>
                            <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary py-2 apply-service-btn">Apply Service</a>
                      </div>
                    </div>
                  </div><!-- end -->

                  <div class="col-md-12 ftco-animate">
                    <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header d-flex align-items-center">
                          <h2 class="mr-3 text-black"><a href="#">Carpenter Furniture</a></h2>
                          <div class="badge-wrap">
                           <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                          </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                          <div class="mr-3"><span class="icon-layers"></span> <a href="#">abo ahmad</a></div>
                          <div><span class="icon-my_location"></span> <span>aleppo, syria</span></div>
                        </div>
                      </div>

                      <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                        <div>
                            <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary py-2 apply-service-btn">Apply Service</a>
                      </div>
                    </div>
                  </div><!-- end -->

                  <div class="col-md-12 ftco-animate">
                    <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header d-flex align-items-center">
                          <h2 class="mr-3 text-black"><a href="#">welding</a></h2>
                          <div class="badge-wrap">
                           <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                          </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                          <div class="mr-3"><span class="icon-layers"></span> <a href="#">Almajd</a></div>
                          <div><span class="icon-my_location"></span> <span>damascus, syria</span></div>
                        </div>
                      </div>

                      <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                        <div>
                            <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                        <a href="" class="btn btn-primary py-2 apply-service-btn">Apply Service</a>
                      </div>
                    </div>
                  </div><!-- end -->

                  <div class="col-md-12 ftco-animate">
                    <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                      <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header d-flex align-items-center">
                          <h2 class="ar-lan mr-3 text-black"><a href="#">دهّان</a></h2>
                          <div class="badge-wrap">
                           <span class="bg-danger text-white badge py-2 px-3">Fulltime</span>
                          </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                          <div class="mr-3"><span class="icon-layers"></span> <a class="ar-lan" href="#">ابو محمد العربي</a></div>
                          <div><span class="icon-my_location"></span> <span class="ar-lan">حمص, سوريا</span></div>
                        </div>
                      </div>

                      <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                        <div>
                            <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary py-2 apply-service-btn">Apply Service</a>
                      </div>
                    </div>
                </div><!-- end -->
                </div>
              </div>
              
                </div>
            </div>
        </section>
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon">
                            <span class="flaticon-employee"></span>
                        </div>
                        <strong class="number" data-number="435000">0</strong>
                        <span>Service</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon">
                            <span class="flaticon-collaboration"></span>
                        </div>
                        <strong class="number" data-number="40000">0</strong>
                        <span>Members</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon">
                            <span class="flaticon-resume"></span>
                        </div>
                        <strong class="number" data-number="30000">0</strong>
                        <span>Resume</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon">
                            <span class="flaticon-promotions"></span>
                        </div>
                        <strong class="number" data-number="10500">0</strong>
                        <span>Company</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="hclient mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 ar-lan">لقد كان التعامل جيدا جدا والموقع مفيد وسهل الاستخدام</p>
                    <p class="name ar-lan">احمد عرابي</p>
                    <span class="position ar-lan">نجّار موبيليا</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-candidates bg-primary">
        <div class="container">
            <div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
            <span class="subheading">Service</span>
            <h2 class="mb-4">Latest Service</h2>
          </div>
        </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-candidates owl-carousel">
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                            <h2>Danica Lewis</h2>
                            <span class="position">Western City, UK</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                            <h2>Nicole Simon</h2>
                            <span class="position">Western City, UK</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                            <h2>Cloe Meyer</h2>
                            <span class="position">Western City, UK</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(images/person_4.jpg);"></div>
                            <h2>Rachel Clinton</h2>
                            <span class="position">Western City, UK</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(images/person_5.jpg);"></div>
                            <h2>Dave Buff</h2>
                            <span class="position">Western City, UK</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(images/person_6.jpg);"></div>
                            <h2>Dave Buff</h2>
                            <span class="position">Western City, UK</span>
                        </a>
                    </div>
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





    <article class="form-article">
        <!-- The Modal -->
        <div id="id01" class="modal">
            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">
                <span onclick="document.getElementById('id01').style.display='none'"
            class="close" title="Close Modal">&times;</span>
            <div class="imgcontainer">
            <img src="/images/person_6.jpg" alt="Avatar" class="avatar">
            </div>
    
            <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
    
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
    
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </div>
    
            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        </div>
    </article>  


                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



<div>
    
       <a href="https://api.whatsapp.com/send?phone=+963 940169559" class="btn btn-primary " style="background-color: #136d39"> chat in whatsapp <span><i class="fab fa-whatsapp" style="font-size: 20px"></i></span> 
       </a>

</div>
                     
                    You are logged in!
                </div>
       






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
  <script src="website/js/jquery.rating.stars.js"></script>
  <script src="website/js/jquery.animateNumber.min.js"></script>
  <script src="website/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="website/js/google-map.js"></script>
  <script src="website/js/main.js"></script>
@endsection
