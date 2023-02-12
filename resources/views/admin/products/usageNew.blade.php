<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>New usage</b>
        </h2>
        <!-- Inline Form -->
        <div class="row" style="width:100%">
            <div class="col-lg-7" style ="margin:auto; margin-top:30px;">
                <div class="card">
                    <div class= "card-header">
                        <a href="{{route('product.usage.all', ["id"=>$id])}}" class="btn btn-primary">
                            <i class="fa-regular fa-arrow-alt-circle-left"></i>&nbsp Back
                        </a>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">New product usage for `{{$product->name}}`</h3></div>
                    <div class="card-body" >
                    @error('vehicleId')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    @error('quantity')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    @if(session('error'))
                        <p class="alert alert-danger">{{session('error')}}</p>
                    @endif
                    <form action="{{route('product.usage.save')}}" method="post" enctype="multipart/form-data">
                        @csrf                         
                        <div class ="form-inline">
                            <div class="form-group">
                                <label class="" for="exampleInputEmail2">Vehicle</label>&nbsp;&nbsp;&nbsp;&nbsp;
                               <select name="vehicleId" class="form-control" >
                                    <option value="0" disabled selected>Select vehicle</option>
                                    @foreach ($vehicles as $vehicle)
                                        <option value="{{$vehicle->id}}">{{$vehicle->number_plate}}</option>
                                    @endforeach
                               </select>
                                </select>
                            </div>                            
                        </div>
                        <br>
                        <div class ="form-inline">
                            <div class="form-group">
                                <label class="" for="exampleInputEmail2">Quantity</label> &nbsp;&nbsp;
                                <input type="text" class="form-control" name="quantity" placeholder="Enter quantity">
                            </div>                            
                        </div>
                        <br>
                        <div>
                            <div class="form-group">
                                <label class="" for="exampleInputEmail2">Description</label> &nbsp;&nbsp;
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="productId" value="{{$id}}">
                            <button type="submit" class="btn btn-success waves-effect waves-light ml-2" style="background-color: aqua; text-align:center;">Submit</button>
                        </div>
                    </form>

                    </div>
                    <!-- card-body -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
        </div>            
</x-app-layout>


