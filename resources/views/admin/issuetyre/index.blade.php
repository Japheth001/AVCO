<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Issued Tyres</b>

  




                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('tyre.add2')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                


<!-- Modal -->
<div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register Tyre</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >

      <div class ="card">




                    <div class="card-body">
                    <form action="{{route('tyre.add')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Front|Back</label>
                                            <input type="text" class="form-control"  name="position" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('front_or_back_tyre')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                            <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Serial No</label>
                                            <input type="text" class="form-control"  name="tyre_serial" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('tyre_serial')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



<!--------------------------------------------------------------------------------------------------------->                     <div class="form-group">
<div class="form-group">
                                            <label for="exampleInputEmail1">Size</label>
                                            <input type="text" class="form-control"  name="size" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">


                                            </div>

                            @error('size')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



<!--------------------------------------------------------------------------------------------------------->
                                    <label for="exampleInputEmail1" style="font-size:16px">Manufacture</label>
                                            <input type="text" class="form-control"  name="manufacturer" id="exampleInputEmail1"
                                             aria-describedby="emailHelp">


                                            </div>

                            @error('manufacturer')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

<!--------------------------------------------------------------------------------------------------------->

                            <div class="form-group">
                                            <label for="exampleInputEmail1" style="font-size:16px">Status</label>

                                            <div class="custom-selects" style="width: 200px; font-size: 12.5px;">
                                                  <select name="status" size="1">
                                                          <option value="Yet Issued">Yet Issued</option>
                                                          <option value="Issued">Issued</option>
                                                          <option value="Defective">Defective</option>

                                                  </select>
						                      </div>

                                            </div>


                            @error('status')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


<br>


<!--------------------------------------------------------------------------------------------------------->

                    <div style="margin-left:160px">
                    <button style="background-color: #9999ff; width:100px; " type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" style="background-color: #9999ff; width:100px; margin-left:30px" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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

    <script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                <th scope="col">Vehicle ID</th>

                                
                                
                                
                                <th scope="col">Status</th>
                                <th scope="col">Issued To</th>
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
                    <td>{{$tyre->numberplate_id}}</td>
                    
                    <td>{{$tyre->status}}</td>
                    <td>{{$tyre->issue_to}}</td>
                    <td>{{$tyre->created_at}}</td>
                    <td><a href="{{url('tyres/editissue/'.$tyre->id)}}"<span style="width:70px" class="btn btn-info">Edit</span></td>
                    <!-- <td><a href="{{url('tyre/delete/'. $tyre->id)}}"<span class="btn btn-danger">Delete</span></td> -->
                    <td><a href="{{url('tyre/manage/'. $tyre->id)}}"<span class="btn btn-danger">Issue</span></td>
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









        <br>

      <!--<td><img src="{{asset('image/gif/gif Lorry.gif')}}"class="img-responsive" alt="" style="width:150px; height:58px; margin-left:620px"</td>
-->


    </div>
</x-app-layout>
