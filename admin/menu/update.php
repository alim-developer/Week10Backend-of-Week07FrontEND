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

	?>
	<section id="updateMenu">
		<h3>Write Menu name</h3>
		<form action="" method="POST">
			<input type="text" name="text">
			<input class="btn btn-default pull-right" type="submit" name="submit" value="submit">
		</form>
			

	</section>

	<?php
		if(isset($_POST['submit'])){
			include '../../db.php';
			$id = $_GET['id'];
			$text = $_POST['text'];

			$sql = "UPDATE menu SET name='$text' WHERE id=$id";
			$query = mysqli_query($connect, $sql);

			if($query){
				header("Location: menuChange.php");
			}else{
				echo "Menu adı dəyişdirilən zaman xəta baş verdi";
			}
		}

	?>

</body>
</html>