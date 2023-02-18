@php
  $sliders=DB::table('sliders')->get();
  $abouts=DB::table('abouts')->get();
  $services=DB::table('services')->get();
  $teams=DB::table('teams')->get();
  $testimonials=DB::table('testimonials')->get();
  $availabilities=DB::table('availabilities')->get();
  $contacts=DB::table('contacts')->get();
@endphp

<!DOCTYPE html>
<head>
  <title>AVCO</title>
  <link rel="stylesheet" type="text/css" href="{{asset('front/style.css')}}">
  <script src="{{asset('front/js/jquery.js')}}"></script>
  <script src="{{asset('front/js/jquery-ui.js')}}"></script>
  <script src="{{asset('front/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('front/js/boostrap/bootstrap.js')}}"></script>
  <link rel="stylesheet" href="{{asset('front/css/boostrap/bootstrap.min.css')}}">
  <script src="{{asset('front/js/boostrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/js/smooth-scroll.js')}}"></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('front/css/font-awesome.css')}}">



  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js>"


</head>
<body>

    <!--Navigation Bar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{asset('front/images/logo7.jpg')}}"><span class="title-color">&nbsp;&nbsp; AVCO Limited Company</span>.</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#ourbranches">Branches</a>
                </li> -->

                  <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our Team</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#availability">Availability</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacts</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
    </section>






 
   <!--Slider-->
    <div class="slider" >

      <div id="headSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#headSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#headSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#headSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

      
        <div class="carousel-inner" role="listbox">

           

          <div class="box11" style="margin-top: 200px;color: white" >

             
            <h1 style="text-align: center; font-size: 30px"> Welcome To Our Logistic Services</h1>
              <h1 style="text-align: center; font-size: 25px">Active</h1>
              <marquee><h1 style="text-align: center; font-size: 20px; color: white">Karibu tena..!</h1></marquee>


        
            </div>
          
           @foreach($sliders as $key=>$slider)



          <div class="carousel-item {{$key ==0 ? 'active': ''}}">
            <img src="{{URL::asset('storage/'.$slider->image)}}" class="d-block img-fluid" alt="...">

            <div class="carousel-caption">
              <br><br><br><br><br><br>
              <h5>{{$slider->title}}</h5>
            </div>
          </div>

          @endforeach




        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#headSlider"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#headSlider"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>




    <!--ABOUT US SECTION-->
    <div id="about">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                <h2>About Us</h2>

                @foreach($abouts as $about)
                <div class="about-content">
                  <p>{{$about->aboutus}}</p>

                </div>
                @endforeach
                <button type="button" class="btn btn-primary">Read More</button>
              </div>
              <div class="col-md-6 skills-bar">
                <p>Monthly Promotions</p>
                <div class="progress">
                  <div class="progress-bar" style="width: 80%;">80%</div>

                  </div>
                  <p>Monthly Offers</p>
                  <div class="progress">
                    <div class="progress-bar" style="width: 75%;">75%</div>

                    </div>
                    <p>Discounts</p>
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%;">70%</div>

                      </div>
                </div>
              </div>
          </div>
      </div>
    </div>


<!--Our Branches-->
<!-- <div id="ourbranches">
    <caption><h1>Our Branches</h1></caption>

    <div class="branches">
    <ul id="listing">
      <li> Orange Towers, Nairobi KE</li>
      <li> Hill Services Mall, Moshi TZ</li>
      <li> Highrise, Kigali RW</li>
      <li> Redsson, Kampala UG</li>
      <li> Ocean Mall,Bujumbura BI</li>
      <li> Apple Shop, Juba SS</li>
    </ul>
    </div>

  </div> -->





    <!--Download the App-->
    <section id="promo">
      <div class="container">
          <p>Download Our Business Mobile App for Free</p>
          <a href="http://play.google.com/store/apps/" class="btn btn-primary">Click to Download</a>
      </div>
  </section>

    <!--Services-->
    <section id="services">
      <div class="container">
        <h1>Our Services</h1>
        <div class="row services">

          @foreach($services as $service)
            <div class="col-md-3 text-center">
              <div class="icon">
                  <i class="fa fa-desktop"></i>
                </div>
                  <h3>{{$service->title}}</h3>
                  <p>{{$service->details}}</p>

            </div>

            @endforeach


            <!-- <div class="col-md-3 text-center">
              <div class="icon">
                  <i class="fa fa-tablet"></i>
                </div>
                  <h3>App Development</h3>
                  <p>Being a technology focused company, we leverage technology in every aspect of our security solutions in order to provide our customers with state of the art security solutions.</p>

            </div>

            <div class="col-md-3 text-center">
              <div class="icon">
                  <i class="fa fa-line-chart"></i>
                </div>
                  <h3>Digital Marketing</h3>
                  <p>Being a technology focused company, we leverage technology in every aspect of our security solutions in order to provide our customers with state of the art security solutions.</p>

            </div>


            <div class="col-md-3 text-center">
              <div class="icon">
                  <i class="fa fa-paint-brush"></i>
                </div>
                  <h3>Graphic Designing</h3>
                  <p>Being a technology focused company, we leverage technology in every aspect of our security solutions in order to provide our customers with state of the art security solutions.</p>

            </div> -->
        </div>
      </div>
    </section>




    <!--Our Team-->
    <section id="team">
      <div class="container">
          <h1>Our Team</h1>
          <div class="row">

            @foreach($teams as $team)

              <div class="col-md-3 profile-pic text-center">
                  <div class="img-box">
                      <img src="{{URL::asset('storage/'.$team->image)}}" class="d-block img-fluid" alt="..." style="width:200px; height:200px">
                      <!-- <img src="{{URL::asset('storage/'.$slider->image)}}" class="d-block img-fluid" alt="..."> -->
                      <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                      </ul>
                  </div>

                  <h2>{{$team->name}}</h2>
                      <h3>{{$team->title}}</h3>
                      <p>{{$team->description}}</p>
              </div>

              @endforeach


              <!-- <div class="col-md-3 profile-pic text-center">
                <div class="img-box">
                    <img src="{{asset('front/images/japs.png')}}"  class="img-responsive">
                    <ul>
                      <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                      <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                      <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>

                <h2>Japheth M</h2>
                    <h3>Business Head</h3>
                    <p>Client focused and Well visioned to deliver quality products</p>
            </div>


            <div class="col-md-3 profile-pic text-center">
              <div class="img-box">
                  <img src="{{asset('front/images/jac.jpg')}}" class="img-responsive">
                  <ul>
                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                    <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                  </ul>
              </div>

              <h2>Petra J</h2>
                  <h3>UI Designer</h3>
                  <p>Heuristics expert with keen eye for detail</p>
          </div>


          <div class="col-md-3 profile-pic text-center">
            <div class="img-box">
                <img src="{{asset('front/images/logo9.jpg')}}" class="img-responsive">
                <ul>
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
            </div>

            <h2>James Son</h2>
                <h3>Digital Marketing</h3>
                <p>Product innovation has always been a competitive differentiator for us.</p>
        </div> -->


          </div>
      </div>
    </section>





    <!--Testimonials-->
    <section id="testimonials">
        <div class="container">
          <h1>Testimonials</h1>
          <p class="text-center">Comments</p>

          <div class="row">

            @foreach($testimonials as $testimonial)

              <div class="col-md-4 text-center">
                  <div class="profile">
                      <img src="{{asset('front/images/logo22.jpg')}}" class="user">
                      
                      <blockquote>{{$testimonial->comments}}</blockquote>
                      <h3><span>{{$testimonial->customer}}</span></h3>
                  </div>
              </div>

            @endforeach


              <!-- <div class="col-md-4 text-center">
                <div class="profile">
                    <img src="{{asset('front/images/logo22.jpg')}}" class="user">
                    <blockquote>Thanks to Business Mobile App, I have been able to gain real-time visibility on how to access goods and services faster than before.</blockquote>
                    <h3>Wanjiku K - <span>Customer</span></h3>
                </div>
            </div>



            <div class="col-md-4 text-center">
              <div class="profile">
                  <img src="{{asset('front/images/logo16.jpg')}}" class="user">
                  <blockquote>I have used the app, It's quite efficient</blockquote>
                  <h3>Zipporah Mutua - <span>Manager at Ushindi Supermarket</span></h3>
              </div>
          </div> -->
          </div>
        </div>
    </section>


    <!--Weekly Performance Table-->
    <div id="availability">
    <caption><h1>Our Availability</h1></caption>
    <table class="allocation">

      <thead>
      <tr>
              <th>Day</th>
        <th>Time</th>
      </tr>
    </thead>

      @foreach($availabilities as $available)
      <tr>
        <td>Monday - Friday</td>
        <td>{{$available->monfri}}</td>
      </tr>

      <tr>
        <td>Saturday</td>
        <td>{{$available->saturday}}</td>
      </tr>

      <tr>
        <td>Sunday</td>
        <td>{{$available->sunday}}</td>
      </tr>

      @endforeach

    </table>
    </div>







    <!--Our Branches-->

<!--
<caption><h1>Our Branches</h1></caption>

<div class="branches">
<ul>
  <li> Orange Towers, Nairobi KE</li>
  <li> Hill Services Mall, Moshi TZ</li>
  <li> Highrise, Kigali RW</li>
  <li> Redsson, Kampala UG</li>
  <li> Ocean Mall,Bujumbura BI</li>
  <li> Apple Shop, Juba SS</li>
</ul>
</div>

-->












    <!--Get in Touch-->
    <section id="contact">
      <div class="container">
          <h1>Get in Touch</h1>
          <div class="row">
              <div class="col-md-6">
                  <form class="contact-form" id="contactForm">


                    <div class="alert">Your Message sent successfully</div>

                      <div class="form-group">
                          <input type="text" class="form-control" id="nameid" placeholder="Your name">
                      </div>

                      <div class="form-group">
                        <input type="number" class="form-control" id="pnumberid" placeholder="Phone no.">
                      </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="emailid" placeholder="Email id">
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" id="msgContent" placeholder="Your Message" rows="4"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                  </form>
              </div>

                       <div class="col-md-6 contact-info">

                       @foreach($contacts as $contact)
                       <div class="follow"><b>Address:  </b><i class="fa fa-map-marker"></i>{{$contact->address}}</div>



                        <div class="follow"><b><i class="fa fa-phone"></i>Phone:   </b>{{$contact->phone}}</div>



                        <div class="follow"><b><i class="fa fa-envelope-o"></i>Email:  </b>{{$contact->email}}</div>

                        @endforeach

                        <div class="follow"><label><b>Get Social: </b></label>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
            </div>
          </div>
      </div>
    </section>


<script>https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.7/firebase-remote-config.min.js</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/0.6.7/firebase-remote-config."></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1.0/firebase"></script>
<script src="{{asset('front/js/firebase.js')}}"></script>







    <!--Footer-->
    <section id="footer">
      <div class="container text-center">

      <div class="marq">
       <marquee><p>Developed by Japheth M and Petra J B | &copy;2022 <i class="fa fa-apple"></i></p></marquee>
      </div>

      </div>
    </section>

    <!--Footer End-->
    <script src="path/to/smooth-scroll.polyfills.min.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>








</body>
</html>













<!-- <br>
                <div class="marq">
                <marquee style: scrolldelay="100">Welcome again...! &#129336; &#x1F938; &#129336; &#x1F938; </marquee>
                </div>

              -->
