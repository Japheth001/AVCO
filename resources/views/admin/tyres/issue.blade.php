<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Issue Tyre</b>
        </h2>


    </x-slot>


    <br>


    <div class="py-12" style=" background-color: #e9fbfa; height:480px;width:900px; margin: 0 auto;">

    <div class ="row" style="margin-top:-30px; margin-left: 70px;">
    <h1 style="font-size:25px"><b>Brief Details of this Tyre</b></h1>
    <br><br>
                        <img src ="{{asset('storage/images/tyre/tyre1.gif')}}"class = "img-responsive" style="width:auto; margin-top:0px "/>
                        <form>
                        <br><br>
                        <h2 style="font-size:18px"><b><u>{{$tyres->front_or_back_tyre}}<span>&nbsp;Tire </u></b></h2>
                        <br>
                        <h2 style="font-size:17px"><b>Serial No:</b><span>&nbsp;&nbsp;<span>{{$tyres->tyre_serial}} <span></h2>
                        <h2 style="font-size:17px"><b>Tyre Size:</b><span>&nbsp;&nbsp;&nbsp;<span>{{$tyres->size}} <span> </h2>
                        <h2 style="font-size:17px"><b>Manufacturer:</b><span>&nbsp;&nbsp;<span>{{$tyres->manufacturer}} <span></h2>
                        </form>


                    </div>

        <div class="container">
            <div class ="row">

            <!--<div style=margin-left:300px>
                    <div class ="row" style=margin-top:400px>
                       <!-- <img src ="{{asset('image/tyre/tyre1.gif')}}"class = "img-responsive" style="width:auto; margin-top:0px "/>-->
                    </div>
            </div>



                <div class ="col-md-6" style= "margin:auto; margin-top:-355px; width:500px; margin-left:450px;"  >
                    <div class ="card">
                        <div class= "card-header">Issue Tyre</div>



                    <div class="card-body" style= "background-color: white;">

                    <form action={{url('tyre/issue/'.$tyres->id)}} method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Issue To (Driver's Name)</label>
                                            <input type="text" class="form-control"  name="issue_to" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('issue_to')
                            <span class="text-danger">{{$message}}</span>
                            @enderror




<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Driver's Job ID</label>
                                            <input type="text" class="form-control"  name="driverid" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('driverid')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

 <!--------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Vehicle Number Plate to be Issued To</label>
                                            <input type="text" class="form-control"  name="numberplate_id" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('numberplate_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


<!--------------------------------------------------------------------------------------------------------->
                           <!--------------------------------------------------------------------------------------------------------->
                           <div class="form-group">
                                    <label for="exampleInputEmail1">Select Status</label>
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
                    <button style="background-color: #9999ff; margin-top:-55px; width:100px" type="submit"
                            class="btn btn-primary">Update</button>


                        </form>
                        </div>
                         </div>

                    </div>
                    </div>

            </div>




        </div>

         </div>

    </div>
</x-app-layout>
