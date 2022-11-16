<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    
<?php
 

if(!isset($_COOKIE["username"])) {
   header("location:../index.php");
}
?>


<section id="contentmain" class="sectioncontent">
<div style=" display: flex;justify-content: space-between;  background-color: black; border-radius: 13px; color: white;  padding: 8px;" class="nav">
    <h2>quiz</h2>
    <h3>DR :<?php echo $_COOKIE["username"]?></h3>
    </div>



    <div id="maincontent"> 
        
    


    <div class="answersarea" id="anarea">
    <div style="text-align: center;"><p>question <span id="nquistion">1</span>/<span id="cquistion"></span></p></div>
    <div class="qustion" id="qustion">why We Use aa Element</div>

    <form method="GET">
        <div  class="divquis"><input class="rdio form-check-input" onclick="selectpara(1)" type="radio" name="answer" id="1"> <p for="1" id="ans1" class="panswwr para1">123</p></div>  


        <div class="divquis"><input class="rdio form-check-input" onclick="selectpara(2)" type="radio" name="answer" id="2"> <p id="ans2" class="panswwr para2">ddc w</p></div>  

        <div class="divquis"><input class="rdio form-check-input" onclick="selectpara(3)" type="radio" name="answer" id="3"> <p id="ans3" class="panswwr para3">o Add Breakline</p></div>  

        <div class="divquis"><input class="rdio form-check-input" onclick="selectpara(4)" type="radio" name="answer" id="4"> <p id="ans4" class="panswwr para4">ads</p></div>  

        </form>
        <button id="getjson" name="btnrepo"  class="btn btn-success" id="" onclick="confirmer()">confirmer</button>

    </div>


    <div class="preshow">
      <h3 id="repo"></h3>
      <h5 style="padding: 20px;" class="wait" id="repo">En attente de l'autorisation de responsable pour la question suivant</h5>
      <p id="paravalibal" style=" display: block;  color: rgb(224 31 31);   text-align: center;margin: 15px;">la question suivant ne pas valiable</p>
      <button  role="button" id="btnnext" name=""  class="button-63 btnnext" onclick="waitqestion()">start</button>
      </div>

</div>









      <div style="text-align: center;padding-bottom: 30px;" id="finquiz">
        <h3>result</h3>
        <p id="numberanswer">your answert count is 0</p>
        <p id="countquistion">0</p>
       
    </div>



</section>




<div id="prelo" class="loader">
    <span class="box-1"></span>
    <span class="box-2"></span>
    <span class="box-3"></span>
    <span class="box-4"></span>
    <span class="box-5"></span>
    <span class="box-6"></span>
    <span class="box-7"></span>
    <span class="box-8"></span>
    <span class="box-9"></span>
</div>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../script/jquery.min.js"></script>

<script src="../script/js.js"></script>
</html>