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
		$sql1 = "SELECT * FROM aboutText WHERE id=1";
		$query1 = mysqli_query($connect, $sql1);
		$row1 = mysqli_fetch_assoc($query1);

	?>
	<section id="mainText">
		<h3>Change First Tables</h3>
		<p>First</p>
		<form action="" method="POST">
			<input type="text" name="head" value="<?=$row1['head'];?>">
			<input type="text" name="span" value="<?=$row1['span'];?>">
			<input type="text" name="smallText" value="<?=$row1['smallText'];?>">
			<textarea rows="7"  type="text" name="text">
				<?=$row1['text'];?>
			</textarea> 
			<input class="btn btn-default pull-right" type="submit" name="subm" value="submit">
		</form>
	</section>
	<?php
		if(isset($_POST['subm'])){
			
			$head = $_POST['head'];
			$span = $_POST['span'];
			$smallText = $_POST['smallText'];
			$text = $_POST['text'];

			$sql1 = "UPDATE aboutText SET head='$head',span='$span',smallText='$smallText',text='$text' WHERE id=1";
			$query1 = mysqli_query($connect, $sql1);

			if($query1){
				header("Location: firstTabs.php");
			}else{
				echo "Textlər dəyişdirilən zaman xəta baş verdi";
			}
		}
	?>
	<?php
		$sql2 = "SELECT * FROM aboutText WHERE id=2";
		$query2 = mysqli_query($connect, $sql2);
		$row2 = mysqli_fetch_assoc($query2);

	?>
	<section id="mainText">
		<p>Second</p>
		<form action="" method="POST">
			<input type="text" name="head" value="<?=$row2['head'];?>">
			<input type="text" name="span" value="<?=$row2['span'];?>">
			<input type="text" name="smallText" value="<?=$row2['smallText'];?>">
			<textarea rows="7"  type="text" name="text">
				<?=$row2['text'];?>
			</textarea>
			<input class="btn btn-default pull-right" type="submit" name="submit" value="submit">
		</form>
	</section>

	<?php

		if(isset($_POST['submit'])){
			
			$head = $_POST['head'];
			$span = $_POST['span'];
			$smallText = $_POST['smallText'];
			$text = $_POST['text'];

			$sql2 = "UPDATE aboutText SET head='$head',span='$span',smallText='$smallText',text='$text' WHERE id=2";
			$query2 = mysqli_query($connect, $sql2);

			if($query2){
				header("Location: firstTabs.php");
			}else{
				echo "Textlər dəyişdirilən zaman xəta baş verdi";
			}
		}
	?>

	<?php
		$sql3 = "SELECT * FROM aboutText WHERE id=3";
		$query3 = mysqli_query($connect, $sql3);
		$row3 = mysqli_fetch_assoc($query3);

	?>
	<section id="mainText">
		<p>Third</p>
		<form action="" method="POST">
			<input type="text" name="head" value="<?=$row3['head'];?>">
			<input type="text" name="span" value="<?=$row3['span'];?>">
			<input type="text" name="smallText" value="<?=$row3['smallText'];?>">
			<textarea rows="7"  type="text" name="text">
				<?=$row3['text'];?>
			</textarea>
			<input class="btn btn-default pull-right" type="submit" name="send" value="submit">
		</form>
	</section>
	<?php

		if(isset($_POST['send'])){
			
			$head = $_POST['head'];
			$span = $_POST['span'];
			$smallText = $_POST['smallText'];
			$text = $_POST['text'];

			$sql3 = "UPDATE aboutText SET head='$head',span='$span',smallText='$smallText',text='$text' WHERE id=3";
			$query3 = mysqli_query($connect, $sql3);

			if($query3){
				header("Location: firstTabs.php");
			}else{
				echo "Textlər dəyişdirilən zaman xəta baş verdi";
			}
		}
	?>

</body>
</html>
