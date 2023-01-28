<Doctype html>
<html>
<head>




</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Edit Tripsheet</b>




                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1100px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('view.tripsheets')}}"/>
                    <i class="fa-solid fa-files"/></i></a>
                    </button>
                </div>



        </h2>


    </x-slot>


<body style="overflow-y: auto;">
   <!-- ✅ load jQuery ✅ -->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>


   <!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Update Tripsheet Details</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="{{url('ntripsheet/update/'.$trips->id)}}" method="post">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>BioInfo</strong></li>
                                <li id="personal"><strong>Going</strong></li>
                                <li id="payment"><strong>Return1</strong></li>
                                <li id="confirm"><strong>Return2</strong></li>
                                <li id="confirm"><strong>Fuel</strong></li>
                                <li id="confirm"><strong>Submit</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Bio Information</h2>
                                    <input type="text" name="no" placeholder="No" value="{{$trips->no}}"/>
                                    <input type="text" name="kmsbf" placeholder="KMS Before" value="{{$trips->kmsbf}}"/>
                                    <label>Start Date</label>
                                    <input type="date" name="startdate" placeholder="Start Date" value="{{$trips->startdate}}" required/>
                                    <label>End Date</label>
                                    <input type="date" name="enddate" placeholder="End Date" value="{{$trips->enddate}}" required/>

                                    <input type="text" name="tripdays" placeholder="Trip Days" value="{{$trips->tripdays}}" required/>
                                    <input type="text" name="truckno" placeholder="Truck No" value="{{$trips->truckno}}" required/>
                                    <input type="text" name="trailerno" placeholder="Trailer No" value="{{$trips->trailerno}}"/>
                                    <input type="text" name="driver" placeholder="Driver" value="{{$trips->driver}}" required/>
                                    <input type="text" name="turnboy" placeholder="Turnboy" value="{{$trips->turnboy}}"/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Going Income Record </h2>
                                    <input type="text" name="gofrom" placeholder="From" value="{{$trips->gofrom}}" required/>
                                    <input type="text" name="goto" placeholder="To" value="{{$trips->goto}}" required/>
                                    <input type="text" name="gocargodet" placeholder="Cargo Details" value="{{$trips->gocargodet}}" required/>
                                    <input type="text" name="goamt" placeholder="Amount" value="{{$trips->goamt}}"/>

                                    <input type="text" name="goinvoice" placeholder="Invoice No" value="{{$trips->goinvoice}}"/>
                                    <input type="text" name="gopaydet" placeholder="Payment Details" value="{{$trips->gopaydet}}"/>
                                    <input type="text" name="goreceipt" placeholder="Receipt No" value="{{$trips->goreceipt}}"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">1st Return Income Record  </h2>
                                    <input type="text" name="returnfrom" placeholder="From" value="{{$trips->returnfrom}}"/>
                                    <input type="text" name="returnto" placeholder="To" value="{{$trips->returnto}}"/>
                                    <input type="text" name="cargodet" placeholder="Cargo Details" value="{{$trips->cargodet}}"/>
                                    <input type="text" name="amt" placeholder="Amount" value="{{$trips->amt}}"/>

                                    <input type="text" name="invo" placeholder="Invoice No" value="{{$trips->invo}}"/>
                                    <input type="text" name="paymentdet" placeholder="Payment Details" value="{{$trips->paymentdet}}"/>
                                    <input type="text" name="receiptno" placeholder="Receipt No" value="{{$trips->receiptno}}"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title">2nd Return Income Record</h2>
                                    <input type="text" name="returnfrom2" placeholder="From" value="{{$trips->returnfrom2}}"/>
                                    <input type="text" name="returnto2" placeholder="To" value="{{$trips->returnto2}}"/>
                                    <input type="text" name="cargodet2" placeholder="Cargo Details" value="{{$trips->cargodet2}}"/>
                                    <input type="text" name="amt2" placeholder="Amount" value="{{$trips->amt2}}"/>

                                    <input type="text" name="invo2" placeholder="Invoice No" value="{{$trips->invo2}}"/>
                                    <input type="text" name="paymentdet2" placeholder="Payment Details" value="{{$trips->paymentdet2}}"/>
                                    <input type="text" name="receiptno2" placeholder="Receipt No" value="{{$trips->receiptno2}}"/>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title">Diesel Record Fuel Allocation</h2>
                                    <input type="text" name="fuelallocfrom" placeholder="From" value="{{$trips->fuelallocfrom}}"/>
                                    <input type="text" name="fuelallocto" placeholder="To" value="{{$trips->fuelallocto}}"/>
                                    <input type="text" name="fuelallockms" placeholder="Kms" value="{{$trips->fuelallockms}}"/>
                                    <input type="text" name="fuelallocratio" placeholder="Ratio" value="{{$trips->fuelallocratio}}"/>

                                    <input type="text" name="fuelalloclitres" placeholder="Litres" value="{{$trips->fuelalloclitres}}"/>
                                    <label>Fuel Allocation Date</label>
                                    <input type="date" name="fuelsupdate" placeholder="Date" value="{{$trips->fuelsupdate}}"/>
                                    <input type="text" name="fuelsupstation" placeholder="Station" value="{{$trips->fuelsupstation}}"/>

                                    <input type="text" name="fuelsuplitres" placeholder="Litres" value="{{$trips->fuelsuplitres}}"/>
                                    <input type="text" name="fuelsupauthority" placeholder="Authority" value="{{$trips->fuelsupauthority}}"/>
                                    <input type="text" name="fuelsupbalance" placeholder="Balance" value="{{$trips->fuelsupbalance}}"/>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title">Fuel Supplied</h2>
                                    <label>Fuel Supply Date</label>
                                    <input type="date" name="fuelsupdate" placeholder="Date" value="{{$trips->fuelsupdate}}"/>
                                    <input type="text" name="fuelsupstation" placeholder="Station" value="{{$trips->fuelsupstation}}"/>

                                    <input type="text" name="fuelsuplitres" placeholder="Litres"  value="{{$trips->fuelsuplitres}}"/>
                                    <input type="text" name="fuelsupauthority" placeholder="Authority" value="{{$trips->fuelsupauthority}}"/>
                                    <input type="text" name="fuelsupbalance" placeholder="Balance" value="{{$trips->fuelsupbalance}}"/>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="submit"  name="make_payment" class="next action-button" value="Submit"/>
                            </fieldset>

                            <!-- <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Submited</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</body>


<script  src="{{asset('forms/form.js')}}"></script>

<!-- <script type="text/javascript" src="{{('asset/js/form.js')}}"></script>
<script type="text/javascript" src="assets/form.js"></script> -->

<link href="{{asset('forms/cssf.css')}}" rel="stylesheet">

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

</html>



</x-app-layout>
