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
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('view.tripsheets')}}"/>
                    <i class="fa-solid fa-bars"/></i></a>
                    </button>
                </div>



        </h2>





    </x-slot>


    <body style="overflow-y: auto;">
   <!-- ✅ load jQuery ✅ -->
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 <script  src="{{asset('forms/navbar.js')}}"></script>
<link href="{{asset('forms/navbar.css')}}" rel="stylesheet">


   <!-- MultiStep Form -->
<div class="container-fluid" id="grad1"  class="carousel slide not-navbar" data-ride="carousel">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Tripsheet Details</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="{{route('tripsheets.add')}}" method="post">
                            @csrf
                            <!-- progressbar -->

                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Guide</strong></li>
                                <li id="personal"><strong>BioInfo</strong></li>
                                <li id="personal"><strong>Going</strong></li>
                                <li id="payment"><strong>Return1</strong></li>
                                <li id="confirm"><strong>Return2</strong></li>
                                <li id="confirm"><strong>Fuel</strong></li>
                                <li id="confirm"><strong>Submit</strong></li>
                            </ul>
                            <!-- fieldsets -->



                            <fieldset id="section1">
                                <div class="form-card" style ="margin-top:-8px" >
                                    <h2 class="fs-title">Guide</h2>
                                    <h5>You need to provide details on fuel, return, & income. If ready doub-click next.</h5>

                                </div>
                                <input type="button" onclick="window.location.href='#section1'" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>


                            <fieldset id="section1">
                                <div class="form-card">
                                    <h4 class="fs-title">Trip Information</h4>

                                    <div class ="form-inline">

                                        <div class="form-group">

                                        <input type="text" name="no" placeholder="No"/>
                                        </div>
                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-group">
                                             <input type="text" name="kmsbf" placeholder="KMS Before"/>
                                        </div>

                                        <div class="form-group ml-2">
                                                <!-- <label>Start Date</label> -->
                                                <div style="display:flex; flex-direction: row; justify-content: center; align-items: center">
                                                    <label for="Date">Start_Date:</label>
                                                    <input type="date" name="startdate"  required/>
                                                </div>
                                                <!-- <input type="date" name="startdate" placeholder="Start Date" required/> -->
                                        </div>

                                        &nbsp;&nbsp;
                                        <div class="form-group">
                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                        <div style="display:flex; flex-direction: row; justify-content: center; align-items: center">
                                                    <label for="Date">End_Date:</label>
                                                    <input type="date" name="enddate"  required/>
                                                </div>
                                            <!-- <label>End Date</label>    -->
                                            <!-- <input type="date" name="enddate" placeholder="End Date" required/> -->
                                        </div>


                                        <div class="form-group ml-2">
                                            <input type="text" name="tripdays" placeholder="Trip Days" required/>
                                        </div>

                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-group">
                                            <input type="text" name="truckno" placeholder="Truck No" required/>
                                        </div>





                                        <div class="form-group ml-2">
                                            <input type="text" name="trailerno" placeholder="Trailer No"/>
                                        </div>

                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-group">
                                            <input type="text" name="driver" placeholder="Driver" required/>
                                        </div>
                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                        <div class="form-group">
                                            <input type="text" name="turnboy" placeholder="Turnboy"/>
                                        </div>

                                </div>







                                    <!-- <input type="text" name="no" placeholder="No"/>
                                    <input type="text" name="kmsbf" placeholder="KMS Before"/>
                                    <label>Start Date</label>
                                    <input type="date" name="startdate" placeholder="Start Date" required/>
                                    <label>End Date</label>
                                    <input type="date" name="enddate" placeholder="End Date" required/> -->

                                    <!-- <input type="text" name="tripdays" placeholder="Trip Days" required/>
                                    <input type="text" name="truckno" placeholder="Truck No" required/> -->
                                    <!-- <input type="text" name="trailerno" placeholder="Trailer No"/>
                                    <input type="text" name="driver" placeholder="Driver" required/> -->
                                    <!-- <input type="text" name="turnboy" placeholder="Turnboy"/> -->


                                </div>
                                <input type="button" onclick="window.location.href='#section1'" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" onclick="window.location.href='#section2'" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset id="section2">
                                <div class="form-card">
                                    <h2 class="fs-title">Going Income Record </h2>
                                    <input type="text" name="gofrom" placeholder="From" required/>
                                    <input type="text" name="goto" placeholder="To" required/>
                                    <input type="text" name="gocargodet" placeholder="Cargo Details" required/>
                                    <input type="text" name="goamt" placeholder="Amount"/>

                                    <input type="text" name="goinvoice" placeholder="Invoice No"/>
                                    <input type="text" name="gopaydet" placeholder="Payment Details"/>
                                    <input type="text" name="goreceipt" placeholder="Receipt No"/>
                                </div>

                                    <input type="button" onclick="window.location.href='#section1'" name="previous" class="previous action-button-previous" value="Previous"/>
                                    <input type="button" onclick="window.location.href='#section3'" name="next" class="next action-button" value="Next Step"/>

                            </fieldset>



                            <fieldset id="section3">
                                <div class="form-card">
                                    <h2 class="fs-title">1st Return Income Record  </h2>
                                    <input type="text" name="returnfrom" placeholder="From"/>
                                    <input type="text" name="returnto" placeholder="To"/>
                                    <input type="text" name="cargodet" placeholder="Cargo Details"/>
                                    <input type="text" name="amt" placeholder="Amount"/>

                                    <input type="text" name="invo" placeholder="Invoice No"/>
                                    <input type="text" name="paymentdet" placeholder="Payment Details"/>
                                    <input type="text" name="receiptno" placeholder="Receipt No"/>
                                </div>

                                <input type="button" onclick="window.location.href='#section2'" name="previous" class="previous action-button-previous" value="Previous"/>

                                <input type="button" onclick="window.location.href='#section4'" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset id="section4">
                                <div class="form-card">

                                    <h2 class="fs-title">2nd Return Income Record</h2>
                                    <input type="text" name="returnfrom2" placeholder="From"/>
                                    <input type="text" name="returnto2" placeholder="To"/>
                                    <input type="text" name="cargodet2" placeholder="Cargo Details"/>
                                    <input type="text" name="amt2" placeholder="Amount"/>

                                    <input type="text" name="invo2" placeholder="Invoice No"/>
                                    <input type="text" name="paymentdet2" placeholder="Payment Details"/>
                                    <input type="text" name="receiptno2" placeholder="Receipt No"/>

                                </div>
                                <input type="button" onclick="window.location.href='#section3'" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" onclick="window.location.href='#section5'" name="make_payment" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset id="section5">
                                <div class="form-card">

                                    <h2 class="fs-title">Diesel Record Fuel Allocation</h2>



                                    <!-- <div class ="form-inline"> -->

                                        <!-- <div class="form-group">
                                            <input type="text" name="fuelallocfrom" placeholder="From"/>
                                        </div>
                                        &nbsp;&nbsp; &nbsp;&nbsp;
                                        <div class="form-group">
                                            <input type="text" name="fuelallocto" placeholder="To"/>
                                        </div> -->

                                        <!-- <div class="form-group ml-2">
                                            <input type="text" name="fuelallockms" placeholder="Kms"/>
                                        </div>

                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-group">
                                            <!-- <label>End Date</label>    -->
                                            <!-- <input type="text" name="fuelallocratio" placeholder="Ratio"/>
                                        </div> -->


                                        <!-- <div class="form-group ml-2">
                                            <input type="text" name="	fuelalloclitres" placeholder="Litres"/>
                                        </div>

                                            &nbsp;&nbsp;
                                        <div class="form-group">
                                            <input type="text" name="fuelsupauthority" placeholder="Authority"/>

                                        </div> -->





                                        <!-- <div class="form-group ml-2">
                                            <input type="text" name="fuelsupstation" placeholder="Station"/>
                                        </div> -->
<!--
                                            &nbsp;&nbsp;  &nbsp;&nbsp;
                                        <div class="form-group">
                                            <input type="text" name="fuelsuplitres" placeholder="Litres"/>
                                        </div> -->
                                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-group">
                                        <label>Fuel Allocation Date</label>
                                            <input type="date" name="fuelsupdate" placeholder="Date"/>
                                        </div> -->

                                <!-- </div> -->



                                    <input type="text" name="fuelallocfrom" placeholder="From"/>
                                    <input type="text" name="fuelallocto" placeholder="To"/>
                                    <input type="text" name="fuelallockms" placeholder="Kms"/>
                                    <input type="text" name="fuelallocratio" placeholder="Ratio"/>

                                    <input type="text" name="	fuelalloclitres" placeholder="Litres"/>
                                    <!-- <label>Fuel Allocation Date</label>
                                    <input type="date" name="fuelsupdate" placeholder="Date"/>
                                    <input type="text" name="fuelsupstation" placeholder="Station"/>

                                    <input type="text" name="fuelsuplitres" placeholder="Litres"/>
                                    <input type="text" name="fuelsupauthority" placeholder="Authority"/> -->
                                    <!-- <input type="text" name="fuelsupbalance" placeholder="Balance"/> -->

                                </div>
                                <input type="button" onclick="window.location.href='#section4'" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" onclick="window.location.href='#section6'" name="make_payment" class="next action-button" value="Next Step"/>
                            </fieldset>

                            <fieldset id="section6">
                                <div class="form-card">

                                    <h2 class="fs-title">Fuel Supplied</h2>
                                    <label>Fuel Supply Date</label>
                                    <input type="date" name="fuelsupdate" placeholder="Date"/>
                                    <input type="text" name="	fuelsupstation" placeholder="Station"/>

                                    <input type="text" name="	fuelsuplitres" placeholder="Litres"/>
                                    <input type="text" name="fuelsupauthority" placeholder="Authority"/>
                                    <input type="text" name="	fuelsupbalance" placeholder="Balance"/>

                                </div>
                                <input type="button" onclick="window.location.href='#section5'" name="previous" class="previous action-button-previous" value="Previous"/>
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
