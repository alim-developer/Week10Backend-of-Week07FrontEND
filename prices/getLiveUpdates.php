<div class="container text-center">
	<?php
		$sql = "SELECT * FROM getLiveUpdates";
		$query = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($query);
	?>
	<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 animeLeft">
		<h2><?=$row['head'];?></h2>
		<span><?=$row['footer'];?></span>
	</div>
	<div class="animeRight">
		<div class="col-sm-1 col-md-1 hidden-lg hidden-xs"></div>
		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 text-right">
			<input type="text" placeholder="Your name">
		</div>
		<div class="col-lg-3 col-md-5 col-sm-5 col-xs-12">
			<input style="width: 100%;" type="text" placeholder="your@email.com">
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 ">
			<button type="value"><a href="#"><?=$row['buttonName'];?></a></button>
		</div>
		<div class="col-sm-1 col-md-1 hidden-lg hidden-xs"></div>
	</div>
</div>