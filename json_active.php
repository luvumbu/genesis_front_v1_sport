<script>

const header ="header" ; 
const section ="section" ; 
const footer ="footer" ;  

const header_link ="json/header.json";
// liens vers fichier Json 
const section_link ="json/section.json";
// liens vers fichier Json 
const footer_link  ="json/footer.json";
// liens vers fichier Json 

let header_objet  ;
// preparation des object a cloner 
let section_objet ;
// preparation des object a cloner 
let footer_objet  ;
// preparation des object a cloner 
 

function body_link_fun(general_link,sourceX) { 

    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     
        text= this.responseText;   
      const myArr = JSON.parse(text);
 //dit = myArr.header1.Name_element ;

 switch(sourceX) {
  case "header":
    header_objet = myArr; 
    // clonage de l'objet dans une variable exterieur
    break;
  case "section":
    section_objet = myArr; 
    // clonage de l'objet dans une variable exterieur
    break;
    case "footer":
    footer_objet = myArr; 
    // clonage de l'objet dans une variable exterieur
    break;
  default:
    // code block
}
 
    }
  };
  xhttp.open("GET", general_link, true); 
 // xhttp.open("GET", "json/header.json", true);
  xhttp.send();
 
}
    body_link_fun("json/header.json",header) ; 
    body_link_fun("json/section.json",section) ; 
    body_link_fun("json/footer.json",footer) ; 
   
    const myTimeout_1 = setTimeout(synchronisation_fun_obj,250);
 

   // Action a executer apres synchronisation des fichier
 
 function synchronisation_fun_obj() { 

  
   console.log("<header") ; 
          console.log(header_objet) ; 
  console.log(">") ; 
   console.log("<section") ; 
  console.log(section_objet) ;  
   console.log(">") ;
      console.log("<footer") ; 
  console.log(footer_objet) ;   
  console.log(">") ;
  console.log("XXXXXXXXXXXXXXXXXXXXXxxxx") ; 

 
   
  
 }
 




 



 




/*
function header_total_fun_active() { 
   
    var para = document.createElement("p");
    para.setAttribute("class", "democlass");
para.innerHTML =  header_total.header1.Name_element;
document.getElementById("header_0").appendChild(para);
     
}
*/




 
</script>
<style>
  .democlass{
    background-color: black;
    color:white ;
  }
</style>
</body>
</html>
