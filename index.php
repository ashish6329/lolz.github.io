
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('head.php');?>
</head>
<body>
	<header>
		<?php include_once('web_header.php');?>  
	</header>
	<main>
		
		<div class="container">
			<div class="title">
				<h1> Get Your Unique Batch From lolz</h1>
			</div>
			<div class="my_form">
				<form name="user" method="post" action ="batch.php">
					Enter Your Name Here:<br>
					<input type="text" name="username" placeholder="enter your name Here for your lolz"><br>
					<input type="submit" value="Get Today's lolz"><br>
					
				</form>
			</div>
			<hr>
			<h2 style="text-align: center;"> check your favourite pickeiz</h2>
			<hr>
			<div class="gallery">
				
				<img src="img/images.jpeg"></img>
				<img src="img/images (1).jpeg"></img>
				<img src="img/images (2).jpeg"></img>
				<img src="img/images (3).jpeg"></img>
				<img src="img/images (4).jpeg"></img>
				<img src="img/images (5).jpeg"></img>
				<img src="img/images (6).jpeg"></img>
				<img src="img/images (7).jpeg"></img>

			</div>

		</div>
	</main>
	<footer>
		<?php include_once('web_footer.php');?>
	</footer>
</body>
</html>
