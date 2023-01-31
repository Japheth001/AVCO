
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Brands</b>
        </h2>


    </x-slot>

    <div class="py-12">

    <div class="container" style="margin-left:250px">
         

    <div class ="col-md-8">
            <div class ="card">
                <div class= "card-header">Edit Brand</div>

                    <div class="card-body"> 

                    <form action="{{url('brand/update/'.$brands->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf 
                            <div class="row">


                                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1">Add Brand</label>
                                        <input type="text" class="form-control" value="{{$brands->brand_name}}"  name="brand_name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                </div>


                        
                                <div class="col-md-6 mb-3">
                                        <label>Image</label>
                                        <!-- <input type="file" name="image" class = "form-control" required></> -->
                                        <img src="{{asset('storage/'.$brands->brand_image)}}"></img>
                                </div>


                                <div class="col-md-6 mb-3">
                                        <label>Status</label><br>
                                        <input type="checkbox" name="status" value="{{$brands->status}}" class = "form-control"></>
                                </div>

                                
                               
                                <div class="col-md-12 mb-3">
                                        <button style="background-color: #9999ff; width:100px" type="submit" 
                                        class="btn btn-primary float-end">Save</button>
                                </div>
                                

                            </div>

                    </form>
                </div>



    </div> </div> </div> </div></div>
  

    </x-app-layout>
