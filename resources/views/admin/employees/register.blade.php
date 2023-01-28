<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Employees</b>
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

                        <div class= "card-header">All register</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                               
                                <th scope="col">User Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($registers as $register)
        <tr>
        <th scope="row">{{$registers->firstitem()+$loop->index}}</th>
                   
                    <td>{{$register->name}}</td>
                    <td>{{$register->created_at}}</td>
                    <td><a href="{{url('register/edit/'.$register->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('register/delete/'. $register->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$registers->links()}}

                    </div>

                </div>






                <div class ="col-md-4">
                    <div class ="card">
                        <div class= "card-header">Add register</div>



                    <div class="card-body">

                         <form action={{route('register.add')}} method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add register</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('name')
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
