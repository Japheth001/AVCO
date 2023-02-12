<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Retray Tyre</b>


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
    <form action="{{url('tyres/retraypost/'.$tyres->id)}}" method="post" class="form">
    @csrf
        <h2 class="text-center">Retray Tyre</h2><br>
       
        <img src="{{asset('/storage/images/Othergif/retraytyre1.gif')}}" alt="Welcome" class="img-fluid mb-3" style="width:90%; height:28%; margin:auto">
      

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

      

        <!-- Form item - Password -->
        <div class="form-step form-step-active">
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
                <label for="size">Select the Option to Retray Tyre</label>
            
            </div>


             <div class="custom-selects" style="width: 200px; font-size: 12.5px;">
                                                  <select name="status" size="1">
                                                        <option value="select">select</option>
                                                          <option value="to-retray">To-Retray</option>
                                                          <option value="from-retray">From-Retray</option>
                                                      

                                                  </select>
						                                </div>
            
            <div class="btns-group" style="margin-top:20px">
                <a href="{{route('tyre.allretray')}}" class="btn btn-prev">Back</a>
                <input type="submit" value="Retray" class="btn" />




            </div>
        </div>

        
    </form>



    <script src="{{asset('multiform/script.js')}}"></script>
</body>
</html>



</x-app-layout>
