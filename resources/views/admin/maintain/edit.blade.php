
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Update Maintenance Record</b>
        </h2>


    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class ="row">



                <div class ="col-md-8" style ="margin-left:200px">
                    <div class ="card" >
                        <div class= "card-header">Update Record</div>



                    <div class="card-body">

                    <form action="{{url('mantain/update/'.$mantains->id)}}" class="row g-3" method="post">

                        @csrf

                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Trailer No:</label>
                        <input type="text" class="form-control" id="truck_no" name="truck_no" value="{{$mantains->truck_no}}">
                        </div>

                        @error('truck_no')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Description</label>
                        <input type="textarea" class="form-control" id="description" name ="station" value ="{{$mantains->description}}">
                        </div>

                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-6">
                        <label for="inputAddress" class="form-label">Service Provider</label>
                        <input type="text" class="form-control" id="provider" placeholder="Date" name="provider" value="{{$mantains->provider}}">
                        </div>

                        @error('provider')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        <div class="col-6">
                        <label for="inputAddress2" class="form-label">Provider Contact</label>
                        <input type="text" class="form-control" id="price" name ="contact_no" value={{$mantains->contact_no}} />
                        </div>

                        @error('contact_no')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">Labour Cost</label>
                        <input type="text" class="form-control" id="labour_cost" name ="date" value ={{$mantains->labour_cost}}>
                        </div>

                        @error('labour_cost')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        <div class="col-md-6">
                        <label for="inputZip" class="form-label">Material Cost</label>
                        <input type="text" class="form-control" id="material_cost" name ="material_cost" value ={{$mantains->material_cost}}>
                        </div>

                        @error('material_cost')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        
                        <div class="col-md-6">
                        <label for="inputZip" class="form-label">Date</label>
                        <input type="date" class="form-control" id="material_cost" name ="date" value ={{$mantains->date}}>
                        </div>

                        @error('date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        

                        
<div class="col-12">

<div class="col-12">
<button style="background-color:grey; margin-left:300px" type="submit" class="btn btn-primary">Edit Record</button>
</div>
</form>

                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
</x-app-layout>
