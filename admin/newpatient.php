

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hospital Management System</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>

	<body>

		<br />
		<br />
		<br />
		
	
			

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
						<img src="../img/logo3.png" height="50" width="50"> &nbsp;
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#" style="font-family: Times New Roman; font-size: 30px;">Hospital Management System</a></li>
						</ul>

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li>
								<a href="doctor.php">Doctor Details</a>
							</li>
							<li>
								<a href="nurse.php">Nurse Details</a>
							</li>
							<li class="active">
								<a href="patient.php">Patient Details</a>
							</li>
		
						</ul>
						
						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							<li>
								<?php include_once('../includes/logout.php'); ?>
							</li>
						
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->

		<br />

		
		<!-- main cntent -->
		<div class="container-fluid">

			<div class="col-md-3"></div>
			<div class="col-md-6">
				<a href="patient.php" class="btn btn-success">
					Back
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</a>
			<br />
			<br />

				<?php 

					include_once('../config.php');//database
					$db = new Database();

					if(isset($_POST['newpatient']))
						{
							$pN = $_POST['pN'];
							$pAD = $_POST['pAD'];
							$pP = $_POST['pP'];
							$pS = $_POST['pS'];
							$pB = $_POST['pB'];
							$pA = $_POST['pA'];
							$pBG = $_POST['pBG'];
							//end if else of dc

							$sql = "INSERT INTO patient (p_name, p_address, p_phone, p_sex, p_birthdate, p_age, p_bloodgroup)
									VALUES(?,?,?,?,?,?,?);
								";
							

							if(!$pN){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Name is Required.
										</div>
									';
							}else if(!$pAD){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Address is Required.
										</div>
									';
							}
							else if(!$pP){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Phone Number is Required.
										</div>
									';
							}else if(!$pS){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Sex is Required.
										</div>
									';
							}else if(!$pB){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Birth Date is Required.
										</div>
									';
							}else if(!$pA){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Age is Required.
										</div>
									';
							}else if(!$pBG){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Patient Blood Group is Required.
										</div>
									';
							}
							else{

								

								$res = $db->insertRow($sql, [$pN,$pAD,$pP,$pS,$pB,$pA,$pBG]);
								if($res)
								{
									echo '
										<div class="alert alert-success">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Success!</strong> Save Successfully.
										</div>
									';
								}//end if $ress
							}
						}
				?>

				

				<form action = "" method = "POST" enctype="multipart/form-data">

					   <div class="form-group">
					    <label for="inputdefault">Patient Name:</label>
					    <input class="form-control" id="inputdefault"  name="pN" type="text" placeholder = "Name E.g. Sudip" required>
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Address:</label>
					    <input class="form-control" id="inputdefault" name="pAD" type="text" placeholder = "Address E.g. Kalanki" required>
					  </div>
					  <div class="form-group">
					    <label for="inputdefault">Phone Number:</label>
					    <input class="form-control" id="inputdefault" name="pP" type="text" placeholder = "Phone E.g. 9813614665" required>
					  </div>
					 
						 <div class="form-group">
					    <label for="inputdefault">Sex:</label>
					    <input class="form-control" id="inputdefault" name="pS" type="text" placeholder = "Sex E.g. Male" required>
					  </div>
					  
						 <div class="form-group">
					    <label for="inputdefault">Birth Date:</label>
					    <input class="form-control" id="inputdefault" name="pB" type="text" placeholder = "Birth Of Date E.g. 2051-02-27" required>
					  </div>
					  
						 <div class="form-group">
					    <label for="inputdefault">Age:</label>
					    <input class="form-control" id="inputdefault" name="pA" type="text" placeholder = "Age E.g. 23" required>
					  </div>
					  
						 <div class="form-group">
					    <label for="inputdefault">Blood Group:</label>
					    <input class="form-control" id="inputdefault" name="pBG" type="text" placeholder = "Blood Group E.g. O +ve" required>
					  </div>
					    

					  <button class="btn btn-info" name = "newpatient">
					  		Save
					  		<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
					  </button>
				</form>	
			</div>
			<div class="col-md-3"></div>
		</div>
		<!-- main cntent -->



 		<script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="../bootstrap/js/dataTables.js"></script>
 		<script src="../bootstrap/js/dataTables2.js"></script>
 		<script src="../bootstrap/js/bootstrap.js"></script>

	</body>
</html>
