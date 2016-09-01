<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<section id="featuresList">
		<div class="container">
			<div class="row text-center">
				<form action="featureList.php" method="POST">
				<?php
					include '../../db.php';
					$sql = "SELECT * FROM featuresList";
					$query = mysqli_query($connect, $sql);
					while($row = mysqli_fetch_assoc($query)){ 
					$id =$row['id']; ?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<label>Head: </label>
						<input type="text" name="head[]" value="<?=$row['name'];?>">
						<label>Content: </label>
						<textarea rows="8" type="text" name="content[]">
							<?=$row['content'];?>
						</textarea>
				</div>
				<?php
				}
				?>
					<input type="submit" name="submit" value="Send">
				</form>
					
				<?php
					if(isset($_POST['submit'])){
						$head = $_POST['head'];
						$content = $_POST['content'];
						for($i=0;$i<=7;$i++){
							$sql2 = "UPDATE featuresList SET name ='".$head[$i]."',content ='".$content[$i]."' WHERE id=".($i+1);
							$query2 = mysqli_query($connect, $sql2);
						}
					}
				?>
			</div>
		</div>
	</section>

</body>
</html>