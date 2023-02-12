<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>New quantity</b>
        </h2>
        <!-- Inline Form -->
        <div class="row" style="width:100%">
            <div class="col-lg-7" style ="margin:auto; margin-top:30px;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">New product quantity</h3></div>
                    <div class="card-body" >
                    @error('description')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    @error('quantity')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    <form action="{{route('product.quantity.save')}}" method="post" enctype="multipart/form-data">
                        @csrf                         
                        <div class ="form-inline">
                            <div class="form-group">
                                <label class="" for="exampleInputEmail2">Quantity</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" name="quantity" placeholder="Enter quantity">
                            </div>                            
                        </div>
                        <br>
                        <div class ="form-inline">
                            <div class="form-group">
                                <label class="" for="exampleInputEmail2">Description</label> &nbsp;&nbsp;
                                <textarea class="form-control" name="description" placeholder="Enter description here." columns="10"></textarea>
                            </div>                            
                        </div>
                        <br>
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


