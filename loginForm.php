<?php
    echo "Inschrijven";
    echo "<br>";
    echo $_GET["email"]; 
    echo "<br>";
    echo $_GET["password"]; 


    session_start();
    include "db-connection.php";

    $email = $_GET["email"];
    $password = $_GET["password"];

    $sql = "SELECT * FROM gebrukers WHERE email='$email' AND password = '$password'"; 
    
    $data = $conn->query($sql);   

    if($data->rowCount() > 0){
     
        foreach ($data as $row)
        {   
            $_SESSION['name'] = $row['name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_role'] = $row['userrole'];

        }
        header('Location: index.php');  

    }else{

        header("Location: login.php?errorCode='password or email = fout'");  
    }


   
?>



