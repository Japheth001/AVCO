<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>About Vehicle Updates</b>
        </h2>


    </x-slot>

    <div class="py-12" style=margin-left:300px>

        <div class="container">
            <div class ="row">



                <div class ="col-md-8">
                    <div class ="card">
                        <div class= "card-header">Update Vehicle</div>



                    <div class="card-body">

                         <form action="{{url('vehicle/update/'.$vehicles->id)}}" method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Vehicle Type</label>
                                            <input type="text" class="form-control"  name="vehicle_type" id="exampleInputEmail1"
                                            value="{{$vehicles->vehicle_type}}" aria-describedby="emailHelp">


                                            </div>

                            @error('vehicle_type')
                            <span class="text-danger">{{$message}}</span>
                            @enderror




<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Number Plate</label>
                                            <input type="text" class="form-control"  name="number_plate" id="exampleInputEmail1"
                                            value="{{$vehicles->number_plate}}" aria-describedby="emailHelp">


                                            </div>

                            @error('number_plate')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

 <!--------------------------------------------------------------------------------------------------------->
                            <div class="form-group">
                                            <label for="exampleInputEmail1">Vehicle Description </label>
                                            <input type="text" class="form-control"  name="number_desc" id="exampleInputEmail1"
                                            value="{{$vehicles->number_desc}}" aria-describedby="emailHelp">


                                            </div>

                            @error('number_desc')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->
                           <!--------------------------------------------------------------------------------------------------------->
                           <div class="form-group">
                                            <label for="exampleInputEmail1">Add Vehicle</label>
                                            <input type="text" class="form-control"  name="assigned_driver" id="exampleInputEmail1"
                                            value="{{$vehicles->assigned_driver}}" aria-describedby="emailHelp">


                                            </div>

                            @error('assigned_driver')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->
                            <!--------------------------------------------------------------------------------------------------------->
                            <div class="form-group">
                                            <label for="exampleInputEmail1">Upload Doc</label>
                                            <input type="file" class="form-control"  name="vehicle_docs" id="exampleInputEmail1"
                                            value="{{$vehicles->vehicle_docs}}" aria-describedby="emailHelp">


                                            </div>

                            @error('vehicle_docs')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->
                  
                    <div style=margin-left:250px>
                    <button style="background-color: #9999ff; width:100px" type="submit"
                            class="btn btn-primary">Update</button>
                            
                           
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
</x-app-layout>
