<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>About Tyre Updates</b>
        </h2>


    </x-slot>

    <div class="py-12" style=margin-left:300px>

        <div class="container">
            <div class ="row">



                <div class ="col-md-8">
                    <div class ="card">
                        <div class= "card-header">Update Tyre</div>



                    <div class="card-body">
                    
                    <form action="{{url('tyre/update/'.$tyres->id)}}" method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Front|Back</label>
                                            <input type="text" class="form-control"  name="front_or_back_tyre" id="exampleInputEmail1"
                                            value="{{$tyres->front_or_back_tyre}}" aria-describedby="emailHelp">


                                            </div>

                            @error('front_or_back_tyre')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                 

<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Serial No</label>
                                            <input type="text" class="form-control" value="{{$tyres->tyre_serial}}" name="tyre_serial" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('tyre_serial')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

 <!--------------------------------------------------------------------------------------------------------->
     
<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Size</label>
                                            <input type="text" class="form-control"  name="size" id="exampleInputEmail1"
                                            value="{{$tyres->size}}" aria-describedby="emailHelp">


                                            </div>

                            @error('size')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

 <!---------------------------------------------------------------------------------------------------------> 
                            <div class="form-group">
                                            <label for="exampleInputEmail1">Manufacturer</label>
                                            <input type="text" class="form-control" value="{{$tyres->manufacturer}}" name="manufacturer" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('manufacturer')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->
                           <!--------------------------------------------------------------------------------------------------------->
                           <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <div class="custom-selects" style="width: 200px; font-size: 12.5px;">
						<select name="status" size="1">
						        <option value="Yet Issued">Yet Issued</option>
						        <option value="Issued">Issued</option>
						        <option value="Defective">Defective</option>

						</select>
						</div>

                                            </div>

                            @error('status')
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
