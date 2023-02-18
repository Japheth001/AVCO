<x-app-layout>


<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">

<div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:10px; margin-bottom:-40px" class="btn btn-primary"> <a href="{{route('new.contact')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>

           
           

                <br>

    <div class="py-12">


        <div class="container">


            <div class ="row">
                <div class ="col-md-12">

                    <div class ="card">

                    <div class= "card-header">
                            <a href="{{route('all.setdash')}}" class="btn btn-primary">
                                <i class="fa-regular fa-arrow-alt-circle-left"></i>&nbsp Back
                            </a>
                        </div>


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
<!--
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong> -->
                                <div>
                                           <script>
                                                        Swal.fire(
                                                            'Record Deleted Successfully!',
                                                            'You clicked the button!',
                                                            'delete'
                                            );
                                            </script>

                                </div>
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








                        <!-- <div style="margin-left: 25px;">All contact</div> -->


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col"  width="5%">SL</th>
                                <th scope="col"  width="20%">Address</th>
                                <th scope="col"  width="20%">Phone</th>
                                <th scope="col"  width="20%">Email</th>
                                <th scope="col"  width="20%">Created At</th>
                                <th scope="col"  width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($contacts as $contact)
        <tr>
        <th scope="row">{{$contacts->firstitem()+$loop->index}}</th>
                  
                    <td>{{$contact->address}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                  <td>{{$contact->created_at}}</td>
                    <td><a href="{{url('/contact/edit/'.$contact->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('contact/delete/'. $contact->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$contacts->links()}}

                    </div>

                </div>






            </div>





        </div>



    </div>


    </x-app-layout>
