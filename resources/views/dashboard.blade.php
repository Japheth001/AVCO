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
                      <h3 class="text-gray-800 font-semibold mb-3">Products</h3>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Date Created</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Product A</td>
                                  <td>50</td>
                                  <td>In Stock</td>
                                  <td>02/12/2023</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Product B</td>
                                  <td>70</td>
                                  <td>Out of Stock</td>
                                  <td>01/11/2023</td>
                              </tr>
                          </tbody>
                      </table>
                      <button class="btn btn-primary mt-3">View All Products</button>
                  </div>

                  <div class="col-md-6">
                      <h3 class="text-gray-800 font-semibold mb-3">Trips</h3>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">Driver</th>
                                  <th scope="col">Distance</th>
                                  <th scope="col">Vehicle Plate Number</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Driver A</td>
                                  <td>100 km</td>
                                  <td>ABC 123</td>
                              </tr>
                              <tr>
                                  <td>Driver B</td>
                                  <td>200 km</td>
                                  <td>DEF 456</td>
                              </tr>
                          </tbody>
                      </table>
                      <button class="btn btn-primary mt-3">View All Trips</button>
                  </div>
              </div>

<br><br>
<br><br>
              <div class="row">
                <div class="col-12">
                  <h3 class="text-center">Trip sheet summary</h3>
                  <canvas id="driverVsTripStatistics"></canvas>
                </div>
              </div>
              <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
              <script>
              var ctx = document.getElementById('driverVsTripStatistics').getContext('2d');
              var chart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: ['Driver 1', 'Driver 2', 'Driver 3', 'Driver 4'],
                      datasets: [{
                          label: 'Distance (km)',
                          data: [120, 150, 180, 140],
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
