<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php
	session_start();
		if($_SESSION['block'] != true){
			header('Location: ../../index.php');
		}

	?>
	
	<section class="menu">
		<h2>Menu</h2>
		<table  class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Menu Name</th>
				<th>Assots</th>
				
			</tr>
		<?php
			include '../../db.php';
			if($connect){
			$sql = "SELECT * FROM menu";
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
						 <a class="btn btn-success" href="update.php?id=<?=$row['id'];?>">Update</a>
						 <a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">Delete</a>
					 </td>
				</tr> 
			<?php } 
			}else{
				echo 'Database not found';
			} ?>
		</table>
		<a class="btn btn-primary pull-right" href="create.php">Create</a>
	</section>

	<section class="menu">
		<h2>Extra Menu</h2>
		<table  class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Menu Name</th>
				<th>Assots</th>
				
			</tr>
		<?php
			include '../../db.php';
			if($connect){
			$sql = "SELECT * FROM extraMenu";
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
						 <a class="btn btn-success" href="extraMenu/update.php?id=<?=$row['id'];?>">Update</a>
						 <a class="btn btn-danger" href="extraMenu/delete.php?id=<?=$row['id'];?>">Delete</a>
					 </td>
				</tr> 
			<?php } 
			}else{
				echo 'Database not found';
			} ?>
		</table>
		<div class="buttons">
			<a class="btn btn-default" href="extraMenu/changeMenuInExtra.php">change menu in extra</a>
			<a class="btn btn-primary pull-right" href="extraMenu/create.php">Create</a>
		</div>
	</section>


	
</body>
</html>