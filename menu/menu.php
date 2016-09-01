<div class="container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="assets/images/logo/logo.png" class="img-responsive"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<?php 
				include 'db.php';
				$sql = "SELECT * FROM menu";
				$query = mysqli_query($connect, $sql);

				while($row = mysqli_fetch_assoc($query)){ ?>
					<li><a href="#"><?=$row['name'];?></a></li>

				<?php	
					}
				?>
				<li class="drop">
					<a style="cursor: pointer;" class="extra">Extra <span class="caret"></span></a>
					<ul>
						<li class="a">
							<a href="#">Homepages <i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
							<ul class="homePages">
								<?php 
									include 'db.php';
									$sql = "SELECT * FROM homepagesMenu";
									$query = mysqli_query($connect, $sql);

									while($row = mysqli_fetch_assoc($query)){ ?>
										<li><a href="#"><?=$row['name'];?></a></li>

									<?php	
										}
									?>
							</ul>
						</li>
						<li class="a">
							<a href="#">Blog <i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
							<ul class="blog">
								<?php 
									include 'db.php';
									$sql = "SELECT * FROM blogMenu";
									$query = mysqli_query($connect, $sql);

									while($row = mysqli_fetch_assoc($query)){ ?>
										<li><a href="#"><?=$row['name'];?></a></li>

									<?php	
										}
									?>
							</ul>
						</li>
						<li class="a"><a href="#">Ecommerce <i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
						<ul class="ecommerce">
						
								<?php 
									include 'db.php';
									$sql = "SELECT * FROM ecommerceMenu";
									$query = mysqli_query($connect, $sql);

									while($row = mysqli_fetch_assoc($query)){ ?>
										<li><a href="#"><?=$row['name'];?></a></li>

									<?php	
										}
									?>
						</ul>
						
						
						<?php 
							include 'db.php';
							$sql = "SELECT * FROM extraMenu";
							$query = mysqli_query($connect, $sql);

							while($row = mysqli_fetch_assoc($query)){ ?>
								<li><a href="#"><?=$row['name'];?></a></li>

							<?php	
								}
							?>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-right" action="" method="POST">
				<button type="submit" name="login"><a href="#">Login</a></button>
				<button type="submit" name="signUp"><a href="#">Sing up</a></button>

				<?php
				if(isset($_POST['login'])){
					header("Location: login.php");
				}
				if(isset($_POST['signUp'])){
					header("Location: signUp.php");
				}
				?>
			</form>
		</div>
	</nav>
</div>