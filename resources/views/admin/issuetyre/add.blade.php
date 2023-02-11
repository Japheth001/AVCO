<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Issue Tyre</b>


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
    <link rel="stylesheet" href="{{asset('multistepform/style.css')}}"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Form Begins -->
    <form action="#" class="form">
        <h2 class="text-center">Tyre Registration Form</h2>
        <!-- Credit Link -->
        <!-- <div class="text-center"><a href="https://github.com/rahulrajput83" target="_blank">Created by Rahul Rajput</a></div> -->

        <!-- Progress Bar  -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active" data-title="Basic"></div>
            <div class="progress-step" data-title="Contact"></div>
            <div class="progress-step" data-title="Social"></div>
            <div class="progress-step" data-title="Password"></div>
        </div>

        <!-- Form item - Basic -->
        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" />
            </div>
            <div class="input-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" />
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" />
            </div>
            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>

        <!-- Form item - Contact -->
        <div class="form-step">
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
        </div>

        <!-- Form item - Social -->
        <div class="form-step">
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
        </div>

        <!-- Form item - Password -->
        <div class="form-step">
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword" />
            </div>
            <div class="btns-group">
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

    <script src="{{asset('multistepform/script.js')}}"></script>
</body>
</html>



</x-app-layout>