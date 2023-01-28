
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Multi Images</b>
        </h2>


    </x-slot>

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
            @endif




    <div class="py-12">

        <div class="container">
            <div class ="row">
                <div class ="col-md-8">
                    <div class ="card-group">




                    @foreach($images as $multi)
                        <div class ="card-md-4 mt-1">
                            <div class="card">
                            <!-- <img src="{{URL::asset('/images/multi/'.$multi->image)}}" class="img-responsive" alt="" style="width:200px; height:200px"/> -->
                            <img src="{{URL::asset($multi->image)}}" class="img-responsive" alt="" style="width:200px; height:200px"/>
                        </div>

                        </div>

                    @endforeach

                    <!-- <img src="{{URL::to('/storage/images/multi/'.'avcotruck.jfif')}}" alt="Image" width="300" height="250"/>
                    <img src="{{URL::to('/storage/images/multi/'.'1.7535545916098E+15.jpg')}}" alt="Image" width="300" height="250"/> -->

                    <php?
                    echo asset('storage/file.txt');

                    ?>


                    </div>

                </div>






                <div class ="col-md-4">
                    <div class ="card">
                        <div class= "card-header">Multi Image</div>



                    <div class="card-body">

                         <form action={{route('multi.add')}} method="post" enctype="multipart/form-data">
                                    @csrf


                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Multi Image</label>
                                            <input type="file" class="form-control"  name="image[]" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"  multiple="">


                                            </div>



                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Add</button>
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
    </x-app-layout>
