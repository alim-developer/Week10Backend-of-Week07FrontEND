	
	<?php
		session_start();
			if($_SESSION['admin'] !== true){
				header('Location:index.php');
			}
			

			if(isset($_POST['button'])){
				header('Location:logout.php');
			}

		$_SESSION['block'] = true;
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<div class="table">
		<h1>Welcome to Admin page</h1>
		<table  class="table table-striped">
			<tr>
				<td><p>Change menu</p></td>
				<td><a class="btn btn-default" href="menu/menuChange.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Change main text from home</p></td>
				<td><a class="btn btn-default" href="Home/mainText/mainText.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Change tabs date - About</p></td>
				<td><a class="btn btn-default" href="About/changeTabs.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Change Features tables</p></td>
				<td><a class="btn btn-default" href="Features/changeFeaturesTabs.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Change Features List</p></td>
				<td><a class="btn btn-default" href="Features/featureList.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Prices Header change</p></td>
				<td><a class="btn btn-default" href="Prices/getLiveUpdates.php">Next</a></td>
			</tr>

		</table>

		<form action="admin.php" method="POST">
			<button name="button">Log out</button>
		</form>
	</div>

	
</body>
</html>