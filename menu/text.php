<div class="content">
	<?php
		$sql = "SELECT * FROM mainText";
		$query = mysqli_query($connect, $sql);

		$row = mysqli_fetch_assoc($query);

		if(!$query){
			echo 'ERROR';
		}

	?>
	<h1><?=$row['head']?></h1>
	<h3><?=$row['smallHead']?></h3>
	<button value="submit"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?=$row['firstButton']?></a></button>
	<button value="submit"><a href="#"><?=$row['secondButton']?></a></button>
</div>


