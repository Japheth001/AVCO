<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Product quantity history</b>
            <!-- Button trigger modal -->
            <div>
                <button type="button" style="background-color: #6666ff; margin-left: 1195px; margin-top:-65px;" class="btn btn-primary"> <a href="{{route('product.usage.new', ["id"=>1])}}"/>
                <i class="fa-regular fa-square-plus"/></i></a>
                </button>
            </div>
        </h2>
    </x-slot>
    <script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{asset('forms/cssf.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
    <div class="py-14" id="grad1" style="background-color:white;">
        <div class="container">
            <div class ="row">
                <div class ="col-md-14">
                    <div class ="card"> 
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class= "card-header">`{{'$product->name'}}` usage</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Vehicle number</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Date</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productQuantityUpdates as $product)
                                    <tr>
                                        <th scope="row">{{$loop->index}}</th>
                                        <td>{{$product->vehicleNumber}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->userName}}</td>
                                        <td>{{$product->created_at->format('d-m-Y')}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


                    </div>
            </div>
        </div>
    </div>
    </div>

    </x-app-layout>