<?php 
	require_once('connection.php');
	$id = $_GET['id'];
	$sql = "SELECT * FROM $tbl_name WHERE (id=$id)";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT</title>
	<?php include('link.php');?>
</head>
<body>
	<div class="container">
		<div class="">

			<div class="col-12">
				<div class="std-btn">
					<!-- <button>Add Student</button> -->
				</div>
			</div>
			<div class="col-12 std-box">
				<div class="col-3">
				</div>
				<!-- <div class="col-6"> -->
					<div class="col-6">
						<div class="std-from">
							<div class="form-title details-title">
							<h1>Student Details</h1>
						</div>
						<div class="">
							<a class="goBack"href="index.php"><i class="fa fa-arrow-left" title="Go Back"></i></a>
						</div>
						<div class="std-detail-img">
							<img class="std-image" src="../assets/img/<?= $row['image_name'];?>"/>
						</div>
						<form class="my-form" method="post" action>
							<div class="log_form">
								<div class="ele">
									<span class="form-label">Name:</span> <span class="form-val form-val-name"><?= $row['name'];?></span>
								</div>
								<div class="ele">
									<span class="form-label">Grade:</span> <span class="form-val form-val-roll"><?= $row['grade'];?></span>
								</div>
								<div class="ele">
									<span class="form-label">Roll:</span> <span class="form-val form-val-roll"><?= $row['roll'];?></span>
								</div>
								<div class="ele">
									<span class="form-label">Address:</span> <span class="form-val form-val-address"><?= $row['address'];?></span>
								</div>
								<div class="ele">
									<span class="form-label">Phone:</span> <span class="form-val form-val-phone">9812367442</span>
								</div>
								<div class="ele">
									<span class="form-label">Email:</span> <span class="form-val form-val-phone"><?= $row['email'];?></span>
								</div>
								<div class="ele">
									<span class="form-label">Parents:</span> <span class="form-val form-val-phone"><?= $row['parents'];?></span>
								</div>
								
								<!-- <div class="form-ele-btn">
									<button type="submit" class="btn_primary form-btn">Go Back</button>
								</div> -->
							</div>
						</form>
						</div>
					</div>
				<div class="col-3">
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>
</body>
</html>