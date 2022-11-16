<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    <style>
        body{
            background-image: url(https://www.royalehayat.com/Runtime/ProductCategoryImage/Img2Internal-Medicine636977687045975552internal750-290.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100vh;
        }

     .content{
        display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
     }

     .inpnom{
        width: 80%;
     }
        
    
    </style>


<?php
 

if(isset($_COOKIE["username"])) {
   header("location:php/index2.php");
} else {

    echo "<div class='content'>";
    echo "<h2> Bonjour Doctur</h2>";
    echo "<h4> entre votre nom pour contenu </h4>";
   
   echo "<input class='inpnom form-control' id='inputcook' type='text' name='username'>
   <button class='btn btn-info' onclick='setcook()' id='btnsetckookie'>start</button>";

   echo "</div>";
      
}
?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script >


//$("#btnsetckookie").click(function(){   })


function setcook(){
    

    document.cookie="username="+document.getElementById("inputcook").value;+60*3;
    location.reload();
   

}

</script>
</html>