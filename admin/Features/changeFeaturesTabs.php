<!DOCTYPE html>
<html>
<head>
	<title>Update Menu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<?php
	session_start();
		if($_SESSION['block'] != true){
			header('Location: ../../index.php');
		}

		include '../../db.php';
		$sql1 = "SELECT * FROM featuresText WHERE id=1";
		$query1 = mysqli_query($connect, $sql1);
		$row1 = mysqli_fetch_assoc($query1);

	?>
	<section id="mainText">
		<h3>Change buttons</h3>
		<p>First button</p>
		<form action="" method="POST">
			<input type="text" name="name" value="<?=$row1['name'];?>">
			<textarea rows="5"  type="text" name="text">
				<?=$row1['text'];?>
			</textarea> 
			<input class="btn btn-default pull-right" type="submit" name="subm" value="submit">
		</form>
	</section>
	<?php
		if(isset($_POST['subm'])){
			
			$name = $_POST['name'];
			$text = $_POST['text'];

			$sql1 = "UPDATE featuresText SET name='$name',text='$text' WHERE id=1";
			$query1 = mysqli_query($connect, $sql1);

			if($query1){
				header("Location: changeFeaturesTabs.php");
			}else{
				echo "Dəyişikliklər əlavə edilmədi";
			}
		}
	?>
	<?php
		$sql2 = "SELECT * FROM featuresText WHERE id=2";
		$query2 = mysqli_query($connect, $sql2);
		$row2 = mysqli_fetch_assoc($query2);

	?>
	<section id="mainText">
		<p>Second button</p>
		<form action="" method="POST">
			<input type="text" name="name" value="<?=$row2['name'];?>">
			<textarea rows="5"  type="text" name="text">
				<?=$row2['text'];?>
			</textarea>
			<input class="btn btn-default pull-right" type="submit" name="submit" value="submit">
		</form>
	</section>

	<?php

		if(isset($_POST['submit'])){
			
			$name = $_POST['name'];
			$text = $_POST['text'];

			$sql2 = "UPDATE featuresText SET name='$name', text='$text' WHERE id=2";
			$query2 = mysqli_query($connect, $sql2);

			if($query2){
				header("Location: changeFeaturesTabs.php");
			}else{
				echo "Dəyişikliklər əlavə edilmədi";
			}
		}
	?>
	<?php
		$sql3 = "SELECT * FROM featuresText WHERE id=3";
		$query3 = mysqli_query($connect, $sql3);
		$row3 = mysqli_fetch_assoc($query3);

	?>
	<section id="mainText">
		<p>Third button</p>
		<form action="" method="POST">
			<input type="text" name="name" value="<?=$row3['name'];?>">
			<textarea rows="5"  type="text" name="text">
				<?=$row3['text'];?>
			</textarea>
			<input class="btn btn-default pull-right" type="submit" name="send" value="submit">
		</form>
	</section>

	<?php

		if(isset($_POST['send'])){
			
			$name = $_POST['name'];
			$text = $_POST['text'];

			$sql3 = "UPDATE featuresText SET name='$name', text='$text' WHERE id=3";
			$query3 = mysqli_query($connect, $sql3);

			if($query3){
				header("Location: changeFeaturesTabs.php");
			}else{
				echo "Dəyişikliklər əlavə edilmədi";
			}
		}
	?>

</body>
</html>
