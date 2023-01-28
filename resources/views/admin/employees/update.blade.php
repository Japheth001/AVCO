<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-top:25px">
           <b style="margin-left:40%" >Update Employee</b>
        </h1>



   <!-- Inline Form -->
   <div class="row" style="width:100%">
                            <div class="col-lg-7" style ="margin:auto; margin-top:30px;">
                                <div class="card">
                                    <div class="card-header">
                                        <div style="margin-left:auto">

                                        </div>
                                        <h3 class="card-title">Update Employee</h3></div>
                                    <div class="card-body" >




                                    <form action="{{url('/employee/update/'. $employees->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class ="form-inline">

                                        <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="name" placeholder="Employee's Name"
                                                value ="{{($employees->name)}}">
                                        </div>
                                        &nbsp;&nbsp;
                                        <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Enter email"
                                                value ="{{($employees->email)}}">
                                        </div>

                                            <div class="form-group ml-2">
                                                <label class="sr-only" for="exampleInputPassword2">Phone</label>
                                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Phone" name="phone"
                                                value ="{{($employees->phone)}}">
                                            </div>

                                        </div>

                                        <br>


                                        <div class ="form-inline">

                                                        <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Address</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail2" name = "address" placeholder="Address"
                                                                value ="{{($employees->address)}}">
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Experience</label>
                                                                <input type="text" class="form-control" name="experience" id="exampleInputEmail2" placeholder="Experience"
                                                                value ="{{($employees->address)}}">
                                                        </div>

                                                            <div class="form-group ml-2">
                                                                <label class="sr-only" for="exampleInputPassword2">Salary</label>
                                                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Salary" name="salary"
                                                                value ="{{($employees->salary)}}">
                                                            </div>

                                                        </div>

<br>
                                <div class ="form-inline">
                                        <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Photo</label>
                                                <input type="file" class="form-control" name="image" id="exampleInputEmail2" placeholder="Driver photo"
                                                value ="{{($employees->image)}}">
                                            </div>


                                </div>

                                <div style="margin-left:40%">
                                <button type="submit" class="btn btn-success waves-effect waves-light ml-2" style="background-color: aqua; text-align:center;"
                                >Submit</button>
                                </div>

                             </form>


                                    </div>
                                    <!-- card-body -->
                                </div>
                                <!-- card -->
                            </div>
                            <!-- col -->
                        </div>
                        <!-- End row -->

</x-app-layout>
