<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>All Categories</b>


                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1195px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('all.newcat')}}"/>
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


<div class="py-14" id="grad1" style="background-color:white;">
    <div class="container">
            <div class ="row">
                <div class ="col-md-14">
                    <div class ="card">

                    
                    <!-- @if(session('success'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> 

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

                    


            

            <div class= "card-header">Registered Categories</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <!-- <th scope="col">User</th> -->
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Meta-Title</th>
                                <th scope="col">Meta-Keyword</th>
                                <th scope="col">Meta-Description</th>



                                <th scope="col">Created At</th>
                                <th scope="col">Roles</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($newcats as $newcat)
        <tr>
        <th scope="row">{{$newcats->firstitem()+$loop->index}}</th>

                    <td>{{$newcat->name}}</td>
                    <td>{{$newcat->slug}}</td>
                    <td>{{$newcat->description}}</td>
                    
                    <td><img src="{{URL::asset('storage/'.$newcat->image)}}" class="img-responsive" alt="" style="width:50px; height:50px"/></td>
                    <td>{{$newcat->status=='1' ? 'hidden':'visible'}}</td>
                    <td>{{$newcat->meta_title}}</td>
                    <td>{{$newcat->meta_keyword}}</td>
                    <td>{{$newcat->meta_description}}</td>
                    <td>{{$newcat->created_at}}</td>

                    <!-- <td>{{$newcat->receipt}}</td> -->




 <td>
    <div class="btn-group open">
  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>Action</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <!-- <span class="fa fa-caret-down" title="Toggle dropdown menu"></span> -->
  </a>
  <ul class="dropdown-menu">
    <li><a href="{{url('/newcat/getNewCat/'.$newcat->id)}}"><i class="fa fa-edit fa-fw"></i> Edit</a></li>
    <li><a href="{{url('/newcat/delete/'. $newcat->id)}}"><i class="fa fa-trash"></i> Delete</a></li>

    <li class="divider"></li>

  </ul>
</div>
</td>


        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$newcats->links()}}

                    </div>

                </div>








                    </div>


            </div>





        </div>













                    </div>
            </div>
        </div>
    </div>
    </div>

    </x-app-layout>