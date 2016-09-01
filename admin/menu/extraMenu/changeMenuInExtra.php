<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<?php
	session_start();
		if($_SESSION['block'] != true){
			header('Location: ../../../index.php');
		}

	?>
<section class="menu">
		<h2>HOMEPAGES</h2>
		<table  class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Menu Name</th>
				<th>Assots</th>
			</tr>
		<?php
			include '../../../db.php';
			if($connect){
			$sql = "SELECT * FROM homepagesMenu";
			$query = mysqli_query($connect, $sql);

			while($row = mysqli_fetch_assoc($query)){ ?>

				<tr> 

				<?php
				foreach ($row as $value) { 
					echo '<td>';
					echo '<p>';
					echo $value;
					echo '</p>';
					echo '</td>';

					 } ?>
					 <td>
						 <a class="btn btn-success" href="Homepages/update.php?id=<?=$row['id'];?>">Update</a>
						 <a class="btn btn-danger" href="Homepages/delete.php?id=<?=$row['id'];?>">Delete</a>
					 </td>
				</tr> 
			<?php } 
			}else{
				echo 'Database not found';
			} ?>
		</table>
		<a class="btn btn-primary pull-right" href="Homepages/create.php">Create</a>
	</section>

	<section class="menu">
		<h2>BLOG</h2>
		<table  class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Menu Name</th>
				<th>Assots</th>
			</tr>
		<?php
			include '../../../db.php';
			if($connect){
			$sql = "SELECT * FROM blogMenu";
			$query = mysqli_query($connect, $sql);

			while($row = mysqli_fetch_assoc($query)){ ?>

				<tr> 

				<?php
				foreach ($row as $value) { 
					echo '<td>';
					echo '<p>';
					echo $value;
					echo '</p>';
					echo '</td>';

					 } ?>
					 <td>
						 <a class="btn btn-success" href="Blog/update.php?id=<?=$row['id'];?>">Update</a>
						 <a class="btn btn-danger" href="Blog/delete.php?id=<?=$row['id'];?>">Delete</a>
					 </td>
				</tr> 
			<?php } 
			}else{
				echo 'Database not found';
			} ?>
		</table>
		<a class="btn btn-primary pull-right" href="Blog/create.php">Create</a>
	</section>

	<section class="menu">
		<h2>Ecommerce</h2>
		<table  class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Menu Name</th>
				<th>Assots</th>
			</tr>
		<?php
			include '../../../db.php';
			if($connect){
			$sql = "SELECT * FROM ecommerceMenu";
			$query = mysqli_query($connect, $sql);

			while($row = mysqli_fetch_assoc($query)){ ?>

				<tr> 

				<?php
				foreach ($row as $value) { 
					echo '<td>';
					echo '<p>';
					echo $value;
					echo '</p>';
					echo '</td>';

					 } ?>
					 <td>
						 <a class="btn btn-success" href="Ecommerce/update.php?id=<?=$row['id'];?>">Update</a>
						 <a class="btn btn-danger" href="Ecommerce/delete.php?id=<?=$row['id'];?>">Delete</a>
					 </td>
				</tr> 
			<?php } 
			}else{
				echo 'Database not found';
			} ?>
		</table>
		<a class="btn btn-primary pull-right" href="Ecommerce/create.php">Create</a>
	</section>

</body>
</html>