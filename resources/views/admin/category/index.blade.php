<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Categories</b>
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

                        <div class= "card-header">All Category</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($categories as $category)
        <tr>
        <th scope="row">{{$categories->firstitem()+$loop->index}}</th>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->user->name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td><a href="{{url('category/edit/'.$category->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('category/delete/'. $category->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$categories->links()}}

                    </div>

                </div>






                <div class ="col-md-4">
                    <div class ="card">
                        <div class= "card-header">Add Category</div>



                    <div class="card-body">

                         <form action={{route('category.add')}} method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Category</label>
                                            <input type="text" class="form-control"  name="category_name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
</x-app-layout>
