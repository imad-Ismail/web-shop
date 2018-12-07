<?php
    echo "Inschrijven";
    echo "<br>";
    echo $_GET["name"]; 
    echo "<br>";
    echo $_GET["achtername"];
    echo "<br>";
    echo $_GET["email"]; 
    echo "<br>";
    echo $_GET["password"];
        echo "<br>";
    echo $_GET["hpassword"];
    echo "<br>";
    echo $_GET["telefoonnummer"]; 

 
    include "db-connection.php";

    $name = $_GET["name"];
    $achtername = $_GET["achtername"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $hpassword = $_GET["hpassword"];
    $telefoonnummer = $_GET["telefoonnummer"];


    try {
            $sql = "INSERT INTO gebrukers (name, achtername, email, password, hpassword , telefoonnummer)
            VALUES ('$name', '$achtername', '$email', '$password', '$hpassword' , '$telefoonnummer')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    header("Location: login.php");  
?>