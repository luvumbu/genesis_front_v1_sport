
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
 
let array_test ;
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


   
    
 
    /*
    const myTimeout_2 = setTimeout(section_syn,4000);
    const myTimeout_3 = setTimeout(footer_syn,4000);
 */

   // Action a executer apres synchronisation des fichier
 
 function syn_fun() { 
 parent_syn("header_0",true);// synchronisation de la pache enfant et parent
 children_syn("header_0");// synchronisation de la pache enfant et parent
  // exemple 
  
 }
 

 function parent_syn(source_div,value) {
  // condition de fonctionnement si la variable est vrai 
  if(header_objet.header1.value==value){
    document.getElementById(source_div).innerHTML=header_objet.header1.text ; 
         console.log(header_objet.header1.text) ; // information dans la premier table
         console.log(header_objet.header1.elementchildNodes[0][0]) ;
         document.getElementById(source_div).setAttribute("class",header_objet.header1.className) ;
         // identique header_objet.header1.title
         console.log(header_objet.header1.elementchildNodes[0][1]) ;
         document.getElementById(source_div).setAttribute("title",header_objet.header1.title) ;
         //header_objet.header1.id
         console.log(header_objet.header1.elementchildNodes[0][2]) ;
         document.getElementById(source_div).setAttribute("id",source_div) ;         
         //document.getElementById("demo").innerHTML = "I have changed!";         
         console.log(header_objet.header1.text) ; 
         //header_objet.header1.className 
  }
 
 }

 function children_syn(parent_id) {
let quantite1= header_objet.header1.elementchildNodes.length ; 
let quantite2= header_objet.header1.elementchildNodes[0].length ;  
console.log(quantite1+" ; "+quantite2) ; 
for(var i = 0 ;i<quantite1; i++ ){
for(y =0 ; y<quantite2;y++){
  
  if(y==0){
    console.log(header_objet.header1.elementchildNodes[i][y]) ; 
    if(header_objet.header1.elementchildNodes[i][y]==true){
         // Create an "li" node:

                  const node = document.createElement(header_objet.header1.elementchildNodes[i][4]); // atribute
                  const textnode = document.createTextNode(header_objet.header1.elementchildNodes[i][5]); //text
                  node.setAttribute("id", header_objet.header1.elementchildNodes[i][2]); // id
                  node.setAttribute("title", header_objet.header1.elementchildNodes[i][1]);// title                  
                  node.setAttribute("class", header_objet.header1.elementchildNodes[i][3]);// class
                  // donne un atribut
                  // Create a text node:                  
                  // Append the text node to the "li" node:
                  node.appendChild(textnode);                 
                  // Append the "li" node to the list:
                  document.getElementById(parent_id).appendChild(node);
        }
  }
} 
}

 }



 const myTimeout_1 = setTimeout(syn_fun,250);


