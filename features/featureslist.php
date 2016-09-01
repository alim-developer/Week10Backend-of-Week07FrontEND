<div class="one">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql1 = "SELECT * FROM featuresList WHERE id=1";
			$query1 = mysqli_query($connect, $sql1);
			$row1 = mysqli_fetch_assoc($query1);
			if(!$query1){
				echo 'Error';
			}
		?>
		<i class="fa fa-cloud-download fa-3x" aria-hidden="true"></i>
		<h4><?=$row1['name'];?></h4>
		<p><?=$row1['content'];?></p>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql2 = "SELECT * FROM featuresList WHERE id=2";
			$query2 = mysqli_query($connect, $sql2);
			$row2 = mysqli_fetch_assoc($query2);
			if(!$query2){
				echo 'Error';
			}
		?>
		<i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
		<h4><?=$row2['name'];?></h4>
		<p><?=$row2['content'];?></p>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql3 = "SELECT * FROM featuresList WHERE id=3";
			$query3 = mysqli_query($connect, $sql3);
			$row3 = mysqli_fetch_assoc($query3);
			if(!$query3){
				echo 'Error';
			}
		?>
		<i class="fa fa-keyboard-o fa-3x" aria-hidden="true"></i>
		<h4><?=$row3['name'];?></h4>
		<p><?=$row3['content'];?></p>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql4 = "SELECT * FROM featuresList WHERE id=4";
			$query4 = mysqli_query($connect, $sql4);
			$row4 = mysqli_fetch_assoc($query4);
			if(!$query4){
				echo 'Error';
			}
		?>
		<i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
		<h4><?=$row4['name'];?></h4>
		<p><?=$row4['content'];?></p>
	</div>
</div>
<div class="two">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql5 = "SELECT * FROM featuresList WHERE id=5";
			$query5 = mysqli_query($connect, $sql5);
			$row5 = mysqli_fetch_assoc($query5);
			if(!$query5){
				echo 'Error';
			}
		?>
		<i class="fa fa-leaf fa-3x" aria-hidden="true"></i>
		<h4><?=$row5['name'];?></h4>
		<p><?=$row5['content'];?></p>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql6 = "SELECT * FROM featuresList WHERE id=6";
			$query6 = mysqli_query($connect, $sql6);
			$row6 = mysqli_fetch_assoc($query6);
			if(!$query6){
				echo 'Error';
			}
		?>
		<i class="fa fa-terminal fa-3x" aria-hidden="true"></i>
		<h4><?=$row6['name'];?></h4>
		<p><?=$row6['content'];?></p>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql7 = "SELECT * FROM featuresList WHERE id=7";
			$query7 = mysqli_query($connect, $sql7);
			$row7 = mysqli_fetch_assoc($query7);
			if(!$query7){
				echo 'Error';
			}
		?>
		<i class="fa fa-shield fa-3x" aria-hidden="true"></i>
		<h4><?=$row7['name'];?></h4>
		<p><?=$row7['content'];?></p>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php
			$sql8 = "SELECT * FROM featuresList WHERE id=8";
			$query8 = mysqli_query($connect, $sql8);
			$row8 = mysqli_fetch_assoc($query8);
			if(!$query8){
				echo 'Error';
			}
		?>
		<div class="star">
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
		</div>
		<h4><?=$row8['name'];?></h4>
		<p><?=$row8['content'];?></p>
	</div>
</div>