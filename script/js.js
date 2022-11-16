

function selectpara(x){

    if(x==1){
        $(".para1").css("color","#0066b7");
        $(".para2").css("color","black");
        $(".para3").css("color","black");
        $(".para4").css("color","black");
            document.getElementById("repo").innerText="votre réponse est 1";
        
    }

    if(x==2){
        $(".para1").css("color","black");
        $(".para2").css("color","#0066b7");
        $(".para3").css("color","black");
        $(".para4").css("color","black");  
        document.getElementById("repo").innerText="votre réponse est 2";

    }

    if(x==3){
        $(".para1").css("color","black");
        $(".para2").css("color","black");
        $(".para3").css("color","#0066b7");
        $(".para4").css("color","black");
        document.getElementById("repo").innerText="votre réponse est 3";

    }

    if(x==4){
        $(".para1").css("color","black");
        $(".para2").css("color","black");
        $(".para3").css("color","black");
        $(".para4").css("color","#0066b7");
        document.getElementById("repo").innerText="votre réponse est 4";

    }
   
   
}
function displyQuestion(){
    $(".preshow").hide(0)
    $(".answersarea").show(500)
    $("#btnnext").text("suivant")
}
function displyResult(){
    $(".preshow").show(500)
    $(".answersarea").hide(0)
    
   
}
var right_answer="";
function getquestion(x){
    var allQuestions;
    var quistionOBject;
    var xmht= new XMLHttpRequest();

    xmht.onreadystatechange=function(){
    if(xmht.readyState===4 && xmht.status===200){
        allQuestions=JSON.parse(this.responseText)     

 if(allQuestions.length==x-1){result() 
    return
}

        quistionOBject=allQuestions[x-1] 
        
        $(".para1").text(quistionOBject.answer_1)
        $(".para2").text(quistionOBject.answer_2)
        $(".para3").text(quistionOBject.answer_3)
        $(".para4").text(quistionOBject.answer_4)
        $("#cquistion").text(allQuestions.length)
        $("#nquistion").text(x)
        right_answer=quistionOBject.right_answer
 
    }

}
    xmht.open("GET","../html_questions.json",true);
    xmht.send()
       
}

//getquestion(0)


 var hasPer
 x=0
 function  checkQuestion(index){
    $.post("../php/verified.php",{"idq":index},function(date){           
          hasPer=date
          if(hasPer==1){
            
            getquestion(index)
            displyQuestion()
            
            document.getElementById("paravalibal").style.display="none"

          
          }
          if(hasPer==0){
              document.getElementById("paravalibal").style.display="block"
            displyResult()
            x=x-1
           
          }
          

        });
}

x=0
$("#btnnext").click(function(){
x=x+1
    checkQuestion(x)
})



var compid=0;
function updatedbQuestion(){
compid=compid+1
    var nuberchoose=0;
    var radios = document.getElementsByName("answer")
    if(radios[0].checked){nuberchoose=1}
    if(radios[1].checked){nuberchoose=2}
    if(radios[2].checked){nuberchoose=3}
    if(radios[3].checked){nuberchoose=4}

    $.post(
    "updatepage.php",{"id":compid,"nuberchoose":nuberchoose},function(date){
             console.log(date)
    })

}


var numberYouanswer=0
function confirmer(){
    updatedbQuestion()
    displyResult()
    if(right_answer==questionSelect()){
        numberYouanswer=numberYouanswer+1   
    }
   
}



function questionSelect(){
    var youranswer=""
    var radios = document.getElementsByName("answer")
    var panswwr = document.getElementsByClassName("panswwr")
    if(radios[0].checked){
        nuberchoose=1 
        youranswer=panswwr[0].innerText
    }
    if(radios[1].checked){
        nuberchoose=2
        youranswer=panswwr[1].innerText
    }
    if(radios[2].checked){
        nuberchoose=3
        youranswer=panswwr[2].innerText
    }
    if(radios[3].checked){
        nuberchoose=4
        youranswer=panswwr[3].innerText
    } 
    return youranswer
}


function result(){
    $("#numberanswer").text("le nomber de votre reponse est "+numberYouanswer)
    $("#countquistion").text("le nomber total est "+$("#cquistion").text())
    
    $(".preshow").hide(0)
    $(".answersarea").hide(0)
   $("#finquiz").show(500)

}




 
function waitqestion(){
         document.getElementById("contentmain").style.display = "none"
            document.getElementById("prelo").style.display = "block"
            setTimeout(function(){
            document.getElementById("contentmain").style.display = "block"
            document.getElementById("prelo").style.display = "none"
           
        },1600)
      
}
waitqestion()



