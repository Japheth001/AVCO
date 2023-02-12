<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 5px;">
           <b>Retray Tyre</b>




                    <!-- Button trigger modal -->
<!-- <button type="button" style="width:230px; background-color:#9999ff; margin-left: 400px;  margin-top:45px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Click to Register New Tyre
</button> -->


                    <!-- <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('tyre.add2')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button> -->

                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>





        </h2>


    </x-slot>

    <script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" -->

    <div class="py-14">

        <div class="container">
            <div class ="row">
                <div class ="col-md-12">
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



                            @if(session('updateRetray'))
<!--
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> -->
                                <div>
                                           <script>
                                                        Swal.fire(
                                                            'Retray Record Successfully Done!',
                                                            'You clicked the button!',
                                                            'success'
                                            );
                                            </script>

                                </div>
                            @endif




                        <div class= "card-header">Registered Tyres</div>


                        <table class="table">
                                <thead>
                                <tr>

                                <th scope="col">SL</th>
                                <th scope="col">User</th>
                                <th scope="col">Serial No</th>
                                <th scope="col">Make</th>
                                <th scope="col">Size</th>
                                <!-- <th scope="col">Truck</th>                          -->
                                <th scope="col">Front|Back</th>




                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($tyres as $tyre)
        <tr>
        <th scope="row">{{$tyres->firstitem()+$loop->index}}</th>
                    <td>{{$tyre->user->name}}</td>
                    <td>{{$tyre->tyre_serial}}</td>
                    <td>{{$tyre->manufacturer}}</td>
                    <td>{{$tyre->size}}</td>

                    <td>{{$tyre->front_or_back_tyre}}</td>


                    <td>{{$tyre->status}}</td>
                    <td>{{$tyre->created_at}}</td>
                    <!-- <td><a href="{{url('tyre/edit/'.$tyre->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td> -->
                    <td><a href="{{url('tyres/retray/'.$tyre->id)}}"<span style="width:70px" class="btn btn-success">Retray</span></td>
                    <!-- <td><a href="{{url('tyre/delete/'. $tyre->id)}}"<span class="btn btn-danger">Delete</span></td> -->
                    <!-- <td><a href="{{url('tyre/manage/'. $tyre->id)}}"<span class="btn btn-danger">Manage</span></td> -->
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$tyres->links()}}

                    </div>

                </div>








                    </div>


            </div>





        </div>











      <!--<td><img src="{{asset('image/gif/gif Lorry.gif')}}"class="img-responsive" alt="" style="width:150px; height:58px; margin-left:620px"</td>
-->


    </div>
</x-app-layout>
