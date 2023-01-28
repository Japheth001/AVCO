
<!doctype html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<link rel="stylesheet" href="asset{{('backend/assets/font-awesome/css/font-awesome.min')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"/>
<meta charset="utf-8">
<title>Sidebar Dashboard Template</title>
</head>

<style type="text/css">

	
	
	body{
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		height: 400px;
	}
	header{
		position: fixed;
		background: #10E549;
		padding: 20px;
		width: 100%;
		height: 30px;
	}
	.left_area h3{
		color: #fff;
		margin: 0;
		text-transform: uppercase;
		font-size: 22px;
		font-weight: 900;
	}
	.left_area span{
		color: aqua;
	}
	.right_area_mes{
		float: right;
		margin-top: -30px;
		margin-right: 40px
		
	}
	.logout-btn{
		padding: 5x;
		background:#080349;
		text-decoration: none;
		float: right;
		margin-top: -30px;
		margin-right: 40px;
		border-radius: 2px;
		font-size: 15px;
		font-weight: 600;
		color: #fff;
		transition: 0.5s;
		transition-property: background;
	}
	.logout-btn:hover{
		background: #14ECCE;
	}
	.sidebar{
		background: #080349;
		margin-top: 70px;
		padding-top: 30px;
		position: fixed;
		left: 0px;
		width: 250px;
		height: 70px%;
		transition: 0.5s;
		transition-property: left;
		
	}
	.sidebar .profile-image{
		width: 100px;
		height: 100px;
		border-radius: 100px;
		margin-top: 10px;
		
	}
	.sidebar h4{
		color: #ccc;
		margin-top: 0px;
		margin-bottom: 20px;
	}
	.sidebar a{
		color: #fff;
		display: block;
		width: 100%;
		line-height: 60px;
		text-decoration: none; 
		padding-left: 40px;
		box-sizing: border-box;
		transition: 0.5s;
		transition-property: background;
		
	}
	.sidebar a:hover{
		background: #10ED83;
		
	}
	.sidebar i{
		padding-right: 10px;
	}
	label #sidebar_btn{
		z-index: 1;
		color: #fff;
		position: fixed;
		cursor: pointer;
		left: 300px;
		font-size: 20px;
		margin: 5px 0;
		transition: 0.5s;
		transition-property: color;
	}
	label #sidebar_btn:hover{
		color: aqua;
		
	}
	#check:checked~.sidebar{
		left: -190px;
	}
	#check:checked~.sidebar a span{
		display: none;
	}
	#check:checked~.sidebar a{
		font-size: 20px;
		margin-left: 170px;
		width: 80px;
		
	}
	.content{
		
		margin-left: 250px;
		background: url(images/818215-beach-wallpaper-for-computer-2560x1600-computer.jpg);
		background-position: center;
		background-size: cover;
		height: 470px;
		transition: 0.5s;
		transition-property: 
	}
	#check:checked~.content{
		margin-left: 60px;
	}
	#check{
		display: none;
	}
</style>


<body>

<input type="checkbox" id="check">
	<!--.....................................Header area start...........................-->
	<header>
	<label for="check"><i class="fa fa-bars" id="sidebar_btn"></i></label>
		<div class="left_area">
			<h3>AVCO <span>ADMIN</span></h3>
		</div>
		
		<div class="right_area_mes">
			<a href="message.php"><span class="glyphicon glyphicon-envelope">&nbsp;<span class="badge bg-green">0</span></span></a>
		</div>
		
		
		<div class="right_area">
			<a href="logout.php" class="logout-btn">Logout</a>
		</div>
		<h3 style="color: red; margin-left: 500px;">WELCOME TO ADMIN PANEL</h3>
	</header>
	<!--.....................................Header area end.............................-->
	
	<!-----------------------------Sidebar Start...........................................-->
	<div class="sidebar">
		<center>
		
			
					
				
			
			
			
				
		</center>
		<a href="dashboard_adfinal.php"><i class="fa fa-desktop"><span>DashBoard</span></i></a>
			<a href="{{route('all.tyredash')}}"><i class="fa fa-picture-o"><span>Profile</span></i></a>
			<a href="{{route('all.brands')}}"><i class="fa fa-table"><span>Manage Assets</span></i></a>
			<a href="mantain_dash.php"><i class="fa fa-th"><span>Maintenances</span></i></a>
			<a href="assets_chart.php"><i class="fa fa-info-circle"><span>Chart Reports</span></i></a>
			<a href="employeeinfo.php"><i class="fa fa-info"><span>Employees Info</span></i></a>


            <a href="mantain_dash.php"><i class="fa fa-th"><span>Maintenances</span></i></a>
			<a href="assets_chart.php"><i class="fa fa-info-circle"><span>Chart Reports</span></i></a>
			<a href="employeeinfo.php"><i class="fa fa-info"><span>Employees Info</span></i></a>
			
	</div>
	<!-----------------------------Sidebar Ends...........................................-->
	
	<div class="content" style=" margin-top: -70px;">
			
	
	<h2 style="font-size: 30; color: black; text-align: center; margin-top: -80px; margin-top: 70px;">WELCOME TO ADMIN PANEL</h2>

		


<div class="container admin_number" style="background-color: #36a71a; width: 200px; height: 115px; margin-left: 25px; margin-top: 100px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total  Admins</div>
<div>



</div>
</div>



<div class="container admin_number" style="background-color: #ce7dc0; width: 200px; height: 115px; margin-left: 300px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Employees</div>
<div>





</div>
</div>



<div class="container admin_number" style="background-color: #1aff1a; width: 200px; height: 115px; margin-left: 580px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Assets </div>
<div>






</div>
</div>



<div class="container admin_number" style="background-color: #1aff66; width: 200px; height: 115px; margin-left: 850px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Issued Assets </div>
<div>




</div>
</div>

<br>



<div class="container admin_number" style="background-color: #00ff80; width: 200px; height: 100px; margin-left: 850px; margin-top: -7px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Expired Assets </div>
<div>





</div>
</div>
<br>


<div class="container admin_number" style="background-color:  #ff471a; width: 200px; height: 115px; margin-left: 850px; margin-bottom: 100px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Returned Assets </div>
<div>






</div>
</div>


	</div>
	











</body>

	
</html>