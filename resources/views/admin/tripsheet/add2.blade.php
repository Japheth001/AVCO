


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('colorlib-wizard-1/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('colorlib-wizard-1/css/style.css')}}">
	</head>
	<body>
		<div class="wrapper">

            <form id="wizard" action="{{route('tripsheets.add')}}" method="post">
                @csrf
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('colorlib-wizard-1/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Trip Information</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="no" placeholder="No" novalidate/>
								</div>
								<div class="form-holder">
                                <input type="text" name="kmsbf" placeholder="KMS Before" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <label for="Date">Start_Date:</label>
                                    <input type="date" name="startdate"  required novalidate/>
								</div>
								<div class="form-holder">
                                    <label for="Date">End_Date:</label>
                                    <input type="date" name="enddate"  required novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="tripdays" placeholder="Trip Days" required novalidate/>
								</div>

                                <div class="form-holder">
                                    <input type="text" name="truckno" placeholder="Truck No" required novalidate/>
								</div>

							</div>

                            <div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="trailerno" placeholder="Trailer No" novalidate/>
								</div>

                                <div class="form-holder">
                                    <input type="text" name="driver" placeholder="Driver" required novalidate/>
								</div>


							</div>

                            <div class="form-row">

                                <div class="form-holder">
                                    <input type="text" name="turnboy" placeholder="Turnboy" novalidate/>
								</div>

							</div>


						</div>
					</div>
                </section>


                <!-- SECTION 2 -->

                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('colorlib-wizard-1/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Going Income Record</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="gofrom" placeholder="From" required novalidate/>
								</div>
								<div class="form-holder">
                                     <input type="text" name="goto" placeholder="To" required novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="gocargodet" placeholder="Cargo Details" required novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="goamt" placeholder="Amount" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="goinvoice" placeholder="Invoice No" novalidate/>
								</div>

                                <div class="form-holder">
                                    <input type="text" name="gopaydet" placeholder="Payment Details" novalidate/>
								</div>

							</div>

                            <div class="form-row">
								<div class="form-holder">
                                     <input type="text" name="goreceipt" placeholder="Receipt No" novalidate/>
								</div>


							</div>


						</div>
					</div>
                </section>


                 <!-- SECTION 3 -->

                 <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('colorlib-wizard-1/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>1st Return Income Record </h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
                                     <input type="text" name="returnfrom" placeholder="From" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="returnto" placeholder="To" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="cargodet" placeholder="Cargo Details" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="amt" placeholder="Amount" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="invo" placeholder="Invoice No" novalidate/>
								</div>

                                <div class="form-holder">
                                    <input type="text" name="paymentdet" placeholder="Payment Details" novalidate/>
								</div>

							</div>

                            <div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="receiptno" placeholder="Receipt No" novalidate/>
								</div>


							</div>


						</div>
					</div>
                </section>




                <!-- SECTION 4 -->

                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('colorlib-wizard-1/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>2nd Return Income Record</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="returnfrom2" placeholder="From" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="returnto2" placeholder="To" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="cargodet2" placeholder="Cargo Details" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="amt2" placeholder="Amount" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="invo2" placeholder="Invoice No" novalidate/>
								</div>

                                <div class="form-holder">
                                    <input type="text" name="paymentdet2" placeholder="Payment Details" novalidate/>
								</div>

							</div>

                            <div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="receiptno2" placeholder="Receipt No" novalidate/>
								</div>


							</div>


						</div>
					</div>
                </section>



                <!-- SECTION 5 -->

                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('colorlib-wizard-1/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Diesel Record Fuel Allocation</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="fuelallocfrom" placeholder="From" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="fuelallocto" placeholder="To" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="fuelallockms" placeholder="Kms" novalidate/>
								</div>
								<div class="form-holder">
                                <input type="text" name="fuelallocratio" placeholder="Ratio" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="fuelalloclitres" placeholder="Litres" novalidate/>
								</div>


							</div>


						</div>
					</div>
                </section>


                  <!-- SECTION 6 -->

                  <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="{{asset('colorlib-wizard-1/images/form-wizard-1.jpg')}}" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Fuel Supplied</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
                                    <label>Fuel Supply Date</label>
                                    <input type="date" name="fuelsupdate" placeholder="Date" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="	fuelsupstation" placeholder="Station" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="	fuelsuplitres" placeholder="Litres" novalidate/>
								</div>
								<div class="form-holder">
                                    <input type="text" name="fuelsupauthority" placeholder="Authority" novalidate/>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
                                    <input type="text" name="	fuelsupbalance" placeholder="Balance" novalidate/>
								</div>


							</div>
                            <input type="submit"  name="make_payment" class="next action-button" value="Submit"/>

						</div>
                        
					</div>

                </section>

                </form>








		<!-- JQUERY -->
		<script src="{{asset('colorlib-wizard-1/js/jquery-3.3.1.min.js')}}"></script>

		<!-- JQUERY STEP -->
		<script src="{{asset('colorlib-wizard-1/js/jquery.steps.js')}}"></script>
		<script src="{{asset('colorlib-wizard-1/js/main.js')}}"></script>
		<!-- Template created and distributed by Colorlib -->
</body>
</html>





