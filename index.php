<?php require_once("db-connection.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Archaeology</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
</head>
<body>

	<nav>
		<ul>



			<li>
					<a href="http://localhost/php/Nieuw%20pro/index.php"><p>Home</p></a>

			</li>
	

			<?php 
			if(!isset($_SESSION["user_id"])){
				
				echo '<li>
					<a href="signin.php"><p>Signin</p></a>
					</li>
					<li>
							<a href="Login.php"><p>Login</p></a>
					</li>';
			} else {
				echo "<li><a href='http://localhost/php/Nieuw%20pro/logout.php'><p>logout</p></a></li>";
				echo "<li><a href='http://localhost/php/Nieuw%20pro/winkelwagen.php'>winkelwagen </a></li>";
				// echo "<li><a href='#'> <img src='foto/winkelwagen.png'style='width:12% ; height:12% ;'> </a></li>";
				echo "<li> " .' welkom ' . $_SESSION['name'] . "</li>";
			}
			?>
			</ul>
	</nav>
	<div class="border">
		
	</div>
	<section>
		<img class="imgegypt" src="foto/egypt.jpg" width="100%">
<!-- 		<p class="tw">Welkom bij de grootste website voor de handel in waardevolle voorwerpen, antiek</p> -->
	</section>

	<div class="main" id="main">

	<?php include("product.php"); ?>

	</div>
	<div id="phpOutput">
		
	</div>
		<script type="text/javascript" src="winkelwagen.js"></script>
</body>
</html>