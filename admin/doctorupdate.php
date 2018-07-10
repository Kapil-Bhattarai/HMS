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

			

				<form action = "" method = "POST" enctype="multipart/form-data">
						<?php 
							//vie3w doctor
							if(isset($_GET['editid']))
								{
									$editid = $_GET['editid'];

									$sql = "SELECT * FROM doctor WHERE d_id = ?";
									$res = $db->getRow($sql, [$editid]);
									$dname =  $res['d_name'];
									$daddress =  $res['d_address'];
									$dphone =  $res['d_phone'];
									$getoldbimg = $res['d_img'];
									$ddepartment =  $res['d_department'];
								
								 }

								 //update doctor

								 if(isset($_POST['doctorupdate']))
								 	{
								 		$editid = $_POST['editid'];

								 		$dname = $_POST['dN'];
								 		$daddress = $_POST['dA'];
								 		$dphone = $_POST['dP'];
								 		$oldbimg = $_POST['oldbimg'];
										$ddepartment = $_POST['dD'];
										//end if else of dD


								 		//select old photo to delete in folder
								 		// echo print_r($bimg);


										$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
										// do some checks to make sure the file you have is an image and if you can trust it
										move_uploaded_file($_FILES["bimg"]["tmp_name"], "../doc_image/".$new_image_name);
										$new_image_name = '../doc_image/'.$new_image_name;

										if(empty($_FILES["bimg"]["tmp_name"])){
											$sql = "UPDATE doctor SET d_name = ?, d_address = ?, d_phone = ?, d_department = ? WHERE d_id = ?";
								 			$res = $db->updateRow($sql, [$dname, $daddress,$dphone, $ddepartment, $editid]);
										}else{
								 			$sql = "UPDATE doctor SET d_name = ?, d_address = ?, d_phone = ?, d_img = ?, d_department = ? WHERE d_id = ?";
								 			$res = $db->updateRow($sql, [$dname, $daddress,$dphone,$new_image_name, $ddepartment, $editid]);
								 			if($oldbimg != '../doc_image/default.png'){
								 				unlink($oldbimg);
								 			}
										}


							 			echo '
							 				<div class="alert alert-success">
											  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											  <strong>Success!</strong> Edit Successfully.
											</div>
							 			';
								 	}//end if isset updatedoctor
						?>

					   <div class="form-group">
					    <label for="inputdefault">Doctor Name:</label>
					    <input class="form-control" id="inputdefault"  name="editid" type="hidden" value ="<?php echo $editid; ?>">
					    <input class="form-control" id="inputdefault"  name="dN" type="text" value ="<?php echo $dname; ?>">
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Address:</label>
					    <input class="form-control" id="inputdefault" name="dA" type="text" value ="<?php echo $daddress; ?>">
					  </div>
					  <div class="form-group">
					    <label for="inputdefault">Phone:</label>
					    <input class="form-control" id="inputdefault" name="dP" type="text" value ="<?php echo $dphone; ?>">
					  </div>

					 
					  <input type="hidden" name="oldbimg" value="<?php echo $getoldbimg; ?>">

					   <div class="form-group">
				    	  <label for="inputdefault">Doctor Picture:</label>
					      <input class="form-control" id="inputdefault" name="bimg" type="file">
					    </div>
						 <div class="form-group">
					    <label for="inputdefault">Department:</label>
					    <input class="form-control" id="inputdefault" name="dD" type="text" value ="<?php echo $ddepartment; ?>">
					  </div>
			

					  <button class="btn btn-info" name = "doctorupdate">
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