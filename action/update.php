<?php 
	require_once('../views/connection.php');
	$target_dir = "../assets/img/";
	$target = $target_dir . basename( $_FILES['std_image']['name']);

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$pic = $_POST['stdPhoto'];
		if($_FILES['std_image']['name'])
		{
			$pic=($_FILES['std_image']['name']);
			// print_r($pic);
			// die();
		}

		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$id = $_POST['id'];
		$grade = $_POST['grade'];
		$parents = $_POST['parents'];
		$email = $_POST['email'];
		$sql = "UPDATE $tbl_name SET name = '$name', email = '$email', roll = '$roll', address = '$address', phone = '$phone', grade = '$grade', parents = '$parents', image_name = '$pic' WHERE id=$id";
		if($con->query($sql)==TRUE)
		{
			if(move_uploaded_file($_FILES['std_image']['tmp_name'], $target)) 
			{
				unlink("../assets/img/".$_POST['stdPhoto']);
			}
			header('Location:../views/index.php?message=Update action successfully done!');
		}
		else
		{
			
			header('Location:../views/edit_student.php?id='.$id.'&error_msg='.$con->error);
		}
	}
	$con->close();
?>