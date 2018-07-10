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
		<br />
		<br />
		<br />
		
		<!-- main cntent -->
		<?php 
				//para delete
				if(isset($_GET['delid']))
					{
						$did = $_GET['delid'];
						$sql = "DELETE FROM doctor WHERE d_id = ? ";
						$res = $db->deleteRow($sql,[$did]);

						$bimg = $_GET['bimg'];
						if($bimg != '../doc_image/'.'default.png'){
							unlink($bimg);
						}
						//header('Location: doctor.php'$bimg.'.jpg'
					}
			?>


		 <div class="container">
			<a href="newdoctor.php" class="btn btn-success">
				New
				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
			</a>
			<br />
			<br />

		 	 <table id="myTable" class="table table-striped" >  
				<thead>
					<th>DOCTOR NAME</th>
					<th>ADDRESSS</th>
					<th>PHONE</th>
					<th>DOCTOR IMAGE</th>
					<th>DEPARTMENT</th>
					<th><center>ACTION</center></th>
				</thead>
				<tbody>
					<?php 

						$sql = "SELECT * FROM doctor ORDER BY d_name";
						$res = $db->getRows($sql);
						foreach ($res as $row) {
							$did = $row['d_id'];
							$dname = $row['d_name'];
							$daddress = $row['d_address'];
							$dphone = $row['d_phone'];
							$bimg = $row['d_img'];
							$ddepartment = $row['d_department'];
						

					?>
					<tr>
						<td class="align-img"><?php echo $dname; ?></td>
						<td class="align-img"><?php echo $daddress; ?></td>
						<td class="align-img"><?php echo $dphone; ?></td>
						<td class="align-img"><center><img src="<?php echo $bimg; ?>" width="50" height="50"></center></td>
						<td class="align-img"><?php echo $ddepartment; ?></td>
						<td class="align-img">
							<a class = "btn btn-success btn-xs" href="doctorupdate.php?editid=<?php echo $did; ?>">
								Edit
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>
							<a class = "btn btn-danger  btn-xs" href="doctor.php?delid=<?php echo $did; ?>&bimg=<?php echo $bimg; ?>">
								Delete
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>
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