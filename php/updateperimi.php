<?php

if(isset($_POST["indexq"])){

    $idques=$_POST["indexq"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quizevent";

    $stus=0;

   
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    

    $qselect ="SELECT *  FROM permission WHERE id=$idques";



    $result = $conn->query($qselect);
    while($row = $result->fetch_assoc()) {
        $stus=$row["action"];
      }


   
        $sql = "UPDATE permission  SET action=1  where id=$idques";
       // $sql2 = "UPDATE permission  SET action=0  where id<>$idques";


   

   
    if ($conn->query($sql) === TRUE) {
        $conn->query($sql2);
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}



if(isset($_POST["indexqall"])){

  $idques=$_POST["indexqall"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "quizevent";

  $stus=0;

 
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
      $sql = "UPDATE permission  SET action=0";
     // $sql2 = "UPDATE permission  SET action=0  where id<>$idques";


 

 
  if ($conn->query($sql) === TRUE) {
      $conn->query($sql2);
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
}







if(isset($_POST["indexqallallow"])){

  $idques=$_POST["indexqall"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "quizevent";

  $stus=0;

 
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
      $sql = "UPDATE permission  SET action=1";
     // $sql2 = "UPDATE permission  SET action=0  where id<>$idques";


 

 
  if ($conn->query($sql) === TRUE) {
      $conn->query($sql2);
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
}






?>



