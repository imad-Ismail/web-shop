<?php

include "db-connection.php";

echo $_GET['id'];
 $product = $_GET['id'];

  

  try {
            $sql = "DELETE FROM winkelwagen WHERE id = '$product'";
            
            $conn->exec($sql);
            echo "New record DELETE successfully";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        header('Refresh: 1; URL = winkelwagen.php');

?>