<!DOCTYPE html>
<html>
<head>
	<title>ChangeTabs</title>
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
	<div class="table">
		<h2>Select Tab</h2>
		<table  class="table table-striped">
			<tr>
				<td><p>First Tables</p></td>
				<td><a class="btn btn-default" href="firstTabs.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Second Tables</p></td>
				<td><a class="btn btn-default" href="secondTabs.php">Next</a></td>
			</tr>
			<tr>
				<td><p>Third Tables</p></td>
				<td><a class="btn btn-default" href="thirdTabs.php">Next</a></td>
			</tr>
		</table>
	</div>

</body>
</html>