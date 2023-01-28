
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Brands</b>
        </h2>


    </x-slot>

    <div class="py-4">

        

                    @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
                    @endif

                        
                </div>






                <div class ="col-md-4" style="margin: auto;">
                    <div class ="card" >
                        <div class= "card-header">Edit Brand</div>



                    <div class="card-body">

                    <form action="{{url('brand/update/'.$brands->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Brand</label>
                                            <input type="text" class="form-control" value="{{$brands->brand_name}}"  name="brand_name" id="exampleInputEmail1"
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



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
  

    </x-app-layout>
