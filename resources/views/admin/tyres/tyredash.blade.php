

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
                  <i style="font-size:35px" <i style="color:black" class="fa-sharp fa-tire blackiconcolor"><a style="text-decoration: none; background-color: transparent;" href="{{route('all.tyre')}}" </a> <span style="font-size:40px" >{{count($tyres)}}</span></b></i></a>
                    </div>
                      <!-- <img src="images/me2.jpg" class="user"> -->
                      
                      <!-- <blockquote>I</blockquote> -->
                      <h3><span>NEW TYRES</span></h3>
                  </div>
              </div>



              <div class="col-md-3 text-center">
                <div class="profile">
                    <!-- <img src="images/logo22.jpg" class="user"> -->
                    <i style="font-size:35px" class="fa-solid fa-hand-holding-hand"></i>
                    <!-- <blockquote>Tore.</blockquote> -->
                    <a href="{{route('issued.tyre')}}"<h3><span>ISSUED TO TRUCKS</span></h3></a>
                </div>
            </div>



            <div class="col-md-3 text-center">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-solid fa-store"></i>
                  <!-- <blockquote>It</blockquote> -->
                  <h3><span>ALLOCATED TO STORE</span></h3>
              </div>
          </div>

          <div class="col-md-3 text-center">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-solid fa-screwdriver-wrench"></i>
                  <!-- <blockquote>I </blockquote> -->
                  <h3><span>TYRES TO RETRAY</span></h3>
              </div>
          </div>
            
          <div class="col-md-3 text-center" class="row" style="margin-Top:20px;">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-duotone fa-tire-flat"></i>
                  <!-- <blockquote>t</blockquote> -->
                  <h3><span>DEFECTED TYRES</span></h3>
              </div>
          </div>


          <div class="col-md-3 text-center" class="row" style="margin-Top:20px;">
              <div class="profile">
                  <!-- <img src="images/logo16.jpg" class="user"> -->
                  <i style="font-size:35px" class="fa-duotone fa-tire-rugged"></i>
                  <!-- <blockquote>t</blockquote> -->
                  <h3><span>TYRES FROM RETRAY</span></h3>
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
