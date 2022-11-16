<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set permession to docturs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body style="background-color: black; color: white;">
    

<div style="background-color: #28445c;
    margin-top: 50px;
    padding: 31px;
    border-radius: 20px;
    box-shadow: 0px 0px 13px;
    display: flex;
    flex-direction: column;
    gap: 10px;" class="container">
<h4>set permession to go next quiz quistion </h4>
<input class="input-group-text" type="text" name="" id="inputindex"> <br>
<button id="setpermi" class="btn btn-info">set permession</button>
<button id="setnotallowall2" class="btn btn-info">remove all permession</button>
<button id="setnotallowall3" class="btn btn-info">allow all qustion</button>

</div>



<form style="background-color: #28445c;
    margin-top: 50px;
    padding: 31px;
    border-radius: 20px;
    box-shadow: 0px 0px 13px;" class="container" action="../chart/analitic.php" method="post">
            <h4>write number of question who need to see ther analitic</h4>
            <input class="input-group-text" type="text" name="quistionnumber" id="inq"><br>
            <button id="setpermianalitic" class="btn btn-info">display statistic</button>
</form>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../script/jquery.min.js"></script>

<script src="jquery.min.js"></script>

<script>







    //var indexq=0;
$("#setpermi").click(function(){
    var indexq=document.getElementById("inputindex").value;
    $.post(
      
    "updateperimi.php",{"indexq":indexq},function(date){
        alert("number "+indexq+"   is updated permession" )
    }
)
})


$("#setnotallowall2").click(function(){
    
    $.post(
      
    "updateperimi.php",{"indexqall":0},function(date){
        alert("all quetion is not allow " )
    }
)
})





$("#setnotallowall3").click(function(){
    
    $.post(
      
    "updateperimi.php",{"indexqallallow":1},function(date){
        alert("all quetion is  allow to see" )
    }
)
})
</script>
</html>