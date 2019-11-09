<!DOCTYPE html>
<html>
	<title>ADD|STUDENT</title>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/registration.css">	
	<link rel="stylesheet" type="text/css" href="../assets/css/grid.css">	
</head>
<body>
	<div class="heading"><h2>Register Your Student</h2>
	<i id="success_msg"><?php if(isset($_GET['message'])) echo $_GET['message'];?></i>
	<span id="error_msg"><?php if(isset($_GET['error_msg'])) echo "Error: ".$_GET['error_msg'];?></span>
	</div>
	<form class="my-form" method="post" action="../action/create.php"  enctype="multipart/form-data">
		<div class="log_form">
			<div class="from_ele">
				<input type="text" name="name" class="form-control" placeholder="Enter your full name" />
			</div>
			<div class="from_ele">
				<input type="text" name="grade" class="form-control" placeholder="Enter your grade" />
			</div>
			<div class="from_ele">
				<input type="text" name="roll" class="form-control" placeholder="Enter your roll" />
			</div>
			<div class="from_ele">
				<input type="email" name="email" class="form-control" placeholder="Enter your email" />
			</div>
			<div class="from_ele">
				<input type="text" name="address" class="form-control" placeholder="Enter your address" />
			</div>
			<div class="from_ele">
				<input type="text" name="phone" class="form-control" placeholder="Enter your phone" />
			</div>
			<div class="from_ele">
				<input type="text" name="parents" class="form-control" placeholder="Enter your parents" />
			</div>
			<div class="col-12">
				<div class="col-8">
					<div class="from_ele">
						<input type="file" id="stdPhoto" name="std_image" required="required" accept="image/*" onchange="loadFile(event)"/>
					</div>
				</div>
				<div class="col-2">
					<div class="from_ele">
						<img id = "imagePreview" class="thumbnail_img" src="../assets/img/user.jpeg">
					</div>
				</div>
			</div>
			<button type="submit" class="btn_primary">Submit</button>
		</div>
	</form>
	<?php include('footer.php');?>
</body>
</html>