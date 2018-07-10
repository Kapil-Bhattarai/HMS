

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
							<li class="active">
								<a href="doctor.php">Doctor Details</a>
							</li>
							<li>
								<a href="nurse.php">Nurse Details</a>
							</li>
							<li>
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
				<a href="doctor.php" class="btn btn-success">
					Back
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</a>
			<br />
			<br />

				<?php 

					include_once('../config.php');//database
					$db = new Database();

					if(isset($_POST['newdoctor']))
						{
							$dN = $_POST['dN'];
							$dA = $_POST['dA'];
							$dP = $_POST['dP'];
							$dD = $_POST['dD'];
							//end if else of dc

							$sql = "INSERT INTO doctor (d_name, d_address, d_phone, d_img, d_department)
									VALUES(?,?,?,?,?);
								";
							

							if(!$dN){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Doctor Name is Required.
										</div>
									';
							}else if(!$dA){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Doctor Address is Required.
										</div>
									';
							}
							else if(!$dP){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Doctor Phone Number is Required.
										</div>
									';
							}else{

								$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
								// do some checks to make sure the file you have is an image and if you can trust it
								move_uploaded_file($_FILES["bP"]["tmp_name"], "../doc_image/".$new_image_name);
								$new_image_name = '../doc_image/'.$new_image_name;
								//echo $new_image_name;

								if(empty($_FILES["bP"]["tmp_name"])){
									$new_image_name = '../doc_image/'.'default.png'; 
								}

								$res = $db->insertRow($sql, [$dN,$dA,$dP, $new_image_name, $dD]);
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
					    <label for="inputdefault">Doctor Name:</label>
					    <input class="form-control" id="inputdefault"  name="dN" type="text" placeholder = "Name E.g. John" required>
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Address:</label>
					    <input class="form-control" id="inputdefault" name="dA" type="text" placeholder = "Address E.g. Kalanki" required>
					  </div>
					  <div class="form-group">
					    <label for="inputdefault">Phone Number:</label>
					    <input class="form-control" id="inputdefault" name="dP" type="text" placeholder = "Phone E.g. 9813614665" required>
					  </div>
					  <div class="form-group">
				    	  <label for="inputdefault">Doctor Picture:</label>
					      <input class="form-control" id="inputdefault" name="bP" type="file">
					    </div>
						 <div class="form-group">
					    <label for="inputdefault">Department:</label>
					    <input class="form-control" id="inputdefault" name="dD" type="text" placeholder = "Department E.g. IT" required>
					  </div>
					    

					  <button class="btn btn-info" name = "newdoctor">
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
