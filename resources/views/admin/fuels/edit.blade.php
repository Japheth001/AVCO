
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>fuelList</b>
        </h2>


    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class ="row">



                <div class ="col-md-8" style ="margin-left:200px">
                    <div class ="card" >
                        <div class= "card-header">Update fuelList</div>



                    <div class="card-body">

                    <form action="{{url('fuel/update/'.$fuels->id)}}" class="row g-3" method="post">

@csrf

                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Trailer No:</label>
                        <input type="text" class="form-control" id="truck_no" name="truck_no" value={{$fuels->truck_no}}>
                        </div>

                        @error('trailer')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Station</label>
                        <input type="text" class="form-control" id="station" name ="station" value ={{$fuels->station}}>
                        </div>

                        @error('station')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-6">
                        <label for="inputAddress" class="form-label">Gallons [Ltrs]</label>
                        <input type="text" class="form-control" id="gallons" placeholder="Date" name="gallons" value={{$fuels->gallons}}>
                        </div>

                        @error('gallons')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        <div class="col-6">
                        <label for="inputAddress2" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name ="price" value={{$fuels->price}} />
                        </div>

                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name ="date" value ={{$fuels->date}}>
                        </div>

                        @error('date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputZip" class="form-label">Receipt</label>
                        <input type="file" class="form-control" id="receipt" name ="receipt" value ={{$fuels->receipt}}>
                        </div>

                        @error('receipt')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        

                        
<div class="col-12">

<div class="col-12">
<button style="background-color:grey; margin-left:300px" type="submit" class="btn btn-primary">Edit Fuel</button>
</div>
</form>

                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
</x-app-layout>
