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

		 <!--pagination-->
	    <link rel="stylesheet" href="../bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
	    <script src="../bootstrap/	js/jquery.dataTables2.js"></script>


	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }

		td.align-img {
			line-height: 3 !important;
		}
	</style>

	<body style="background:url(../img/index1.jpg);background-size: cover;background-position-y: -174px;" >


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
							
							<li  class="active">
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
		<br />
		<br />
		<br />
		
	

		 <div class="container">
			<a href="newpatient.php" class="btn btn-success">
				New
				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
			</a>
			<br />
			<br />

		 	 <table id="myTable" class="table table-striped" >  
				<thead>
					<th>PATIENT NAME</th>
					<th>ADDRESSS</th>
					<th>PHONE</th>
					<th>SEX</th>
					<th>BIRTH DATE</th>
					<th>AGE</th>
					<th>BLOOD GROUP</th>
					<th><center>ACTION</center></th>
				</thead>
				<tbody>
					<?php 

						$sql = "SELECT * FROM patient ORDER BY p_name";
						$res = $db->getRows($sql);
						foreach ($res as $row) {
							$pid = $row['p_id'];
							$pname = $row['p_name'];
							$paddress = $row['p_address'];
							$pphone = $row['p_phone'];
							$psex = $row['p_sex'];
							$pbirthdate = $row['p_birthdate'];
							$page = $row['p_age'];
							$pbloodgroup = $row['p_bloodgroup'];
						

					?>
					<tr>
						<td class="align-img"><?php echo $pname; ?></td>
						<td class="align-img"><?php echo $paddress; ?></td>
						<td class="align-img"><?php echo $pphone; ?></td>
						<td class="align-img"><?php echo $psex; ?></td>
						<td class="align-img"><?php echo $pbirthdate; ?></td>
						<td class="align-img"><?php echo $page; ?></td>
						<td class="align-img"><?php echo $pbloodgroup; ?></td>
						<td class="align-img">
							<a class = "btn btn-success btn-xs" href="patientupdate.php?editid=<?php echo $pid; ?>">
								Edit
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>
							<!----<a class = "btn btn-danger  btn-xs" href="patient.php?delid=<?php echo $pid; ?>&bimg=<?php echo $bimg; ?>">
								Delete
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>---->
						</td>
						
					</tr>
					<?php } ?>

				</tbody>
			</table>

		 </div>

			
		<!-- main cntent -->

	</body>
 		<script src="../bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="../bootstrap/js/dataTables.js"></script>
 		<script src="../bootstrap/js/dataTables2.js"></script>
 		<script src="../bootstrap/js/bootstrap.js"></script>
 		    <!--pagination-->
    <link rel="stylesheet" href="../bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
    <script src="../bootstrap/js/jquery.dataTables2.js"></script>


    <script>
//script for pagination
$(document).ready(function(){
    $('#myTable').dataTable();
});
    </script>


</html>



<?php 
$db->Disconnect();
?>