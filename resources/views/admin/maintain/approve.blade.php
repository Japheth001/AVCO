<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Approve Request</b>
        </h2>



    </x-slot>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Login Form UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section class="main-content">
		<div class="container" style="width:60%">
			<div class="d-none d-sm-none d-md-block">
				<h1 class="text-center text-uppercase"></h1>
				<br>
				<br>
			</div>

			<div class="login-card d-flex  overflow-hidden bg-white">
				<div class="login-message d-none d-sm-none d-md-flex flex-column justify-content-center p-5">
                    <img src="{{asset('/storage/images/Othergif/approvegif.gif')}}" alt="Welcome" class="img-fluid mb-3" style="width:85%">
					<h2></h2>

				</div>
				<div class="login-body" style="margin-left:-70px; width:50%">
					<div class="login-body-wrapper mx-auto">
						<h3 class="text-center text-uppercase mb-3 text-primary" style="margin-left:-400px;">Approve</h3>

						<form action="{{url('mantain/approvenewpost/'.$mantains->id)}}" class="row g-3" method="post">

							@csrf
											<div class="form-group" style="width:80%">
																	<label for="exampleInputEmail1">Select Status</label>
																			<div class="custom-selects" style="width: 200px; font-size: 12.5px;">
																					<select name="status" size="1">
																								<option value="Viewed">Viewed</option>
																								<option value="Wait">Wait</option>
																								<option value="Approved">Approved</option>
																								<option value="Declined">Declined</option>

																					</select>
																	</div>
												</div>

											<div class="form-group" style="width:80%">
														<label for="exampleFormControlTextarea3">Approve Comments</label>
														<textarea class="form-control" name="approvecomments" id="exampleFormControlTextarea3" rows="5" placeholder="..If any"></textarea>
											</div>


									<button type="submit" class="btn btn-primary btn-block btn-lg" style="width:30%;  margin:auto; margin-left:-40px;margin-bottom:15px; height:40px">submit</button>
						</form>

					</div>
				</div>
			</div>
		</div>


	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>



    </x-app-layout>
