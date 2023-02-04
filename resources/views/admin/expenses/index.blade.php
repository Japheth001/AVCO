<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b> Expense</b>


                       <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-75px;" class="btn btn-primary"> <a href="{{route('all.tripsheets')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>

        </h2>


    </x-slot>

    <!Doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>File Expense</title>
            <link rel="stylesheet" href="{{asset('forme/style.css')}}">

        </head>

        <body>
            <section>
                <div class="imgBx">
                    <img src="{{asset('forme/images/art3.jpg')}}">
                </div>

                <div class="contentBx">
                    <div class="formBx">
                        <h2>File Expense</h2>

                        <form action="{{url('/expense/update/'.$expenses->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="inputBx">
                                <span>Date</span>
                                <input name="expensedate" type="date" class="txtbox" placeholder="Date"/>
                            </div>

                            <div class="inputBx">
                                <span>Amount</span>
                                <input name="amount" type="text" class="txtbox" placeholder="Amount"/>
                            </div>

                            <div class="inputBx">
                                <span>Location</span>
                                <input name="location" type="text" class="txtbox" placeholder="Location"/>
                            </div>

                            <div class="inputBx">
                                <span>Authority</span>
                                <input name="authority" type="text" class="txtbox" placeholder="Authority"/>
                            </div>

                            <div class="inputBx">
                                <span></span>
                                <input type="submit"></button>
                            </div>



                        </form>
                    </div>

                </div>
            </section>
        </body>

    </html>


    </x-app-layout>
