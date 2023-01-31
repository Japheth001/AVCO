<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Edit Categories</b>


                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1195px; margin-top:-45px;" class="btn btn-primary"> <a href="{{route('view.newcat')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>



        </h2>


    </x-slot>

    

    <div class="py-12">

        <div class="container" style="margin-left:250px">
                 

            <div class ="col-md-8">
                    <div class ="card">
                        <div class= "card-header">Add Category</div>

                            <div class="card-body"> 

                            <form action="{{url('newcat/add/')}}" method="post" enctype="multipart/form-data">
                                    @csrf    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class = "form-control"></>
                                                @error('name')<small class="text-danger">{{$message}}</small>@enderror
                                        </div>


                                        <div class="col-md-6 mb-3">
                                                <label>Slug</label>
                                                <input type="text" name="slug" class = "form-control"></>
                                                @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                                        </div>



                                        <div class="col-md-12 mb-3">
                                                <label>Description</label>
                                                <textarea name = "description" class = "form-control" rows="2"></textarea>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                                <label>Image</label>
                                                <input type="file" name="image" class = "form-control"></>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                                <label>Status</label><br>
                                                <input type="checkbox" name="status" class = "form-control"></>
                                        </div>

                                        <div class="col-md-12">
                                                <h4>SEO Tags</h4>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                <label>Meta Title</label>
                                                <input type="text" name="meta_title" class = "form-control"></>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                                <label>Meta Keyword</label>
                                                <input type="text" name="meta_keyword" class = "form-control"></>
                                        </div>


                                        <div class="col-md-12 mb-3">
                                                <label>Meta Description</label>
                                                <textarea name = "meta_description" class = "form-control" rows="2"></textarea>
                                        </div>

                                       
                                        <div class="col-md-12 mb-3">
                                                <button style="background-color: #9999ff; width:100px" type="submit" 
                                                class="btn btn-primary float-end">Save</button>
                                        </div>
                                        

                                    </div>

                            </form>
                        </div>



            </div> </div> </div> </div></div>


    </x-app-layout>