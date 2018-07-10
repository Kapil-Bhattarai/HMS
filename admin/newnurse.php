

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
							<li class="active">
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
				<a href="nurse.php" class="btn btn-success">
					Back
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</a>
			<br />
			<br />

				<?php 

					include_once('../config.php');//database
					$db = new Database();

					if(isset($_POST['newnurse']))
						{
							$nN = $_POST['nN'];
							$nA = $_POST['nA'];
							$nP = $_POST['nP'];
							$nS = $_POST['nS'];
							//end if else of nS

							$sql = "INSERT INTO nurse (n_name, n_address, n_phone, n_img, n_shift)
									VALUES(?,?,?,?,?);
								";
							

							if(!$nN){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Nurse Name is Required.
										</div>
									';
							}else if(!$nA){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Nurse Address is Required.
										</div>
									';
							}
							else if(!$nP){
								echo '
										<div class="alert alert-danger">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										  <strong>Error!</strong> Nurse Phone Number is Required.
										</div>
									';
							}else{

								$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
								// do some checks to make sure the file you have is an image and if you can trust it
								move_uploaded_file($_FILES["bP"]["tmp_name"], "../nor_image/".$new_image_name);
								$new_image_name = '../nor_image/'.$new_image_name;
								//echo $new_image_name;

								if(empty($_FILES["bP"]["tmp_name"])){
									$new_image_name = '../nor_image/'.'default.png'; 
								}

								$res = $db->insertRow($sql, [$nN,$nA,$nP, $new_image_name, $nS]);
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



				<form action ="" method = "POST" enctype="multipart/form-data">

					   <div class="form-group">
					    <label for="inputdefault">Nurse Name:</label>
					    <input class="form-control" id="inputdefault"  name="nN" type="text" placeholder = "Name E.g. Durga" required>
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Address:</label>
					    <input class="form-control" id="inputdefault" name="nA" type="text" placeholder = "Address E.g. Patan" required>
					  </div>
					  <div class="form-group">
					    <label for="inputdefault">Phone Number:</label>
					    <input class="form-control" id="inputdefault" name="nP" type="text" placeholder = "Phone E.g. 9813234567" required>
					  </div>
					  <div class="form-group">
				    	  <label for="inputdefault">Nurse Picture:</label>
					      <input class="form-control" id="inputdefault" name="bP" type="file">
					    </div>
						 <div class="form-group">
					    <label for="inputdefault">Shift:</label>
					    <input class="form-control" id="inputdefault" name="nS" type="text" placeholder = "Shift E.g. Day or Night" required>
					  </div>
					    

					  <button class="btn btn-info" name = "newnurse">
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
