<?php

if(isset($_POST["idq"])){

    $idques=$_POST["idq"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizevent";


    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sttus=0;

    $qselect ="SELECT *  FROM permission WHERE id=$idques";

    $result = $conn->query($qselect);
    while($row = $result->fetch_assoc()) {
        $sttus=$row["action"];
    
      }
     
      
    echo $sttus;

   

    $conn->close();
}



?>

