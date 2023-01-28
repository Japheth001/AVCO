<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All images</b>
        </h2>


    </x-slot>

    <div class="py-12">

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

                        <div class= "card-header">All multi</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">multi Name</th>
                                <th scope="col">multi Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($images as $multi)
        <tr>
        <th scope="row"></th>
                    <td>{{$multi->multi_name}}</td>
                    <td><img src="{{asset($multi->image)}}"class="img-responsive" alt="" style="width:70px; height:50px"</td>
                    <td>{{$multi->created_at}}</td>
                    <td><a href="{{url('/multi/edit/'.$multi->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('multi/delete/'. $multi->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

       

                    </div>

                </div>






                <div class ="col-md-4">
                    <div class ="card">
                        <div class= "card-header">Add multi</div>



                    <div class="card-body">

                         <form action={{route('multi.add')}} method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add multi</label>
                                            <input type="text" class="form-control"  name="multi_name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('multi_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add multi Image</label>
                                            <input type="file" class="form-control"  name="multi_image" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>



                            @error('multi_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Add multi</button>
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
</x-app-layout>
