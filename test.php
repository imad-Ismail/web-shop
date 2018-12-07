<?php require_once("db-connection.php"); ?>
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
				echo "<li><a href='#'>Cart</a></li>";
				echo "<li> " .' welkom ' . $_SESSION['name'] . "</li>";
			}
			?>
			</ul>
	</nav>

	<div class="main" id="main">

	<?php
    if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "admin"){
	$id = $_GET["id"];
    $sql = "SELECT * FROM producten WHERE product_id='$id'";
    
    $data = $conn->query($sql);     

    
    foreach ($data as $row)
    {   
    	$htmlOutput = "";

    	$htmlOutput .= "<form method='get' action='test2.php' class='wijziging'>";
    	$htmlOutput .= '<lapel>' . ' Naam : ' . '  ' . ' </lapel> ' . "<br>" ;
    	$htmlOutput .= " <input type='text' name=' Naam' value='" . $row["Naam"] .  "'>" . "<br>" ;
    	$htmlOutput .= '<lapel>' . ' Title : '  . ' </lapel> '  . "<br>" ;
    	$htmlOutput .= "<input type='text' name='Title' value='" . $row["Title"] . "'>". "<br>" ;
    	$htmlOutput .= '<lapel>' . ' Plaats : ' . '  ' . ' </lapel> ' . "<br>" ;
    	$htmlOutput .= "<input type='text' name='Plaats' value='" . $row["Plaats"] . "'>". "<br>" ;
    	$htmlOutput .= '<lapel>' . ' Prijs : ' . '  ' . ' </lapel> '  . "<br>" ;
    	$htmlOutput .= "<input type='text' name='Prijs' value='" . $row["Prijs"] . "'>". "<br>" ;

    	$htmlOutput .= "<input type='hidden' name='id' value='" . $id . "'>";
    	$htmlOutput .= "<input type='submit' value='veranderd'/>";

    	$htmlOutput .= "</form>";


        echo $htmlOutput;
    }  
  }

     

?>





	




	</div>
</body>
</html>

