<?php
require_once('../views/connection.php');

$target_dir = "../assets/img/";
$target = $target_dir . basename( $_FILES['std_image']['name']);

if(!empty($_POST['name'] && $_POST['email'] && $_POST['roll'] && $_POST['address'] && $_POST['phone']&& $_POST['parents']&& $_POST['grade']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$roll = $_POST['roll'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$grade = $_POST['grade'];
	$parents = $_POST['parents'];
	$pic=($_FILES['std_image']['name']);
	
	$sql = "INSERT INTO $tbl_name(name,email,roll,address,phone,grade,parents,image_name) VALUES ('$name','$email','$roll','$address','$phone','$grade','$parents','$pic')";
	if($con->query($sql)==TRUE)
	{	
		if(move_uploaded_file($_FILES["std_image"]["tmp_name"], $target))
		{
			header('Location:../views/add_student.php?message=Record Added Successfully');
		}
	}
	else{
		header('Location:../views/add_student.php?error_msg='.$con->error);
	}
}
else
	{
		header('Location:../views/add_student.php?error_msg= All fields are required');
	}
$con->close();
?>