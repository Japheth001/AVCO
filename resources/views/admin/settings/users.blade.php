<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>All users</b>
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

            <div class= "card-header">Users</div>
  
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($i=1)
                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{ $user->name}}</td>
                      <td>{{ $user->email}}</td>
                      <td>{{ Carbon\Carbon::parse ($user->created_at)->format('Y-m-d')}}</td>
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