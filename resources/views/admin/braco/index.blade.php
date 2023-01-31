
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Brands</b>

            <div>             

                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary waves-effect waves-light"
                    data-toggle="modal" data-target="#modalPush">
                    <i class="fa-regular fa-square-plus"/></i></a>
                </button>
            </div>
        </h2>


    </x-slot>

                <!-- CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

            <!-- JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

     <link href="{{asset('forms/cssf.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">

 

    <div class="py-14" id="grad1" style="background-color:white; margin-top:-30px">
    <div class="container">
            <div class ="row">
                <div class ="col-md-14">
                    <div class ="card">

                    @if(session('success'))
<!--
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> -->
                                <div>
                                           <script>
                                                        Swal.fire(
                                                            'Record Added Successfully!',
                                                            'You clicked the button!',
                                                            'success'
                                            );
                                            </script>

                                </div>
                            @endif


                        @if(session('delete'))

                                        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong>{{session('delete')}}</strong> -->
                                            <div>
                                                    <script>
                                                                Swal.fire(
                                                            'Record Deleted Successfully!',
                                                            'You clicked the button!',
                                                            'delete'
                                            );
                                                    </script>

                                        <!-- // </div> -->
                        @endif





                            @if(session('update'))
<!--
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> -->
                                <div>
                                           <script>
                                                        Swal.fire(
                                                            'Record Updated Successfully!',
                                                            'You clicked the button!',
                                                            'success'
                                            );
                                            </script>

                                </div>
                            @endif

                    

                        <div class= "card-header">All Brands</div>
                
                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Brand Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($brands as $brand)
        <tr>
        <th scope="row">{{$brands->firstitem()+$loop->index}}</th>
                    <td>{{$brand->brand_name}}</td>
                    <!-- <td><img src="{{asset($brand->brand_image)}}"class="img-responsive" alt="" style="width:70px; height:50px"</td> -->
                    <!-- <td><img src="{{URL::asset('/images/brand/'.$brand->brand_name)}}"> -->
                    <td><img src="{{URL::asset('storage/'.$brand->brand_image)}}" class="img-responsive" alt="" style="width:50px; height:50px"/></td>
                    <td>{{$brand->status=='1' ? 'hidden':'visible'}}</td>
                    <td>{{$brand->created_at}}</td>
                    <td><a href="{{url('/brand/edit/'.$brand->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('brand/delete/'. $brand->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$brands->links()}}

                    </div>

                </div>






               




        </div>



    </div>
    
   </div></div></div>









   <!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPush">Launch modal</button>

<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date on the latest brands</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

        <div class ="col-md-12">
                    <div class ="card">
                        <div class= "card-header"></div>

                        <div class="card-body">

                         <form action="{{route('brand.add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Brand</label>
                                            <input type="text" class="form-control"  name="brand_name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('brand_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Brand Image</label>
                                            <input type="file" class="form-control"  name="brand_image" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>



                            @error('brand_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                            <div>
                                        <label>Status</label><br>
                                        <input type="checkbox" name="status" class = "form-control" style="width:30px;height:25px"></>
                                </div>



                       
                        </div>
                         </div>

                    </div>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
      <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Add Brand</button>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
      </form>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->


</x-app-layout>


