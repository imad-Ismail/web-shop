
<?php
    //session_start();

    $sql = "SELECT * FROM producten ";
    
    $data = $conn->query($sql);     

    
    foreach ($data as $row)
    {   
        $htmlOutput  = "";         

        $htmlOutput .= '<div class="card">';

        $htmlOutput  .= '<h2 style="text-align: center ; color : rgb(0,0,0,.8)  ;">' .  $row['Naam'] .  '</h2>' ;

        $htmlOutput .= '<img src="' . $row['Img'] . '" alt="' . $row['Naam'] . '" style="width:60% ; height:60% ;border-radius: 50%;margin:20px 110px; ">';
        
        $htmlOutput .= '<h2 style="text-align: center ; color : rgb(0,0,0,.8);">'. $row['Title']  .'</h2>';
        $htmlOutput .= '<h3 style="text-align: center ; color: rgb(0,0,0,.7);">'. $row['Bouwjaar'] . '</h3>';
        if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] == "admin"){
        $htmlOutput .= '<p class="title" style="text-align: center; color: rgb(196, 174, 64); font-size:30px;">' . " € " . $row['Prijs']  . '</p>';
        $htmlOutput  .= '<a href="test.php?id=' . $row["product_id"] . '">';
        $htmlOutput .= '<p class="title" style="text-align: center; color: red;">' . " wijziging " . '</p>';
        $htmlOutput .= '</a>';
        $htmlOutput .= '<a onclick="winkelwagentoevogen(' . $row['product_id'] . ')">';
        $htmlOutput .= '<img id="category" class="logoww" src="foto/winkelwagen.png "  >';
        $htmlOutput .= '</a>';
        $htmlOutput .= '<p id="phpOutput"> </p>';
        } elseif (isset($_SESSION["user_id"])){
        $htmlOutput .= '<p class="title" style="text-align: center; color: rgb(196, 174, 64); font-size:30px;">' . " € " . $row['Prijs']  . '</p>';
        $htmlOutput .= '<a onclick="winkelwagentoevogen(' . $row['product_id'] . ')">';
        $htmlOutput .= '<img id="category" class="logoww" src="foto/winkelwagen.png "  >';
        $htmlOutput .= '</a>';
        $htmlOutput .= '<p id="phpOutput"> </p>';
            
        }




        else{
        $htmlOutput .= '<p class="title" style="text-align: center;">' . " € " . $row['Prijs']  . '</p>';
        // $htmlOutput .= '<a onclick="winkelwagentoevogen(' . $row['product_id'] . ')">';
        // $htmlOutput .= '<img id="category" class="logoww" src="foto/winkelwagen.png "  >';
        // $htmlOutput .= '</a>';
        $htmlOutput .= '<p id="phpOutput"> </p>';
        }
        

        // $htmlOutput .= '<p style="text-align: center;">' . $row['Bouwjaar'] . '</p>';
        $htmlOutput .= '</div>';  




        echo $htmlOutput;
    }  


  
?>