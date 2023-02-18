<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Battery Master</b>


                       <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: pink; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('all.battery')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>

        </h2>


    </x-slot>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('forme/multistep-form-main/index.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="{{asset('forme/multistep-form-main/index.js')}}"></script>
    <title>MultiStep Form</title>
</head>
<body class="bg-dark">
    <!-- <h1 id="title" class="text-white" style="color:red">Battery Master Record</h1> -->
    <h1 id="title" style="color:red">Battery Master Record</h1>
    <div id="form" class="container bg-light">
        <nav class="d-flex justify-content-center btn-group btn-group-sm">
            <button class="btn btn-secondary" onclick="showTab(0)" tabindex="-1">1</button>
            <button class="btn btn-secondary" onclick="showTab(1)" disabled tabindex="-1">2</button>
            <button class="btn btn-secondary" onclick="showTab(2)" disabled tabindex="-1">3</button>
        </nav>

        <form id="multiStepForm" action="{{url('battery/adds/')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="first tab">
                <div class="form-group">
                    <label for="email">Truck No:</label>
                    <input class="form-control" type="text" name="truck_id" id="truck_id">
                </div>
                <div class="form-group">
                    <label for="password">AVCO:</label>
                    <input class="form-control" type="text" name="avco" id="avco">
                </div>

                <div class="form-group">
                    <label for="password">Serial No:</label>
                    <input class="form-control" type="text" name="serial_no" id="serial_no">
                </div>

                <div class="form-group">
                    <label for="password">Make:</label>
                    <input class="form-control" type="text" name="make" id="make">
                </div>
            </div>

            <div class="second tab">
                <div class="form-group">
                    <label for="name">Size:</label>
                    <input class="form-control" type="text" name="size" id="size">
                </div>
                <!-- <div class="form-group">
                    <label for="surname">Status:</label>
                    <input class="form-control" type="text" name="status" id="status">
                </div> -->


                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Status</label>
                                            <div class="custom-selects" class="form-control" style="width: 400px; font-size: 12.5px;">
                                                    <select name="status" size="1">
                                                                <option value="select">Select</option>
                                                                <option value="New">New</option>
                                                                <option value="Old">Old</option>

                                                    </select>
						                    </div>
                            </div>




                <div class="form-group">
                    <label for="surname">Supplier:</label>
                    <input class="form-control" type="text" name="supplier" id="supplier">
                </div>

                <div class="form-group">
                    <label for="surname">Date Purchased:</label>
                    <input class="form-control" type="date" name="date_purchased" id="date_purchased">
                </div>
            </div>




            <div class="third tab">
                 <div class="form-group">
                    <label for="surname">Price:</label>
                    <input class="form-control" type="text" name="price" id="price">
                </div>

                <div class="form-inline" class="form-group">
                        <div class="form-group">
                            <label for="surname">Date Install:</label>
                            <input class="form-control" type="date" name="date_install" id="date_install">
                        </div>

                        <div class="form-group">
                            <label for="surname">Date Verified:</label>
                            <input class="form-control" type="date" name="verified_date" id="verified_date">
                        </div>
                </div>


                <div class="form-group">
                    <label for="surname">Movements:</label>
                    <input class="form-control" type="text" name="movement" id="movement">
                </div>

                <div class="form-group">
                    <label for="surname">Comments:</label>

                    <textarea class="form-control"  id="comments" name="comments" rows="3" cols="50" maxlength="200" placeholder="If any...">

                    </textarea>
                    <!-- <input class="form-control" type="text" name="comments" id="comments"> -->
                </div>

                <!-- <div class="form-group">
                <input class="btn btn-success"  type="submit" value="Submit"></button>
                </div> -->
            </div>

            <div class="d-flex flex-row-reverse">
                <button class="btn btn-primary" type="button" id="nextButton" onclick="nextTab()">Next</button>
                <input class="btn btn-success" id="submitButton" type="submit" value="Submit">
                <button class="btn btn-secondary" type="button" id="prevButton" onclick="prevTab()">Previous</button>
            </div>
        </form>
    </div>
</body>
</html>


</x-app-layout>
