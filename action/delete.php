<?php
require_once('../views/connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM $tbl_name WHERE id=$id";
if($con->query($sql)==TRUE)
{
	header('Location:../views/index.php?message=Record deleted!');
}
else
{
	header('Location:../views/index.php?error_msg='.$con->error);
}
$con->close();
?>