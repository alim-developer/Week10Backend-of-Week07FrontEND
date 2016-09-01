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
		$sql1 = "SELECT * FROM getLiveUpdates";
		$query1 = mysqli_query($connect, $sql1);
		$row = mysqli_fetch_assoc($query1);

	?>
	<section id="mainText">
		<h3>Change Main Text</h3>
		<form action="" method="POST">
			<input type="text" name="head" placeholder="Main text" value="<?=$row['head'];?>">
			<input type="text" name="footer" placeholder="Footer text" value="<?=$row['footer'];?>">
			<input type="text" name="buttonName" placeholder="for first button" value="<?=$row['buttonName'];?>">
			<input class="btn btn-default pull-right" type="submit" name="submit" value="submit">
		</form>
			

	</section>

	<?php
		if(isset($_POST['submit'])){
			$head = $_POST['head'];
			$footer = $_POST['footer'];
			$buttonName = $_POST['buttonName'];

			$sql = "UPDATE getLiveUpdates SET head='$head',footer='$footer',buttonName='$buttonName' WHERE id=1";
			$query = mysqli_query($connect, $sql);

			if($query){
				header("Location: getLiveUpdates.php");
			}else{
				echo "Textlər dəyişdirilən zaman xəta baş verdi";
			}
		}

	?>

</body>
</html>
