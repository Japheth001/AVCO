<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Vehicless</b>

            

           
                    <!-- Button trigger modal -->
<button type="button" style="width:200px; background-color:#9999ff; margin-left: 400px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Click to Add New Vehicle
</button>

<!-- Modal -->
<div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register Vehicle</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >

      <div class ="card">
                        



                    <div class="card-body">
                    <form action={{route('vehicle.add')}} method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Vehicle Type</label>
                                            <input type="text" class="form-control"  name="vehicle_type"  id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

 
                            @error('vehicle_type')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
<!--------------------------------------------------------------------------------------------------------->
                             <div class="form-group">
                                            <label for="exampleInputEmail11" style="font-size:16px">Number Plate</label>
                                            <input type="text" class="form-control"  name="number_plate" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('number_plate')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                         
<!--------------------------------------------------------------------------------------------------------->
 <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Vehicle Description </label>
                                            <input type="text" class="form-control"  name="number_desc" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('number_desc')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->
                           
                           <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Assigned Driver</label>
                                            <input type="text" class="form-control"  name="assigned_driver" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('assigned_driver')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Upload Doc</label>
                                            <input style="font-size:16px" type="file" class="form-control"  name="vehicle_docs" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('vehicle_docs')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->
                  

                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" style="background-color: #9999ff; width:100px; margin-left:50px" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </form>
      </div>
      </div>
      </div>
      <!--<div class="modal-footer">-->
        <!--<button type="button" style="width:200px; background-color:#9999ff; class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        
      <!--</div>-->
    </div>
  </div>
</div>


        </h2>


    </x-slot>

    <br>

    <div class="py-14">

        <div class="container">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="card">

                    @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
                    @endif



                        <div class= "card-header">Registered Vehicles</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Vehicle Type</th>
                                <th scope="col">No Plate</th>
                                <th scope="col">Description</th>
                                <th scope="col">Driver</th>
                                <th scope="col">Documents</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($vehicles as $vehicle)
        <tr>
        <th scope="row">{{$vehicles->firstitem()+$loop->index}}</th>
                    <td>{{$vehicle->vehicle_type}}</td>
                    <td>{{$vehicle->number_plate}}</td>
                    <td>{{$vehicle->number_desc}}</td>
                    <td>{{$vehicle->assigned_driver}}</td>
                    <td>{{$vehicle->vehicle_docs}}</td>
                    <td>{{$vehicle->created_at}}</td>
                    <td><a href="{{url('vehicle/edit/'.$vehicle->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('vehicle/delete/'. $vehicle->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$vehicles->links()}}

                    </div>

                </div>






                

                    </div>


            </div>





        </div>









        <br>

      <!--<td><img src="{{asset('image/gif/gif Lorry.gif')}}"class="img-responsive" alt="" style="width:150px; height:58px; margin-left:620px"</td>
-->


    </div>
</x-app-layout>
