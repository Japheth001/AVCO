

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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
  <section id="contact">
      <div class="container">
          <h1>AVCO Maintenance Form</h1>
             <!-- <img src="{{ asset('/images/avcotruck.jfif') }}"> -->
          <div class="row" >
              <div class="col-md-6" style="margin-left:25%">
                  <form class="contact-form" action= "{{route('mantain.add')}}" class="row g-3" method="post">
                  @csrf

                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Truck Number Plate" name="truck_no" >
                      </div>

                      <!-- <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name of Service Provider" name="provider">
                      </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Service Provider Contact" name="contact_no">
                    </div> -->

                    <div class="form-group">
                      <input type="date" class="form-control" placeholder="Date" name="date">
                    </div>


                    

                    <div class="form-group">
                      <textarea class="form-control" placeholder="Your Description"  rows="4" name="description"></textarea>
                  </div>
                <br>
                  <button type="submit" class="btn btn-primary"  style="margin-left:40%">SUBMIT</button>
                  <!-- </form> -->
              </div>

                       <div class="col-md-6 contact-info">
                      
                       <br>
                    <!-- <div class="form-group">
                      <input type="text" class="form-control" placeholder="Labour Cost" name="labour_cost">
                    </div>


              
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Material Cost" name="material_cost">
                    </div> -->
            

           
                  
                    </form>
                    <!-- <div class="form-group">
                      <input type="text" class="form-control" placeholder="Receipt">
                    </div> -->

                        
            </div>
          </div>
      </div>
    </section>
</form>













                    </div>


            </div>





        </div>









        

      <!--<td><img src="{{asset('image/gif/gif Lorry.gif')}}"class="img-responsive" alt="" style="width:150px; height:58px; margin-left:620px"</td>
-->


    </div>
</x-app-layout>
