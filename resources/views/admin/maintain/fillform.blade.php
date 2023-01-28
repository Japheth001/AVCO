
<!DOCTYPE html>
<head>
    <title>Woza 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"  href="{{asset('awoza/style.css')}}">
    <script src="{{asset('awoza/js/jquery.js')}}"'></script>
    <script src="{{asset('awoza/js/jquery-ui.js')}}"></script>
    <script src="{{asset('awoza/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('awoza/js/boostrap/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('awoza/css/boostrap/bootstrap.min.css')}}">
    <script src="{{asset('awoza/js/boostrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('awoza/js/smooth-scroll.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.css">



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
              <a class="navbar-brand" href="#"><img src="{{asset('./images/logo7.jpg')}}"><span class="title-color">Woza</span> App</a>
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

                  <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacts</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>


    <!--Slider-->
    <div class="slider">
      <div id="headSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#headSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#headSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#headSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/shoping2.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption">
                <h5>We value our customers</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/shoping3.jpg" class="d-block img-fluid" alt="...">

            <div class="carousel-caption">
              <h5>Locate Goods and services faster</h5>
          </div>
          </div>
          <div class="carousel-item">
            <img src="./images/shoping4.jpg" class="d-block img-fluid" alt="...">
            <div class="carousel-caption">
              <h5>You are our priority</h5>
          </div>
          </div>
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
    </div>\


    <!--ABOUT US SECTION-->
    <div id="about">
      <div class="container"> 
          <div class="row">
              <div class="col-md-6">
                <h2>About Us</h2>
                <div class="about-content">
                  <p>Being a technology focused company, we leverage technology in every aspect of our marketing solutions in order to provide our customers with goods and services.</p>
                </div>
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


    <!--Download the App-->
    <section id="promo">
      <div class="container">
          <p>Download Woza Mobile App for Free</p>
          <a href="http://play.google.com/store/apps/" class="btn btn-primary">Click to Download</a>
      </div>
  </section>

    <!--Services-->
    <section id="services">
      <div class="container">
        <h1>Our Services</h1>
        <div class="row services">
            <div class="col-md-3 text-center">
              <div class="icon">
                  <i class="fa fa-desktop"></i>
                </div>
                  <h3>Web Development</h3>
                  <p>Being a technology focused company, we leverage technology in every aspect of our security solutions in order to provide our customers with state of the art security solutions.</p>
              
            </div>


            <div class="col-md-3 text-center">
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
              
            </div>
        </div>
      </div>
    </section>




    <!--Our Team-->
    <section id="team">
      <div class="container">
          <h1>Our Team</h1>
          <div class="row">
              <div class="col-md-3 profile-pic text-center">
                  <div class="img-box">
                      <img src="images/me2.jpg" class="img-responsive">
                      <ul>
                        <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                        <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                        <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                      </ul>
                  </div>

                  <h2>Japheth M</h2>
                      <h3>Founder / CEO</h3>
                      <p>Well visioned and focused to serve clients with highest level of professionalism</p>
              </div>


              <div class="col-md-3 profile-pic text-center">
                <div class="img-box">
                    <img src="images/logo9.jpg" class="img-responsive">
                    <ul>
                      <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                      <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                      <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>

                <h2>Patrick Mutua</h2>
                    <h3>Business Head</h3>
                    <p>Well visioned and focused to serve clients with highest level of professionalism</p>
            </div>


            <div class="col-md-3 profile-pic text-center">
              <div class="img-box">
                  <img src="images/logo9.jpg" class="img-responsive">
                  <ul>
                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                    <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                  </ul>
              </div>

              <h2>Mary N.</h2>
                  <h3>UI Designer</h3>
                  <p>Well visioned and focused to serve clients with highest level of professionalism</p>
          </div>


          <div class="col-md-3 profile-pic text-center">
            <div class="img-box">
                <img src="images/logo9.jpg" class="img-responsive">
                <ul>
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
            </div>

            <h2>James Son</h2>
                <h3>Digital Marketing</h3>
                <p>Product innovation has always been a competitive differentiator for us.</p>
        </div>


          </div>
      </div>
    </section>


    


    <!--Testimonials-->
    <section id="testimonials">
        <div class="container">
          <h1>Testimonials</h1>
          <p class="text-center">Comments</p>

          <div class="row">
              <div class="col-md-4 text-center">
                  <div class="profile">
                      <img src="images/me2.jpg" class="user">
                      <blockquote>I have used the app, It's quite efficient</blockquote>
                      <h3>Japheth M <span>Co-Founder at XYZ Company</span></h3>
                  </div>
              </div>



              <div class="col-md-4 text-center">
                <div class="profile">
                    <img src="images/logo22.jpg" class="user">
                    <blockquote>Thanks to Woza Mobile App, I have been able to gain real-time visibility on how to access goods and services faster than before.</blockquote>
                    <h3>Wanjiku K - <span>Customer</span></h3>
                </div>
            </div>



            <div class="col-md-4 text-center">
              <div class="profile">
                  <img src="images/logo16.jpg" class="user">
                  <blockquote>I have used the app, It's quite efficient</blockquote>
                  <h3>Zipporah Mutua - <span>Manager at Ushindi Supermarket</span></h3>
              </div>
          </div>
          </div>
        </div>
    </section>


    <!--Get in Touch-->
    <section id="contact">
      <div class="container">
          <h1>Get in Touch</h1>
          <div class="row">
              <div class="col-md-6">
                  <form class="contact-form">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your name">
                      </div>

                      <div class="form-group">
                        <input type="number" class="form-control" placeholder="Phone no.">
                      </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email id">
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" placeholder="Your Message" rows="4"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                  </form>
              </div>

                       <div class="col-md-6 contact-info">
                       <div class="follow"><b>Address:  </b><i class="fa fa-map-marker"></i>Along Langata Road, TMall, Nairobi</div>


              
                        <div class="follow"><b><i class="fa fa-phone"></i>Phone:   </b>+254 711110000</div>
            

           
                        <div class="follow"><b><i class="fa fa-envelope-o"></i>Email:  </b>example@gmail.com</div>

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

    <!--Footer-->
    <section id="footer">
      <div class="container text-center">
          <p>Developed by Japheth M /Copyrights Reserved  <i class="fa fa-apple"></i></p>
      </div>
    </section>

    <!--Footer End-->
    <script src="path/to/smooth-scroll.polyfills.min.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>
</html> 
