<?php

if(isset($_POST["id"])){

    $idques=$_POST["id"];
    $nuberchoose=$_POST["nuberchoose"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizevent";

    $QA=0;
    $QB=0;
    $QC=0;
    $QD=0;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    

    $qselect ="SELECT *  FROM analytique WHERE id=$idques";

    $result = $conn->query($qselect);
    while($row = $result->fetch_assoc()) {
        $QA=$row["QA"];
        $QB=$row["QB"];
        $QC=$row["QC"];
        $QD=$row["QD"];
      }
    
    echo $QA . " ---" .$QB . " ---" .$QC . " ---" .$QD ;

    if($nuberchoose==1){
        $sql = "UPDATE analytique  SET QA=$QA+1  where id=$idques";
    }

    if($nuberchoose==2){
        $sql = "UPDATE analytique  SET QB=$QB+1  where id=$idques";
    }

    if($nuberchoose==3){
        $sql = "UPDATE analytique  SET QC=$QC+1  where id=$idques";
    }

    if($nuberchoose==4){
        $sql = "UPDATE analytique  SET QD=$QD+1  where id=$idques";
    }

   
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}



?>

