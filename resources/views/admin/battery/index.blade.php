<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>All Battery Records</b>

                <!-- <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1100px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('new.battery')}}"/>
                    <i class="fa-solid fa-file-invoice-dollar"></i>

                    </button>
                </div> -->


                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('new.battery')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>



        </h2>



    </x-slot>
<!-- Button trigger modal -->

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

                    <!-- @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
                    @endif -->

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
<!--
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




                        <div class= "card-header">Registered battery Records</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <!-- <th scope="col">User</th> -->
                                <th scope="col">Vehicle No</th>
                                <th scope="col">Serial</th>


                                <!-- <th scope="col">Make</th> -->
                                <th scope="col">Size</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Verified</th>
                                <th scope="col">Movement</th>
                                <th scope="col">Purchased</th>
                                <th scope="col">Comments</th>
                                <!-- <th scope="col">Provider</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Labour</th>
                                <th scope="col">Material</th> -->
                                <!-- <th scope="col">Comments</th> -->

                                <!-- <th scope="col">Receipt</th> -->

                                <th scope="col">Created</th>
                                <th scope="col">Roles</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($batteries as $battery)

        <tr>
        <th scope="row">{{$batteries->firstitem()+$loop->index}}</th>

                    <td>{{$battery->truck_id}}</td>
                    <td>{{$battery->serial_no}}</td>
                    <!-- <td>{{$battery->provider}}</td>
                    <td>{{$battery->contact_no}}</td> -->
                    <!-- <td>{{$battery->labour_cost}}</td> -->
                    <!-- <td>{{$battery->material_cost}}</td> -->
                    <td>{{$battery->size}}</td>
                    <td>{{$battery->price}}</td>
                    <td>{{$battery->status}}</td>
                    <td>{{$battery->verified_date}}</td>
                    <td>{{$battery->movement}}</td>
                    
                    <td>{{$battery->date_purchased}}</td>
                    <td>{{$battery->comments}}</td>
                    <td>{{$battery->created_at}}</td>
                    <td>{{$battery->date}}</td>

                    <!-- <td>{{$battery->make}}</td> -->

                    

                    
                    
                    <!-- <td>{{$battery->comments}}</td> -->
                    <!-- <td>{{$battery->receipt}}</td> -->
                   



 <td>
    <div class="btn-group open">
  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>Action</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <!-- <span class="fa fa-caret-down" title="Toggle dropdown menu"></span> -->
  </a>
  <ul class="dropdown-menu">
  <!-- <li><a href="{{url('/battery/approvesnew/'.$battery->id)}}"><i class="fa fa-edit fa-fw"></i>New</a></li> -->
    <!-- <li><a href="{{url('/battery/approvesnew/'.$battery->id)}}"><i class="fa fa-edit fa-fw"></i>Approve</a></li>
    <li><a href="{{url('/expense/getExpense/'.$battery->id)}}"><i class="fa fa-edit fa-fw"></i>Fill Expense</a></li> -->
    <li><a href="{{url('/battery/getNewBat/'.$battery->id)}}"><i class="fa fa-edit fa-fw"></i> Edit</a></li>
    <li><a href="{{url('/battery/delete/'. $battery->id)}}"><i class="fa fa-trash"></i> Delete</a></li>

    <li class="divider"></li>

  </ul>
</div>
</td>


        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$batteries->links()}}

                    </div>

                </div>








                    </div>


            </div>





        </div>









        <br>

      <!--<td><img src="{{asset('image/gif/gif Lorry.gif')}}"class="img-responsive" alt="" style="width:150px; height:58px; margin-left:620px"</td>
-->

<link href="{{asset('forms/cssf.css')}}" rel="stylesheet">
    </div>
</x-app-layout>
