<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>All Categories</b>
        </h2>


    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class ="row">



                <div class ="col-md-8">
                    <div class ="card">
                        <div class= "card-header">Update Category</div>



                    <div class="card-body">

                         <form action={{url('category/update/'.$categories->id)}} method="post">
                                    @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Add Category</label>
                                            <input type="text" class="form-control"  name="category_name" id="exampleInputEmail1"
                                            value="{{$categories->category_name}}" aria-describedby="emailHelp">


                                            </div>

                            @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror



                            <button style="background-color: #9999ff; width:100px" type="submit" 
                            class="btn btn-primary">Update</button>
                        </form>
                        </div>
                         </div>

                    </div>


            </div>





        </div>



    </div>
</x-app-layout>
