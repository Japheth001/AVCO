<x-app-layout>


<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">

<div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:10px; margin-bottom:-40px" class="btn btn-primary"> <a href="{{route('new.slider')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>
                <br>

    <div class="py-12">


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
                                                                Swal.fire({
                                                                            title: 'Are you sure?',
                                                                            text: "You won't be able to revert this!",
                                                                            icon: 'warning',
                                                                            showCancelButton: true,
                                                                            confirmButtonColor: '#3085d6',
                                                                            cancelButtonColor: '#d33',
                                                                            confirmButtonText: 'Yes, delete it!'
                                                                            }).then((result) => {
                                                                            if (result.isConfirmed) {
                                                                                Swal.fire(
                                                                                'Deleted!',
                                                                                'Your file has been deleted.',
                                                                                'success'
                                                                                )
                                                                            }
                                                                            })
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








                        <div class= "card-header">All slider</div>


                        <table class="table">
                                <thead>
                                <tr>
                                <th scope="col"  width="5%">SL</th>
                                <th scope="col"  width="10%">Slider Title</th>
                                <th scope="col"  width="50%">Description</th>
                                <th scope="col"  width="10%">Image</th>
                                <th scope="col"  width="15%">Created At</th>
                                <th scope="col"  width="10%">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tbody>
        <!--@php($i=1)-->
        @foreach($sliders as $slider)
        <tr>
        <th scope="row">{{$sliders->firstitem()+$loop->index}}</th>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->description}}</td>
                    <!-- <td><img src="{{asset($slider->slider_image)}}"class="img-responsive" alt="" style="width:70px; height:50px"</td> -->
                    <!-- <td><img src="{{URL::asset('/images/slider/'.$slider->slider_name)}}"> -->
                    <td><img src="{{URL::asset('storage/'.$slider->image)}}" class="img-responsive" alt="" style="width:50px; height:50px"/></td>
                    <td>{{$slider->created_at}}</td>
                    <td><a href="{{url('/slider/edit/'.$slider->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <td><a href="{{url('slider/delete/'. $slider->id)}}"<span class="btn btn-danger">Delete</span></td>
        </tr>
        @endforeach
                                </tbody>
                        </table>

        {{$sliders->links()}}

                    </div>

                </div>






            </div>





        </div>



    </div>


    </x-app-layout>
