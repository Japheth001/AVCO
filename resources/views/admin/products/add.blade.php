<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Add Products</b>

                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1195px; margin-top:-75px;" class="btn btn-primary"> <a href="{{route('all.newcat')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>

        </h2>


    </x-slot>

    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h3>Add Product</h3> -->
                    </div>

                    <div class="card-body">

                    <form action="{{url('product/add/')}}" method="post" enctype="multipart/form-data">
                                    @csrf  

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO Tags</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>

                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image" aria-selected="false">Product Image</a>
                            </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="mb-3">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label>Product Name</label>
                                    <input type="text" name="name" class="form-control"></input>
                                </div>

                                <div class="mb-3">
                                    <label>Product Slug</label>
                                    <input type="text" name="slug" class="form-control"></input>
                                </div>


                                <div class="mb-3">
                                    <label>Brand</label>
                                    <select name="brand" class="form-control">
                                        @foreach ($brands as $brand)
                                        <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label>Small Description</label>
                                    <textarea name="small_description" class="form-control" rows="3"></textarea>
                                </div>


                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>

                                
                            </div>
                            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">

                                <div class="mb-3">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control"></input>
                                </div>
                                
                                <div class="mb-3">
                                    <label>Meta Keyword</label>
                                    <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" class="form-control" rows="3"></textarea>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control"></input>
                                    </div>


                                    <div class="col-md-4">
                                        <label>Trending</label>
                                        <input type="checkbox" name="trending" style="width: 40px; height:40px; margin-top:30px"></input>
                                    </div>


                                    <div class="col-md-4">
                                        <label>Status</label>
                                        <input type="checkbox" name="status" style="width: 40px; height:40px; margin-top:30px"></input>
                                    </div>

                                 
                                </div>
                              
                            </div>

                        <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                                <div class="col-md-4">
                                        <label>Image</label>
                                        <input type="file" multiple name="image" class="form-control"></input>
                                </div>


                                <div>
                                        <button style="background-color: #9999ff; width:100px" type="submit" class="btn btn-primary float-end">Submit</button>
                                </div>
                        </div>
                          

                            </div>

                    </div>
                </form>
                </div>
            </div>
    </div>


    <style>
        html {
    overflow: -moz-scrollbars-vertical; 
    overflow-y: scroll;
}
    </style>


    
    </x-app-layout>