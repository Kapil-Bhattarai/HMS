<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hospital Management System</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>



	<body style="background:url(../img/index1.jpg);background-size: cover;background-position-y: -174px;">

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="img/logo3.png" height="50" width="50"> &nbsp;
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#" style="font-family: Times New Roman; font-size: 30px;">Hospital Management System</a></li>
						</ul>

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							<li>
								<a href="login.php">
									Login
									<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
								</a>
							</li>

							<li>
								<?php include_once('goto-registration.php'); ?>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->
		<div class="row">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class=""></li>
					<li data-target="#carousel-id" data-slide-to="3" class=""></li>
					<li data-target="#carousel-id" data-slide-to="4" class=""></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<center>
						<img src="img/image1.jpg" style="height: 700px; width: 100%;">
						</center>
						<div class="container">
							<div class="carousel-caption">
								<h1>Hospital </h1>
								<p></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/image2.jpg" style="height: 700px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>#Summer</h1>
								<p></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/image3.jpg" style="height: 700px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>#Summer</h1>
								<p></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/image4.jpg" style="height: 700px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>#Summer</h1>
								<p>Its More Fun in the Palompon</p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/image5.jpg" style="height: 700px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>Kalangaman Island.</h1>
								<p>Envisioning a self sustaining and ecologically balanced Palompon for quality of life.</p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<br />
		<div class="row container-fluid">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Vision</center></h3>
					</div>
					<div class="panel-body">
						 <p> GLOBAL HEALTHCARE, ENABLED BY TECHNOLOGY, DELIVERED LOCALLY </p>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Mission</center></h3>
					</div>
					<div class="panel-body">
						<p>Many Hospitals in Kathmandu currently use a manual system for the management and maintenance 
						of critical information. The current system requires numerous paper forms, with data stores 
						spread throughout the hospital management infrastructure. Often information is incomplete, 
						or does not follow management standards. Our project is concerned with overcoming the persisting 
						problems about the Hospital Management system. </p>

 
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Contact Us</center></h3>
					</div>
					<div class="panel-body">
						<p>Kalanki - Nepal
						Hospital Management System
						email : hospital@gmail.com
						mobile : +23234</p>
					</div>
				</div>
			</div>

			
		</div>
 		
 		<p>
 			<center>
 			
 			</center>
 		</p>
		
		<footer style="background-color: white;">
			<center>
				&copy; All rights reserved
			</center>
		</footer>

 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>

	</body>
</html>