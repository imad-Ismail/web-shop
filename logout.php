<?php
include("db-connection.php");
session_destroy();
?>



<?php include("db-connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Archaeology</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<nav>
		<ul>

			<li>
					<a href="http://localhost/php/Nieuw%20pro/index.php"><p>Home</p></a>
			</li>
	
			
			</ul>
	</nav>

	<div class="main" id="main">
<?php 
echo 'You have cleaned session';
   header('Refresh: 1; URL = index.php');
	


?>

	</div>
</body>
</html>

