<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>All TripList</b>




                       <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('all.tripsheets')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>

        </h2>


    </x-slot>



    <script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <link href="{{asset('forms/cssf.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">

    

    <div class="py-14" id="grad1">

        <div class="container">
            <div class ="row">
                <div class ="col-md-14">
                    <div class ="card">


                            @if(session('success'))
<!--
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> -->
                                <div>
                                           <script>
                                                        Swal.fire(
                                                            'Record Added Successfully!',
                                                            'You clicked the button!',
                                                            'success'
                                            );
                                            </script>

                                </div>
                            @endif


                            @if(session('delete'))

                                        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong>{{session('delete')}}</strong> -->
                                            <div>
                                                    <script>
                                                                 Swal.fire(
                                                            'Record Deleted Successfully!',
                                                            'You clicked the button!',
                                                            'delete'
                                            );
                                                    </script>

                                        <!-- // </div> -->
                            @endif



                            @if(session('update'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> -->
                                <div>
                                           <script>
                                                        Swal.fire(
                                                            'Record Updated Successfully!',
                                                            'You clicked the button!',
                                                            'success'
                                            );
                                            </script>

                                </div>
                            @endif









                        <div class= "card-header">Registered trip Records</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Filled By</th>
                                <th scope="col">Start</th>
                                <th scope="col">End</th>
                                <th scope="col">Trip Days</th>
                                <th scope="col">Truck No</th>
                                <th scope="col">Trailer No</th>
                                <th scope="col">Driver</th>
                                <th scope="col">Turnboy</th>



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
                    <td>{{$trip->startdate}}</td>
                    <td>{{$trip->enddate}}</td>
                    <td>{{$trip->tripdays}}</td>
                    <td>{{$trip->truckno}}</td>
                    <td>{{$trip->trailerno}}</td>
                    <td>{{$trip->driver}}</td>
                    <td>{{$trip->turnboy}}</td>
                    
                    <td>{{$trip->created_at}}</td>

                   




 <td>
    <div class="btn-group open">
  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>Action</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <!-- <span class="fa fa-caret-down" title="Toggle dropdown menu"></span> -->
  </a>
  <ul class="dropdown-menu">
    <li><a href="{{url('/ntripsheet/getTrip/'.$trip->id)}}"><i class="fa fa-edit fa-fw"></i> Edit</a></li>
    <li><a href="{{url('/ntripsheet/delete/'. $trip->id)}}"><i class="fa fa-trash"></i> Delete</a></li>

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
