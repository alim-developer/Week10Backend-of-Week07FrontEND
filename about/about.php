<div class="row tabs text-center">
	<button type="value">First Tab</button>
	<button type="value">Second Tab</button>
	<button type="value">Third Tab</button>
	<div class="clearFix"></div>
</div>
<div class="row firstTab">
	<?php
		
		$sql = "SELECT * FROM aboutText WHERE id=1";
		$query = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($query);
		if(!$query){
			echo 'Error';
		}
	?>
	<div class="col-md-6 col-sm-6 col-xs-12 animeLeft">
		<img src="assets/images/img/people.jpg" class="img-responsive">
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 text-center textTab animeRight">
		<h2><?=$row['head'];?> <span><?=$row['span'];?></span></h2>
		<p class="p"><?=$row['smallText'];?></p>
		<p><?=$row['text'];?></p>
		<button type="value"><a href="">Get Template</a></button>
		<button type="value"><a href="">See Elements</a></button>
	</div>
</div>
<div class="row firstTab">
	<?php
		
		$sql2 = "SELECT * FROM aboutText WHERE id=2";
		$query2 = mysqli_query($connect, $sql2);
		$row2 = mysqli_fetch_assoc($query2);
		if(!$query2){
			echo 'Error';
		}
	?>
	<div class="col-md-6 col-sm-6 hidden-xs text-left textTab animeLeft">
		<h2 class="h2"><?=$row2['head'];?> <span><?=$row2['span'];?></span></h2>
		<p style="padding-right: 120px;"><?=$row2['smallText'];?></p>
		<p><?=$row2['text'];?></p>
	</div>
	<div class="col-md-6 col-sm-6 hidden-xs animeRight">
		<img src="assets/images/img/content_image1.png" class="img-responsive">
	</div>
	<div class="hidden-lg hidden-md hidden-sm col-xs-12">
		<img src="assets/images/img/content_image1.png" class="img-responsive">
	</div>
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 text-left textTab">
		<h2 class="h2"><?=$row2['head'];?> <span><?=$row2['span'];?></h2>
			<p style="padding-right: 120px;"><?=$row2['smallText'];?></p>
			<p><?=$row2['text'];?></p>
		</div>
	</div>
	<div class="row firstTab">
		<?php
			
			$sql3 = "SELECT * FROM aboutText WHERE id=3";
			$query3 = mysqli_query($connect, $sql3);
			$row3 = mysqli_fetch_assoc($query3);
			if(!$query3){
				echo 'Error';
			}
		?>
		<div class="col-md-6 col-sm-6 col-xs-12 animeLeft">
			<img src="assets/images/img/helmet.jpg" class="img-responsive">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-right textTab animeRight">
			<h2 class="h2"><?=$row3['head'];?> <span><?=$row3['span'];?></span></h2>
			<p style="padding-left: 120px;"><?=$row3['smallText'];?></p>
			<p><?=$row3['text'];?></p>
			
		</div>
	</div>
	<div class="row secondTab">
		<?php
			
			$sql4 = "SELECT * FROM aboutText WHERE id=4";
			$query4 = mysqli_query($connect, $sql4);
			$row4 = mysqli_fetch_assoc($query4);
			if(!$query4){
				echo 'Error';
			}
		?>
		<div class="col-md-6 col-sm-6 hidden-xs text-center textTab animeLeft">
			<h2><?=$row4['head'];?> <span><?=$row4['span'];?></span></h2>
			<p class="p"><?=$row4['smallText'];?></p>
			<p><?=$row4['text'];?></p>
		</div>
		<div class="col-md-6 col-sm-6 hidden-xs animeRight">
			<img src="assets/images/img/phone.jpg" class="img-responsive">
		</div>
		
		<div class="hidden-lg hidden-md hidden-sm col-xs-12">
			<img src="assets/images/img/phone.jpg" class="img-responsive">
		</div>
		<div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center textTab">
			<h2><?=$row4['head'];?> <span><?=$row4['span'];?></span></h2>
			<p class="p"><?=$row4['smallText'];?></p>
			<p><?=$row4['text'];?></p>
		</div>
	</div>
	<div class="row secondTab">
		<?php
			
			$sql5 = "SELECT * FROM aboutText WHERE id=5";
			$query5 = mysqli_query($connect, $sql5);
			$row5 = mysqli_fetch_assoc($query5);
			if(!$query5){
				echo 'Error';
			}
		?>
		<div class="col-md-6 col-sm-6 hidden-xs text-left textTab animeLeft">
			<h2 class="h2"><?=$row5['head'];?> <span><?=$row5['span'];?></span></h2>
			<p style="padding-right: 120px;"><?=$row5['smallText'];?></p>
			<p><?=$row5['text'];?></p>
		</div>
		<div class="col-md-6 col-sm-6 col-sm-6 hidden-xs animeRight">
			<img src="assets/images/img/content_image1.png" class="img-responsive">
		</div>
		
		<div class="hidden-lg hidden-md hidden-sm col-xs-12">
			<img src="assets/images/img/content_image1.png" class="img-responsive">
		</div>
		<div class="hidden-lg hidden-md hidden-sm col-xs-12 text-left textTab">
			<h2 class="h2"><?=$row5['head'];?> <span><?=$row5['span'];?></span></h2>
			<p style="padding-right: 120px;"><?=$row5['smallText'];?></p>
			<p><?=$row5['text'];?></p>
		</div>
	</div>
	<div class="row secondTab">
		<?php
			
			$sql6 = "SELECT * FROM aboutText WHERE id=6";
			$query6 = mysqli_query($connect, $sql6);
			$row6 = mysqli_fetch_assoc($query6);
			if(!$query6){
				echo 'Error';
			}
		?>
		<div class="col-md-6 col-sm-6 col-xs-12 animeLeft">
			<img src="assets/images/img/helmet.jpg" class="img-responsive">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-right textTab animeRight">
			<h2 class="h2"><?=$row6['head'];?> <span><?=$row6['span'];?></span></h2>
			<p style="padding-left: 120px;"><?=$row6['smallText'];?></p>
			<p><?=$row6['text'];?></p>
			
		</div>
	</div>
	<div class="row thirdTab">
		<div class="animeLeft"></div>
		<div class="animeRight"></div>
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<h2>3 EASY STEPS</h2>
			<p class="p">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 text-center company">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<i class="fa fa-laptop fa-5x" aria-hidden="true"></i>
				<h5>PLACE ORDER</h5>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<i class="fa fa-credit-card fa-5x" aria-hidden="true"></i>
				<h5>OUR SYSTEM RUNS</h5>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<i class="fa fa-television fa-5x" aria-hidden="true"></i>
				<h5>RECEIVE REPORT</h5>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
			</div>
		</div>
	</div>
	<div class="row thirdTab">
		<?php
			
			$sql7 = "SELECT * FROM aboutText WHERE id=7";
			$query7 = mysqli_query($connect, $sql7);
			$row7 = mysqli_fetch_assoc($query7);
			if(!$query7){
				echo 'Error';
			}
		?>
		<div class="col-md-6 col-sm-6 hidden-xs text-left textTab animeLeft">
			<h2 class="h2"><?=$row7['head'];?> <span><?=$row7['span'];?></span></h2>
			<p style="padding-right: 120px;"><?=$row7['smallText'];?></p>
			<p><?=$row7['text'];?></p>
		</div>
		<div class="col-md-6 col-sm-6 hidden-xs animeRight">
			<img src="assets/images/img/content_image1.png" class="img-responsive">
		</div>
		
		<div class="hidden-lg hidden-md hidden-sm col-xs-12">
			<img src="assets/images/img/content_image1.png" class="img-responsive">
		</div>
		<div class="hidden-lg hidden-md hidden-sm col-xs-12 text-left textTab">
			<h2 class="h2"><?=$row7['head'];?> <span><?=$row7['span'];?></span></h2>
			<p style="padding-right: 120px;"><?=$row7['smallText'];?></p>
			<p><?=$row7['text'];?></p>
		</div>
	</div>
	<div class="row thirdTab">
		<div class="col-md-6 col-sm-6 col-xs-12 animeLeft">
			<img src="assets/images/img/helmet.jpg" class="img-responsive">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 text-right textTab animeRight">
			<?php
			
				$sql8 = "SELECT * FROM aboutText WHERE id=8";
				$query8 = mysqli_query($connect, $sql8);
				$row8 = mysqli_fetch_assoc($query8);
				if(!$query8){
					echo 'Error';
				}
			?>
			<h2 class="h2"><?=$row8['head'];?> <span><?=$row8['span'];?></span></h2>
			<p style="padding-left: 120px;"><?=$row8['smallText'];?></p>
			<p><?=$row8['text'];?></p>
		</div>
	</div>