<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>All Products</b>

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
                        <h3>All Products</h3>
                    </div>
                </div>
            </div>
    </div>


    
    </x-app-layout>