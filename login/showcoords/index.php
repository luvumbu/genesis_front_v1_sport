
<i class="fa fa-hand-o-up" style="font-size:3em" id="finger"></i>

<div id="telecommande">
  <i id="ip_user" class="style_on">IP</i>
  <i id="time_user" class="style_on">IP</i>
 <!--  <i class="fa fa-angle-left style_on"></i>-->
  <i class="fa fa-play style_on" onclick="start()" id="play"></i>
  <!--<i class="fa fa-angle-right style_on"></i> -->
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<iframe id="inlineFrameExample"
    title="Inline Frame Example"
    src="../index.php">
</iframe> 
<?php 
 
?>

<div id="showcoords_position"  > </div>


<style>
  #telecommande{
    position:fixed;
    top:150px; 
    right:0 ; 
  }
  #finger
  {
position:absolute;
background-color:white;
border-radius:100%;
top:0;
  }
  .style_on{
    padding:15px; 
    font-size:2em ;
    border:1px solid black ;
     
  }
  .style_on:hover{
    cursor:pointer ; 
    background-color:rgba(250,0,0,0.3);
    
  }
     body{
      margin: 0 ; 
      padding:0 ;
    }
    iframe{
      width:100%; 
      height: 100% ; 
    } 
    .showcoords_color1{
   
   width:25px; 
   height:25px;
   position:absolute;
   background-color:black ; 
   top:0;
 }
 .opaciti_zero{
opacity:0.2; 
 }
 .opaciti_one{
  opacity:1;
 }
</style>
<script>


var star = true ; 
function start() {
  if(star){
    star = false ;
    document.getElementById("play").className="fa fa-play style_on opaciti_zero" ;
 
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    //document.getElementById("demo").innerHTML = myObj[1].name;
 /*
    console.log(myObj[1].id_showCoords); 
    console.log(myObj[1].adresse_ip); 
    console.log(myObj[1].click); 
    console.log(myObj[1].x_position); 
    console.log(myObj[1].y_position); 
    console.log(myObj[1].reg_date); 
 console.log("Taille"+myObj.length) ; 
*/



 var showcoords_position =document.getElementById("finger") ; 

 
var i_val_array_sourie = 0 ; 
const myInterval = setInterval(myTimer, 10);

function myTimer() {
  const date = new Date();
  console.log("position Y"+myObj[i_val_array_sourie].x_position) ; 
  console.log("position X "+myObj[i_val_array_sourie].x_position) ; 

  showcoords_position.style ="top:"+myObj[i_val_array_sourie].y_position+"px ;"+"left:"+myObj[i_val_array_sourie].x_position+"px" ; 


 document.getElementById("ip_user").innerHTML=myObj[i_val_array_sourie].adresse_ip ; 
 document.getElementById("time_user").innerHTML=myObj[i_val_array_sourie].reg_date ;

 
 


 play
 

  i_val_array_sourie ++ ; 
  if(i_val_array_sourie==myObj.length){
    myStop() ; 
    star = true ;
    document.getElementById("play").className="fa fa-play style_on opaciti_one" ; 
  }
  else {
    
  }
}
function myStop() {
  clearInterval(myInterval);
}



  }
};

xmlhttp.open("GET", "showcoords.php", true);
xmlhttp.send();

}
}
 
</script>

 