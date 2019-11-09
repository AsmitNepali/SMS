<?php
	require_once('connection.php');
	$sql = "SELECT * from $tbl_name";
	$result = $con->query($sql);
	// var_dump($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student|Details</title>
	<?php include('link.php');?>
	<style type="text/css">
		body{
			background-color: #fff;
		}
	</style>
</head>
<body>
<div class="col-12">
	<div class="col-3"></div>
	<div class="col-6">
		<div class="table-div">
			<div class="table-title">
				<h2>Student Details</h2>
				<div class="row">
					<a class="add_std" href="add_student.php"><i class="fa fa-plus" title="Add Student"></i></a>
				</div>

						<i id="success_msg"><?php if(isset($_GET['message'])) echo $_GET['message'];?></i>
						<span id="error_msg"><?php if(isset($_GET['error_msg'])) echo "Error: ".$_GET['error_msg'];?></span>
			</div>
			<table class="table" border="1">
				<thead class="tabel-warning">
					<th>S.N</th>
					<th>Name</th>
					<th>Roll</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Photo</th>
					<th colspan="3">Action</th>
				</thead>
				<tbody id="myTask">
					<?php
						if($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc()){
								?>
								<tr>
									<td><?= $row['id'];?></td>
									<td><?= $row['name'];?></td>
									<td><?= $row['roll'];?></td>
									<td><?= $row['address'];?></td>
									<td><?= $row['phone'];?></td>
									<td><img class="thumbnail_img" src="../assets/img/<?= $row['image_name'];?>"></td>
									<td class="edit"><a href="../views/edit_student.php?id=<?= $row['id'];?>"><i class="fa fa-pencil" title="Edit"></i></a></td>
									<td class="trash"><a href="../action/delete.php?id=<?=$row['id'];?>"><i class="fa fa-trash" title="Delete"></i></a></td>
									<td class="trash"><a href="../views/show_student.php?id=<?=$row['id'];?>"><i class="fa fa-eye" title="View"></i></a></td>
								</tr>
							<?php
							}
						}
					 ?>
					
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-3"></div>
</div>
<?php include('footer.php');?>
</body>
</html>