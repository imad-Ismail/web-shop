<?php
    include "db-connection.php";
	$id = $_GET["id"];
    $Naam = $_GET["Naam"];
    $Title = $_GET["Title"];
    $Plaats = $_GET["Plaats"];
    $Prijs = $_GET["Prijs"];
    $sql = "UPDATE producten SET Prijs = '$Prijs' , Plaats = '$Plaats' ,Title = '$Title', Naam = '$Naam'   WHERE product_id='$id'";
    
    $data = $conn->query($sql);

    header('Refresh: 1; URL = index.php');
?>