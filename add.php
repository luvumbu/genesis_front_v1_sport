<!DOCTYPE html>
<html>
<body>

 

<div id="demo"> 
<button type="button" onclick="loadXMLDoc()">Change Content</button>
</div>

<div id="myDIV"></div>
<script>

document.getElementById("app_section").innerhtml ="test" ; 
 
var  fruits = [""];

function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
        text= this.responseText; 

  
      const myArr = JSON.parse(text);
   

     

console.log("XXXXXXXXXXXXXXX") ; 

console.log(myArr) ; 

 console.log("XXXXXXXXXXXXXXX") ; 
 
console.log(myArr.sort()) ; 

 

  
    }
  };
  xhttp.open("GET", "https://bokonzi.com/genesis_sport/back/index.php/!1!get_result_villes_nom=a", true);
  xhttp.send();
}




 
 
</script>

</body>
</html>
