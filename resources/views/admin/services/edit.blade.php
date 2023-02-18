
<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
           <!-- <b>All mantain Records</b> -->
 </x-slot>

    <div class="py-4">

        

                    @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
                    @endif

                        
                </div>






                <div class ="col-md-5" style="margin: auto;">
                    <div class ="card" >
                    

                        <div class= "card-header">
                            

                            <a href="{{route('all.service')}}" class="btn btn-primary">
                                <i class="fa-regular fa-arrow-alt-circle-left"></i>&nbsp Back
                            </a>

                          
                        
                    </div>



                    <div class="card-body">

                    <form action="{{url('service/update/'.$services->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Service Title</label>
                                            <input type="text" class="form-control" value="{{$services->title}}"  name="title" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                            </div>

                            
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                                  

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Service Details</label>
                                            <!-- <textarea id="inputDescriptionEs" class="form-control" name="description" rows="4" required>@isset($data){{$services->description_es}}@else @endIf</textarea> -->
                                           
                                            <textarea rows="4", cols="54" input type="textarea" class="form-control"  name="details" id="exampleInputEmail1" aria-describedby="emailHelp">{{$services->details}}</textarea>

                                            </div>

                            @error('details')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                                           

                         <div id="ButtonCase">
                            <div  class="alignleft">
                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Update</button> 
                            </div>
                            
                            
                            <div class="alignright">
                            <!-- <i a href="{{route('edit.back')}}" class="fa-sharp fa-solid fa-backward fa-2x" ></i> -->
                            <button type="button" style="background-color: #6666ff;" class="btn btn-primary"> <a href="{{route('all.service')}}"/>
                                    <i class="fa-sharp fa-solid fa-backward fa-lg"/></i></a>
                            </button>
                            </div>
                            
                        </div>


                        </form>

                        
 

            <style>
                    .alignleft {
                        float: left;
                    }
                    .alignright {
                        float: right;
                        margin-right: 10px;
                    }
            </style>

                        
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
   
    </x-app-layout>