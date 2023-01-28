<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
           <!-- <b>All mantain Records</b> --
<!-- Button trigger modal -->
<button type="button" style="background-color: #6666ff; margin-left: 1100px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa-regular fa-square-plus"></i>
</button>


<!-- Modal -->
<div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register trip</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >

      <div class ="card">




                    <div class="card-body">




                    <form action={{route('trip.add')}} class="row g-3" method="post">

                    @csrf

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Trailer</label>
    <input type="text" class="form-control" id="trailer" name="trailer">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Route</label>
    <input type="text" class="form-control" id="route" name ="route">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Departure Date</label>
    <input type="date" class="form-control" id="depart_date" placeholder="Date" name="depart_date">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Return Date</label>
    <input type="date" class="form-control" id="return_date" name ="return_date">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Origin</label>
    <input type="text" class="form-control" id="origin" name ="origin">
  </div>

  <div class="col-md-6">
    <label for="inputZip" class="form-label">Destination</label>
    <input type="text" class="form-control" id="destination" name ="destination">
  </div>

  <div class="col-md-6">
    <label for="inputZip" class="form-label">Distance (km)</label>
    <input type="text" class="form-control" id="distance" name ="distance">
  </div>


  <div class="col-12">

  <div class="col-12">
    <button style="background-color:grey;" type="submit" class="btn btn-primary">Add Trip</button>
  </div>
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
                <div class ="col-md-14">
                    <div class ="card">

                    @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
                    @endif



                        <div class= "card-header">Registered trips</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">User</th>
                                <th scope="col">Trailer</th>
                                <th scope="col">Route</th>
                                <th scope="col">Depart</th>
                                <th scope="col">Return</th>
                                <th scope="col">Origin</th>
                                <th scope="col">Destiny</th>
                                <th scope="col">Kilometers</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Roles</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($trips as $trip)
        <tr>
        <th scope="row">{{$trips->firstitem()+$loop->index}}</th>
                    <td>{{$trip->user->name}}</td>
                    <td>{{$trip->trailer}}</td>
                    <td>{{$trip->route}}</td>
                    <td>{{$trip->depart_date}}</td>
                    <td>{{$trip->return_date}}</td>
                    <td>{{$trip->origin}}</td>
                    <td>{{$trip->destination}}</td>
                    <td>{{$trip->distance}}</td>
                    <td>{{$trip->created_at}}</td>



 <td>
    <div class="btn-group open">
  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>Action</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <!-- <span class="fa fa-caret-down" title="Toggle dropdown menu"></span> -->
  </a>
  <ul class="dropdown-menu">
    <li><a href="{{url('trip/edit/'.$trip->id)}}"><i class="fa fa-edit fa-fw"></i> Edit</a></li>
    <li><a href="{{url('trip/delete/'. $trip->id)}}"><i class="fa fa-trash"></i> Delete</a></li>

    <li class="divider"></li>

  </ul>
</div>
</td>


        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$trips->links()}}

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
