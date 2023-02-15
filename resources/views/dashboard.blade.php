<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Hi...<b>{{Auth::user()->name}}</b>

          <b style="float: right;">Total Users:
          <span class ="badge badge-danger">{{count($users)}}</span></b>
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                    <h3 class="text-gray-800 font-semibold mb-3">Trips</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Driver</th>
                                <th scope="col">Vehicle Plate Number</th>
                                <th scope="col">Trip days</th>                                
                                <th scope="col">Trip date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($i=1)
                            @foreach($trips as $trip)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{ $trip->driver}}</td>
                                    <td>{{ $trip->truckno}}</td>
                                    <td>{{ $trip->tripdays}}</td>
                                    <td>{{ Carbon\Carbon::parse ($trip->startdate)->format('Y-m-d')}}</td>
                                </tr>
                            @endforeach                              
                        </tbody>
                    </table>
                    <a href="{{route('view.tripsheets')}}" class="btn btn-primary mt-3" >
                        View All Trips
                    </a>
                </div> 
                  <div class="col-lg-6 col-md-10 col-sm-12">
                    <h3 class="text-center">Trip sheet summary</h3>
                    <canvas id="driverVsTripDaysStatistics"></canvas>
                  </div>
                  
              </div>

<br><br>

            <div class="row mx-auto">
                <div class="col-md-6">
                    <h3 class="text-gray-800 font-semibold mb-3">Users</h3>
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
                    <a href="{{route('users.all')}}" class="btn btn-primary mt-3" >
                        View All Users
                    </a>
                    
                </div>    
                <div class="col-md-6">
                    <h3 class="text-gray-800 font-semibold mb-3">Products</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($i=1)
                            @foreach($products as $product)
                                <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{ $product->name}}</td>
                                <td>{{ $product->quantity}}</td>
                                <td>{{ $product->status}}</td>
                                <td>{{ Carbon\Carbon::parse ($product->created_at)->format('Y-m-d')}}</td>
                                </tr>
                            @endforeach  
                        </tbody>
                    </table>
                    <a href="{{route('all.product')}}" class="btn btn-primary mt-3" >
                        View All Products
                    </a>
                </div>          
              </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
              
              
              <script>
                //get data passes from controller
                var drivers = @json($trips->pluck('driver')->toArray());
                var tripDays = @json($trips->pluck('tripdays')->toArray());
                var ctx = document.getElementById('driverVsTripDaysStatistics').getContext('2d');
                
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'bar',
                
                    // The data for our dataset
                    data: {
                        labels: drivers,
                        datasets: [{
                            label: 'Trip Days',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: tripDays,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                          borderWidth: 1
                        }]
                    },
                
                    // Configuration options go here
                    options: {
                        scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero: true
                              }
                          }]
                      }
                    }
                });
              </script>

            </div>
        </div>

        
        </div>
    </div>
</x-app-layout>
