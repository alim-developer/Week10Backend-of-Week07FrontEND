<!DOCTYPE html>
<html>
<head>
	<title>Update Menu</title>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style.css">

</head>
<body>
<?php
	session_start();
		if($_SESSION['block'] != true){
			header('Location: ../../../../index.php');
		}

	?>
	<section id="updateMenu">
		<h3>Create Menu</h3>
		<form action="" method="POST">
			<input type="text" name="text">
			<input class="btn btn-default pull-right" type="submit" name="submit" value="submit">
		</form>
			

	</section>

	<?php
		if(isset($_POST['submit'])){
			include '../../../../db.php';
			
			$text = $_POST['text'];

			$sql = "INSERT INTO blogMenu(name) VALUES ('$text')";
			$query = mysqli_query($connect, $sql);

			if($query){
				header("Location: ../changeMenuInExtra.php");
			}else{
				echo "Yeni menü əlavə edilərkən xəta baş verdi";
			}
		}

	?>

</body>
</html>