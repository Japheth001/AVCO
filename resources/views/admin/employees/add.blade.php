<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Register Employees</b>
        </h2>



   <!-- Inline Form -->
   <div class="row" style="width:100%">
                            <div class="col-lg-7" style ="margin:auto; margin-top:30px;">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Inline Form</h3></div>
                                    <div class="card-body" >




                                    <form action="{{route('employee.add')}}" method="post" enctype="multipart/form-data">
                                        @csrf 
                                        
                                        <div class ="form-inline">

                                        <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="name" placeholder="Employee's Name">
                                        </div>
                                        &nbsp;&nbsp; 
                                        <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Enter email">
                                        </div>

                                            <div class="form-group ml-2">
                                                <label class="sr-only" for="exampleInputPassword2">Phone</label>
                                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Phone" name="phone">
                                            </div>
                                            
                                        </div>

                                        <br>


                                        <div class ="form-inline">

                                                        <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Address</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail2" name = "address" placeholder="Address">
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Experience</label>
                                                                <input type="text" class="form-control" name="experience" id="exampleInputEmail2" placeholder="Experience">
                                                        </div>

                                                            <div class="form-group ml-2">
                                                                <label class="sr-only" for="exampleInputPassword2">Salary</label>
                                                                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Salary" name="salary">
                                                            </div>
                                                          
                                                        </div>
                                
<br>
                                <div class ="form-inline">
                                        <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Photo</label>
                                                <input type="file" class="form-control" name="image" id="exampleInputEmail2" placeholder="Driver photo">
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


