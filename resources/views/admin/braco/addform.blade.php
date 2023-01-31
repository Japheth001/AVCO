

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
          <h1>ADD Brand Form</h1>
             <!-- <img src="{{ asset('/images/avcotruck.jfif') }}"> -->
          <div class="row">
              <div class="col-md-6">
              <form action={{route('brand.add')}} method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Brand</label>
                                            <input type="text" class="form-control"  name="brand_name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('brand_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                            
                            <div class="col-md-6 mb-3">
                                                <label>Status</label><br>
                                                <input type="checkbox" name="status" class = "form-control"></>
                            </div>



                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Brand Image</label>
                                            <input type="file" class="form-control"  name="brand_image" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>



                            @error('brand_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Add Brand</button>
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
