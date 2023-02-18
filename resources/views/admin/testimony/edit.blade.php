
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
                            

                            <a href="{{route('all.testimonial')}}" class="btn btn-primary">
                                <i class="fa-regular fa-arrow-alt-circle-left"></i>&nbsp Back
                            </a>

                          
                        
                    </div>



                    <div class="card-body">

                    <form action="{{url('testimonial/update/'.$testimonials->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Customer Name</label>
                                            <input type="text" class="form-control" value="{{$testimonials->customer}}"  name="customer" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                            </div>

                            
                            @error('customer')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                                  

                            <div class="form-group">
                                            <label for="exampleInputEmail1">Comments</label>
                                            <!-- <textarea id="inputDescriptionEs" class="form-control" name="description" rows="4" required>@isset($data){{$testimonials->description_es}}@else @endIf</textarea> -->
                                           
                                            <textarea rows="4", cols="54" input type="textarea" class="form-control"  name="comments" id="exampleInputEmail1" 
                                            aria-describedby="emailHelp">{{$testimonials->comments}}</textarea>

                                            </div>

                            @error('comments')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                                           

                         <div id="ButtonCase">
                            <div  class="alignleft">
                            <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary">Update</button> 
                            </div>
                            
                            
                            <div class="alignright">
                            <!-- <i a href="{{route('edit.back')}}" class="fa-sharp fa-solid fa-backward fa-2x" ></i> -->
                            <!-- <button type="button" style="background-color: #6666ff;" class="btn btn-primary"> <a href="{{route('all.testimonial')}}"/>
                                    <i class="fa-sharp fa-solid fa-backward fa-lg"/></i></a>
                            </button> -->
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