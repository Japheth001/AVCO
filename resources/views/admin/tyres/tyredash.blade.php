

<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
           <!-- <b>All mantain Records</b> -->


    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"  href="{{asset('awoza/style.css')}}">
    <!-- <script src="{{asset('awoza/js/jquery.js')}}"'></script>
    <script src="{{asset('awoza/js/jquery-ui.js')}}"></script>
    <script src="{{asset('awoza/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('awoza/js/boostrap/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('awoza/css/boostrap/bootstrap.min.css')}}">
    <script src="{{asset('awoza/js/boostrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('awoza/js/smooth-scroll.js')}}"></script> -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.css">



    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js>"




  <!--Maintenance Form-->
  <!--Testimonials-->
<section id="testimonials">
        <div class="container">
          <h1 style="margin-top:-35px;">AVCO Tyre Department</h1>
          <p style="margin-top:-15px;" class="text-center">Mini Dashboard</p>

          <div class="row">
              <div class="col-md-3 text-center">
                  <div class="profile" >
                    
                  <div id="cbtn1">
                  <i style="font-size:35px" <i style="color:black" class="fa-thin fa-tire blackiconcolor">
                  <a style="text-decoration: none; background-color: transparent;" href="{{route('all.tyre')}}" </a> <span style="font-size:40px" >{{count($tyres)}}</span></b></i></a>
                    </div>
                      <!-- <img src="images/me2.jpg" class="user"> -->
                      
                      <!-- <blockquote>I</blockquote> -->
                      <h3><span>NEW TYRE</span></h3>
                  </div>
              </div>




            <div class="col-md-3 text-center">
              <div class="profile">

              <div id="cbtn1">
                  <i style="font-size:35px" <i style="color:black" class="fa-thin fa-truck-moving">
                  <a style="text-decoration: none; background-color: transparent;" href="{{route('tyre.allissue')}}" </a> <span style="font-size:40px" >{{count($tyres)}}</span></b></i></a>
                    </div>
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <!-- <i style="font-size:35px" class="fa-thin fa-truck-moving"></i> -->
                  
                  <!-- <blockquote>It</blockquote> -->
                  
                  <h3><span>ISSUE TYRE</span></h3>
              </div>
          </div>


            <div class="col-md-3 text-center">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-thin fa-store"></i>
                  <a style="text-decoration: none; background-color: transparent;" href="{{route('tyre.allstore')}}" 
                </a> <span style="font-size:40px" >{{count($tyres)}}</span></b></i></a>
                  <!-- <blockquote>It</blockquote> -->
                  <h3><span>ALLOCATE TO STORE</span></h3>
              </div>
          </div>

          <div class="col-md-3 text-center">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-thin fa-screwdriver-wrench"></i>
                  <!-- <blockquote>I </blockquote> -->
                  <h3><span>TYRES TO RETRAY</span></h3>
              </div>
          </div>
            
          <div class="col-md-3 text-center" class="row" style="margin-Top:20px;">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-thin fa-tire-flat"></i>
                  <!-- <blockquote>t</blockquote> -->
                  <h3><span>DEFECTED TYRES</span></h3>
              </div>
          </div>

        <br>
          <div class="col-md-3 text-center" class="row" style="margin-Top:20px;">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-thin fa-tire-rugged"></i>
                  <!-- <blockquote>t</blockquote> -->
                  <h3><span>TYRES FROM RETRAY</span></h3>
              </div>
          </div>


          <div class="col-md-3 text-center" class="row" style="margin-Top:20px;">
              <div class="profile">

              <div id="cbtn1">
                  <i style="font-size:35px" <i style="color:black" class="fa-thin fa-car-battery"><a style="text-decoration: none; background-color: transparent;" href="{{route('new.battery')}}" </a> <span style="font-size:40px" >{{count($tyres)}}</span></b></i></a>
                    </div>
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <!-- <i style="font-size:35px" class="fa-thin fa-car-battery"></i> -->
          
                  <!-- <blockquote>t</blockquote> -->
                  <h3><span>BATTERY MASTER</span></h3>
              </div>
          </div>

          </div>
        </div>
    </section>


    
    <!-- @php ($i=1)
    @foreach($tyres as $tyre)
    <tr>
      <th scope="row">{{$i++}}</th>
      <!-- <td>{{ $tyre->status}}</td> -->
          
    <!-- </tr>
   <!-- @endforeach --> 




































      


    </div>
</x-app-layout>
