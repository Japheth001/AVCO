<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Add Tyre</b>


                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1195px; margin-top:-35px; height:30px" class="btn btn-primary"> <a href="{{route('new.product')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>



        </h2>


    </x-slot>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Step Form with Progress bar</title>
    <link rel="stylesheet" href="{{asset('multiform/style.css')}}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Form Begins -->
    <!-- <form action="#" class="form"> -->
    <form action="{{route('tyre.add')}}" method="post" class="form">
    @csrf
        <h2 class="text-center">Tyre Registration Form</h2>
        <img src="{{asset('/storage/images/Othergif/progressIcon.jpg')}}" alt="Welcome" class="img-fluid mb-3" style="width:50%; height:18%; margin:auto">
      

        <!-- Form item - Basic -->
        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="firstName">Serial No</label>
                <input type="text" name="tyre_serial" id="tyre_serial" />
            </div>
            <div class="input-group">
                <label for="lastName">Manufacturer</label>
                <input type="text" name="manufacturer" id="manufacturer" />
            </div>
            <div class="input-group">
                <label for="size">Size</label>
                <input type="text" name="size" id="size" />
            </div>
            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>

        <!-- Form item - Contact -->
        <!-- <div class="form-step">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" />
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" />
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="number" name="phone" id="phone" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div> -->

        <!-- Form item - Social -->
        <!-- <div class="form-step">
            <div class="input-group">
                <label for="instagram">Instagram Username</label>
                <input type="text" name="instagram" id="instagram" />
            </div>
            <div class="input-group">
                <label for="text">Twitter Username</label>
                <input type="text" name="twitter" id="twitter" />
            </div>
            <div class="input-group">
                <label for="github">Github Username</label>
                <input type="text" name="github" id="github" />
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div> -->

        <!-- Form item - Password -->
        <div class="form-step">
            <div class="input-group">
                <!-- <label for="password">Front|Back</label>
                <input type="text" name="password" id="password" /> -->

                <!-- <div class="custom-selects" style="width: 200px; font-size: 12.5px;">
                        <select name="front_or_back_tyre" size="1">
                                <option value="Front">Front</option>
                                <option value="Back">Back</option>
                                <option value="All-ways">All-ways</option>

                        </select>
				</div> -->
            <br>
            </div>
            <!-- <div class="input-group">
                <label for="confirmPassword">Status</label>
                <input type="text" name="status" id="status" />
            </div> -->

            <div class="input-group">
                <label for="size">Front|Back|All-ways</label>
                <input type="text" name="front_or_back_tyre" id="size" />
            </div>


             <div class="custom-selects" style="width: 200px; font-size: 12.5px;">
                                                  <select name="status" size="1">
                                                        <option value="Pending">Pending</option>
                                                          <option value="Yet Issued">Yet Issued</option>
                                                          <option value="Issued">Issued</option>
                                                          <option value="Defective">Defective</option>

                                                  </select>
						                                </div>
            
            <div class="btns-group" style="margin-top:20px">
                <a href="#" class="btn btn-prev">Back</a>
                <input type="submit" value="Register" class="btn" />




            </div>
        </div>

        
    </form>


    <!-- Social Credit Links -->
    <!-- <div class="social_media_div">
        <ul class="icons_list">
            <li>
                <a href="https://github.com/rahulrajput83" target="_blank"><i class="fa fa-github"></i></a>
            </li>
            <li>
                <a href="https://instagram.com/rajput_rahul8" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
    </div> -->

    <script src="{{asset('multiform/script.js')}}"></script>
</body>
</html>



</x-app-layout>
