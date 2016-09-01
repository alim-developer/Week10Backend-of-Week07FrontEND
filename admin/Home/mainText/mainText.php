<!DOCTYPE html>
<html>
<head>
	<title>Update Menu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">

</head>
<body>
<?php
	session_start();
		if($_SESSION['block'] != true){
			header('Location: ../../../index.php');
		}

		include '../../../db.php';
		$sql1 = "SELECT * FROM mainText";
		$query1 = mysqli_query($connect, $sql1);
		$row = mysqli_fetch_assoc($query1);

	?>
	<section id="mainText">
		<h3>Change Main Text</h3>
		<form action="" method="POST">
			<input type="text" name="bigText" placeholder="Main text" value="<?=$row['head'];?>">
			<input type="text" name="smallText" placeholder="Footer text" value="<?=$row['smallHead'];?>">
			<input type="text" name="firstButton" placeholder="for first button" value="<?=$row['firstButton'];?>">
			<input type="text" name="secondButton" placeholder="for second button" value="<?=$row['secondButton'];?>">
			<input class="btn btn-default pull-right" type="submit" name="submit" value="submit">
		</form>
			

	</section>

	<?php
		if(isset($_POST['submit'])){
			
			$bigText = $_POST['bigText'];
			$smallText = $_POST['smallText'];
			$firstButton = $_POST['firstButton'];
			$secondButton = $_POST['secondButton'];

			$sql = "UPDATE mainText SET head='$bigText',smallHead='$smallText',firstButton='$firstButton',secondButton='$secondButton' WHERE id=1";
			$query = mysqli_query($connect, $sql);

			if($query){
				header("Location: mainText.php");
			}else{
				echo "Textlər dəyişdirilən zaman xəta baş verdi";
			}
		}

	?>

</body>
</html>
