
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Brands</b>
        </h2>


    </x-slot>

 

    <div class="py-12">

    <!-- <button type="button" style="background-color: #6666ff; margin-left: 100px;" class="btn btn-primary"> <"a href="{{route('brand.addform')}}/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button> -->

                    <button style="background-color: #9999ff; width:100px" type="submit"  class="btn btn-primary">Add Brand</button>

        <div class="container">
            <div class ="row">
                <div class ="col-md-8">
                    <div class ="card">

                    @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
                    @endif

                        <div class= "card-header">All Brands</div>
                
                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Brand Image</th>
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






                <div class ="col-md-4">
                    <div class ="card">
                        <div class= "card-header">Add Brand</div>

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



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Add Brand</button>
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>


</x-app-layout>


