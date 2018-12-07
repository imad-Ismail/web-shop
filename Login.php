

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/nieuw.css">
</head>
<body>

	<div class="formDiv">

		<div>
		<form action="loginForm.php" method="get"> 
		<h1>Login</h1>
			<div class="input">

		<input type="text" name="email" autofocus placeholder="E-mail">
				<br>
		<?php 
	if(isset($_GET['errorCode'])){
		echo $_GET['errorCode'];
	}
 ?>
		<br>
		<input type="password" name="password" placeholder="password">
		<br>
		<button type="submit" class="loginbtn">Login</button>
			</div>
		</div>

	</div>

	<div class="followDiv">
		<div class="padding">
		<h1>Follow</h1>
		<p class="fa">Facebook</p>
		<p class="tw">Twitter</p>
		<a href="http://localhost/php/Nieuw%20pro/"><p class="Home">Home</p></a>

		<a href="http://localhost/php/Nieuw%20pro/Login.php"><p class="login">Login</p></a>
		<a href="http://localhost/php/Nieuw%20pro/signin.php"><p class="signin">Signin</p></a>
		</div>
	</div>
		




















	</form>


</body>
</html>