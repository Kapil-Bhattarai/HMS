<?php 

	include_once('../config.php');//database
	$db = new Database();
?>

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

			

				<form action = "" method = "POST" enctype="multipart/form-data">
						<?php 
							//vie3w patient
							if(isset($_GET['editid']))
								{
									$editid = $_GET['editid'];

									$sql = "SELECT * FROM patient WHERE p_id = ?";
									$res = $db->getRow($sql, [$editid]);
									$pname = $res['p_name'];
									$paddress = $res['p_address'];
									$pphone = $res['p_phone'];
									$psex = $res['p_sex'];
									$pbirthdate =$res['p_birthdate'];
									$page = $res['p_age'];
									$pbloodgroup = $res['p_bloodgroup'];
									
									
							
								
								 }

								 //update doctor

								 if(isset($_POST['patientupdate']))
								 	{
								 		$editid = $_POST['editid'];

								 		$pname = $_POST['pN'];
								 		$paddress = $_POST['pAD'];
								 		$pphone = $_POST['pP'];
										$psex = $_POST['pS'];
										$pbirthdate = $_POST['pB'];
										$page = $_POST['pA'];
										$pbloodgroup = $_POST['pBG'];
										//end if else of dB


								 		


							 			echo '
							 				<div class="alert alert-success">
											  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											  <strong>Success!</strong> Edit Successfully.
											</div>
							 			';
								 	}//end if isset updatepatient
						?>

					   <div class="form-group">
					    <label for="inputdefault">Patient Name:</label>
					    <input class="form-control" id="inputdefault"  name="editid" type="hidden" value ="<?php echo $editid; ?>">
					    <input class="form-control" id="inputdefault"  name="pN" type="text" value ="<?php echo $pname; ?>">
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Address:</label>
					    <input class="form-control" id="inputdefault" name="pAD" type="text" value ="<?php echo $paddress; ?>">
					  </div>
					  <div class="form-group">
					    <label for="inputdefault">Phone:</label>
					    <input class="form-control" id="inputdefault" name="pP" type="text" value ="<?php echo $pphone; ?>">
					  </div>
						 <div class="form-group">
					    <label for="inputdefault">Sex:</label>
					    <input class="form-control" id="inputdefault" name="pS" type="text" value ="<?php echo $psex; ?>">
					  </div>
					   <div class="form-group">
					    <label for="inputdefault">Birth Date:</label>
					    <input class="form-control" id="inputdefault" name="pB" type="text" value ="<?php echo $pbirthdate; ?>">
					  </div>
						 <div class="form-group">
					    <label for="inputdefault">Age:</label>
					    <input class="form-control" id="inputdefault" name="pA" type="text" value ="<?php echo $page; ?>">
					  </div>
					   <div class="form-group">
					    <label for="inputdefault">Blood Group:</label>
					    <input class="form-control" id="inputdefault" name="pBG" type="text" value ="<?php echo $pbloodgroup; ?>">
					  </div>

					  <button class="btn btn-info" name = "patientupdate">
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