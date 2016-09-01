<div class="button">
	<?php	
		$sql = "SELECT * FROM featuresText WHERE id=1";
		$query = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($query);
		if(!$query){
			echo 'Error';
		}
	?>
	<h4><?=$row['name'];?></h4>
	<p><?=$row['text'];?></p>
</div>
<div class="button">
	<?php
		$sql1 = "SELECT * FROM featuresText WHERE id=2";
		$query1 = mysqli_query($connect, $sql1);
		$row1 = mysqli_fetch_assoc($query1);
		if(!$query1){
			echo 'Error';
		}
	?>
	<h4><?=$row1['name'];?></h4>
	<p><?=$row1['text'];?></p>
</div>
<div class="button">
	<?php
		$sql2 = "SELECT * FROM featuresText WHERE id=3";
		$query2 = mysqli_query($connect, $sql2);
		$row2 = mysqli_fetch_assoc($query2);
		if(!$query2){
			echo 'Error';
		}
	?>
	<h4><?=$row2['name'];?></h4>
	<p><?=$row2['text'];?></p>
</div>