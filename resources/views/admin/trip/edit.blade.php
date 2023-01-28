
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>TripList</b>
        </h2>


    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class ="row">



                <div class ="col-md-8" style ="margin-left:200px">
                    <div class ="card" >
                        <div class= "card-header">Update TripList</div>



                    <div class="card-body">

                    <form action={{url('trip/update/'.$trips->id)}} class="row g-3" method="post">

@csrf

                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Trailer</label>
                        <input type="text" class="form-control" id="trailer" name="trailer" value={{$trips->trailer}}>
                        </div>

                        @error('trailer')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Route</label>
                        <input type="text" class="form-control" id="route" name ="route" value ={{$trips->route}}>
                        </div>

                        @error('route')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-6">
                        <label for="inputAddress" class="form-label">Departure Date</label>
                        <input type="date" class="form-control" id="depart_date" placeholder="Date" name="depart_date" value={{$trips->depart_date}}>
                        </div>

                        @error('depart_date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        <div class="col-6">
                        <label for="inputAddress2" class="form-label">Return Date</label>
                        <input type="date" class="form-control" id="return_date" name ="return_date" value={{$trips->return_date}}>
                        </div>

                        @error('return_date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">Origin</label>
                        <input type="text" class="form-control" id="origin" name ="origin" value ={{$trips->origin}}>
                        </div>

                        @error('origin')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputZip" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" name ="destination" value ={{$trips->destination}}>
                        </div>

                        @error('destination')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputZip" class="form-label">Distance (km)</label>
                        <input type="text" class="form-control" id="distance" name ="distance" value ={{$trips->distance}}>
                        </div>

                        @error('distance')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


<div class="col-12">

<div class="col-12">
<button style="background-color:grey; margin-left:300px" type="submit" class="btn btn-primary">Edit Trip</button>
</div>
</form>

                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
@endsection
