<Doctype html>
<html>
<head>




</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Add Tripsheet</b>




                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1100px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('new.employee')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
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
                <h2><strong>Sign Up Your User Account</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Bio Information</h2>
                                    <input type="text" name="no" placeholder="No"/>
                                    <input type="text" name="kmsbf" placeholder="KMS Before"/>
                                    <label>Start Date</label>
                                    <input type="date" name="startdate" placeholder="Start Date"/>
                                    <label>End Date</label>
                                    <input type="date" name="enddate" placeholder="End Date"/>

                                    <input type="text" name="tripdays" placeholder="Trip Days"/>
                                    <input type="text" name="truckno" placeholder="Truck No"/>
                                    <input type="text" name="trailerno" placeholder="Trailer No"/>
                                    <input type="text" name="driver" placeholder="Driver"/>
                                    <input type="text" name="	turnboy" placeholder="Turnboy"/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Going Income Record </h2>
                                    <input type="text" name="	gofrom" placeholder="From"/>
                                    <input type="text" name="goto" placeholder="To"/>
                                    <input type="text" name="gocargodet" placeholder="Cargo Details"/>
                                    <input type="text" name="goamt" placeholder="Amount"/>

                                    <input type="text" name="goinvoice" placeholder="Invoice No"/>
                                    <input type="text" name="gopaydet" placeholder="Payment Details"/>
                                    <input type="text" name="	goreceipt" placeholder="Receipt No"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">1st Return Income Record  </h2>
                                    <input type="text" name="returnfrom" placeholder="From"/>
                                    <input type="text" name="returnto" placeholder="To"/>
                                    <input type="text" name="cargodet" placeholder="Cargo Details"/>
                                    <input type="text" name="amt" placeholder="Amount"/>

                                    <input type="text" name="	invo" placeholder="Invoice No"/>
                                    <input type="text" name="paymentdet" placeholder="Payment Details"/>
                                    <input type="text" name="receiptno" placeholder="Receipt No"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title">2nd Return Income Record</h2>
                                    <input type="text" name="returnfrom2" placeholder="From"/>
                                    <input type="text" name="returnto2" placeholder="To"/>
                                    <input type="text" name="cargodet2" placeholder="Cargo Details"/>
                                    <input type="text" name="amt2" placeholder="Amount"/>

                                    <input type="text" name="	invo2" placeholder="Invoice No"/>
                                    <input type="text" name="paymentdet2" placeholder="Payment Details"/>
                                    <input type="text" name="receiptno2" placeholder="Receipt No"/>
                                   
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title">Diesel Record Fuel Allocation</h2>
                                    <input type="text" name="fuelallocfrom" placeholder="From"/>
                                    <input type="text" name="fuelallocto" placeholder="To"/>
                                    <input type="text" name="fuelallockms" placeholder="Kms"/>
                                    <input type="text" name="fuelallocratio" placeholder="Ratio"/>

                                    <input type="text" name="	fuelalloclitres" placeholder="Litres"/>
                                    <input type="text" name="fuelsupdate" placeholder="Date"/>
                                    <input type="text" name="	fuelsupstation" placeholder="Station"/>

                                    <input type="text" name="	fuelsuplitres" placeholder="Litres"/>
                                    <input type="text" name="fuelsupauthority" placeholder="Authority"/>
                                    <input type="text" name="	fuelsupbalance" placeholder="Balance"/>
                                   
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title">Fuel Supplied</h2>
                                    
                                    <input type="text" name="fuelsupdate" placeholder="Date"/>
                                    <input type="text" name="	fuelsupstation" placeholder="Station"/>

                                    <input type="text" name="	fuelsuplitres" placeholder="Litres"/>
                                    <input type="text" name="fuelsupauthority" placeholder="Authority"/>
                                    <input type="text" name="	fuelsupbalance" placeholder="Balance"/>
                                   
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Submit"/>
                            </fieldset>

                            <fieldset>
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
                                            <h5>You Have Successfully Submitted</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
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
