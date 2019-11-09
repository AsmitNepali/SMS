<?php 
	require_once('connection.php');
	$id = $_GET['id'];
	$sql = "SELECT * FROM $tbl_name WHERE (id=$id)";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<title>EDIT|STUDENT</title>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/registration.css">	
	<link rel="stylesheet" type="text/css" href="../assets/css/grid.css">	
</head>
<body>
	<div class="heading"><h2>Edit Your Student</h2></div>
	<span id="error_msg"><?php if(isset($_GET['error_msg'])) echo "Error: ".$_GET['error_msg'];?></span>
	<form class="my-form" method="post" action="../action/update.php" enctype="multipart/form-data">
		<div class="log_form">
			<input type="hidden" name="id" value="<?= $row['id'];?>">
			<input type="hidden" name="stdPhoto" value="<?= $row['image_name'];?>">
			<div class="from_ele">
				<input type="text" name="name" class="form-control" placeholder="Enter your full name" value="<?= $row['name'] ;?>" />
			</div>
			<div class="from_ele">
				<input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?= $row['email'] ;?>"/>
			</div>
			<div class="from_ele">
				<input type="text" name="grade" class="form-control" placeholder="Enter your grade" value="<?= $row['grade'] ;?>" />				
			</div>
			<div class="from_ele">
				<input type="text" name="roll" class="form-control" placeholder="Enter your roll" value="<?= $row['roll'] ;?>" />
			</div>
			<div class="from_ele">
				<input type="text" name="address" class="form-control" placeholder="Enter your address" value="<?= $row['address'] ;?>" />
			</div>
			<div class="from_ele">
				<input type="text" name="phone" class="form-control" placeholder="Enter your phone" value="<?= $row['phone'] ;?>"/>
			</div>
			<div class="from_ele">
				<input type="text" name="parents" class="form-control" placeholder="Enter your parents" value="<?= $row['phone'] ;?>" />
			</div>
			<div class="col-12">
				<div class="col-8">
					<div class="from_ele">
						<input type="file" id="stdPhoto" name="std_image" />
					</div>
				</div>
				<div class="col-2">
					<div class="from_ele">
						<img id = "imagePreview" class="thumbnail_img" src="../assets/img/<?= $row['image_name'];?>">
					</div>
				</div>
			</div>
			<button type="submit" class="btn_primary">Submit</button>
		</div>
	</form>
</body>
</html>