
<?php include("db-connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Archaeology</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index1.css">
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
				echo "<li><a href='http://localhost/php/Nieuw%20pro/winkelwagen.php'>Cart </a></li>";
				// echo "<li><a href='#'> <img src='foto/winkelwagen.png'style='width:12% ; height:12% ;'> </a></li>";
				echo "<li> " .' welkom ' . $_SESSION['name'] . "</li>";
			}
			?>
			</ul>
	</nav>

	<div class="main" id="main2">

<?php

//echo $_SESSION['user_id'];

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM winkelwagen INNER JOIN producten on winkelwagen.p_id=producten.product_id WHERE u_id ='$user_id' "; 

    
$data = $conn->query($sql);   

foreach($data as $row){
	// var_dump($row);
	//echo $row['id'] . "<br>";
    echo '<h2>' . $row['Naam'] . '</h2>'  . '<br>';
    echo  'Title : ' . $row['Title'] . "<br>";
    echo  'Bouwjaar : ' . $row['Bouwjaar'] . "<br>";
    echo ' land : ' . $row['Plaats'] . "<br>";
    echo ' € ' . $row['Prijs'] . "<br>" ;
    echo '<img class="imgproduct" src="' . $row['Img'] .  '"<br>';
    // echo '<a onclick="verwijderen (' . $row['id'] . ')">';
    echo '<input class="verwijderen" type="submit" name="verwijderen" value="verwijderen" style = color:red ;
  onclick="verwijderen(' . $row['id'] . ')">';
    // echo '</a>';
    echo '-----------------------------------------------------------------' . '<br>';
    

}


?>

	</div>
	<script type="text/javascript" src="wnkelwagen.js"></script>
</body>
</html>

