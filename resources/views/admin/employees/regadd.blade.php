<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Register Employees</b>
        </h2>



        <form action="{{url('register/edit'.$register->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Brand</label>
                                            <input type="text" class="form-control" value="{{$register->name}}"  name="name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Update</button>
                        </form>

</x-app-layout>