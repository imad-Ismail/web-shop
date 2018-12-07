<?php

include "db-connection.php";
 $product = $_GET['p_id'];
 $userid = $_SESSION['user_id'];

	    

  try {
            $sql = "INSERT INTO winkelwagen (u_id , p_id )
            VALUES ('$userid' , '$product')";
            
            $conn->exec($sql);
            echo "";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

?>