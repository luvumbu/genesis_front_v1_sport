<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mon_cv_ndenga_bdd";



class Bdd_class {
  public $servername ; 
  public $username; 
  public $password; 
  public $dbname; 
  public $con  ; 
  public $sql  ; 
  public $row_count = 0 ; 


public $row_name =array(
  false,false,false,false,false,
  false,false,false,false,false,
  false,false,false,false,false,
  false,false,false,false,false,
  false,false,false,false,false 
);

// demander a la base de donne le nom de la date par defaut tout est en faux
// si lutilisateur n'aoute pas de valuer il ne ce passe rien pour eviter une erreur dans le code 



public $get_row_1 =array();
public $get_row_2 =array();
public $get_row_3 =array();
public $get_row_4 =array();
public $get_row_5 =array();

public $get_row_6 =array();
public $get_row_7 =array();
public $get_row_8 =array();
public $get_row_9 =array();
public $get_row_10 =array();

public $get_row_11 =array();
public $get_row_12 =array();
public $get_row_13 =array();
public $get_row_14 =array();
public $get_row_15 =array();

public $get_row_16 =array();
public $get_row_17 =array();
public $get_row_18 =array();
public $get_row_19 =array();
public $get_row_20 =array();

public $get_row_21 =array();
public $get_row_22 =array();
public $get_row_23 =array();
public $get_row_24 =array();
public $get_row_25 =array();
 
 /*
valeur row dans la basse de donne 
possibilite de prendre jusqu'un  25 element 
il sont vide par defaut

 */



 


 
// Partie 01 Demande a l'utilisateur le nom de la base de donne ainsi que le mot de passe de connexion 
  function __construct($servername,
  $username,
  $password,
  $dbname) {
    $this->servername= $servername;
    $this->username= $username;
    $this->password= $password;
    $this->dbname= $dbname;

    $this->con= new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
  }

  function servername() {
    return $this->servername;
  }
  function username() {
    return $this->username;
  }
  function password() {
    return $this->password;
  }
  function dbname() {
    return $this->dbname;
  }

  function get_servername() {
    return $this->servername;
  }
  function get_username() {
    return $this->username;
  }
  function get_password() {
    return $this->password;
  }
  function get_dbname() {
    return $this->dbname;
  }

function array_push_row_name($row,$number){
 
$this->row_name[$number] = $row; 
  
}

 
 function get_row_1($number){
   return $this->get_row_1[$number] ; 
 }
 function get_row_2($number){
  return $this->get_row_2[$number] ; 
}
function get_row_3($number){
  return $this->get_row_3[$number] ; 
}
function get_row_4($number){
  return $this->get_row_4[$number] ; 
}
function get_row_5($number){
  return $this->get_row_5[$number] ; 
}
function get_row_6($number){
  return $this->get_row_6[$number] ; 
}
function get_row_7($number){
  return $this->get_row_7[$number] ; 
}
function get_row_8($number){
  return $this->get_row_8[$number] ; 
}
function get_row_9($number){
  return $this->get_row_9[$number] ; 
}
function get_row_10($number){
  return $this->get_row_10[$number] ; 
}
function get_row_11($number){
  return $this->get_row_11[$number] ; 
}

function get_row_12($number){
  return $this->get_row_12[$number] ; 
}
function get_row_13($number){
 return $this->get_row_13[$number] ; 
}
function get_row_14($number){
 return $this->get_row_14[$number] ; 
}
function get_row_15($number){
 return $this->get_row_15[$number] ; 
}
function get_row_16($number){
 return $this->get_row_16[$number] ; 
}
function get_row_17($number){
 return $this->get_row_17[$number] ; 
}
function get_row_18($number){
 return $this->get_row_18[$number] ; 
}
function get_row_19($number){
 return $this->get_row_19[$number] ; 
}
function get_row_20($number){
 return $this->get_row_20[$number] ; 
}

function get_row_21($number){
  return $this->get_row_21[$number] ; 
 }
 function get_row_22($number){
  return $this->get_row_22[$number] ; 
 }
 function get_row_23($number){
  return $this->get_row_23[$number] ; 
 }
 function get_row_24($number){
  return $this->get_row_24[$number] ; 
 }
 
 // Methode de recuperation de 1 a  24 

 

function set_sql($sql) {
  $this->sql=$sql ;
}
function get_sql(){
  return $this->sql;
}
// 

function get_row_count(){
  return $this->row_count ;

  // nombre des element ajoute dans le tableu de a BDD 
}

function exe(){ // test si ya pas d'erreur dans le code 
  try {
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return true  ; 
    } catch(PDOException $e) {
     // echo "Connection failed: " . $e->getMessage();
       
      return false; 
    }
}


function set_action($sql){   
 
  if($this->exe()){
  // Create connection
  $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // sql to create table
  $conn->query($sql) ;
  $conn->close(); 

  }
}
function exe_select() {
 // lexecution doit etre realiser en dernier apres avoir ajouté tous les parametres 
// Check connection
if ($this->con->connect_error) {
  die("Connection failed: " .  $this->con->connect_error);
}

$this->get_sql = $this-> get_sql();
$result =  $this->con->query($this->get_sql);

if ($result->num_rows > 0) {
  $number = 0 ; 
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

 

    if( $this->row_name[0]!=false){
     //array_push( $this->get_row_1,)   
      array_push( $this->get_row_1,$row[$this->row_name[0]]) ; 
      }
    if( $this->row_name[1]!=false){
      array_push( $this->get_row_2,$row[$this->row_name[1]]) ; 
      }
    if( $this->row_name[2]!=false){
      array_push( $this->get_row_2,$row[$this->row_name[2]]) ; 
      }
    if( $this->row_name[3]!=false){
      array_push( $this->get_row_3,$row[$this->row_name[3]]) ; 
      }
    if( $this->row_name[4]!=false){
      array_push( $this->get_row_4,$row[$this->row_name[4]]) ; 
      }
    if( $this->row_name[5]!=false){
      array_push( $this->get_row_5,$row[$this->row_name[5]]) ; 
      }
    if( $this->row_name[6]!=false){
      array_push( $this->get_row_6,$row[$this->row_name[6]]) ; 
      }
    if( $this->row_name[7]!=false){
      array_push( $this->get_row_7,$row[$this->row_name[7]]) ; 
      }
    if( $this->row_name[8]!=false){
      array_push( $this->get_row_8,$row[$this->row_name[8]]) ; 
      }
    if( $this->row_name[9]!=false){
      array_push( $this->get_row_9,$row[$this->row_name[9]]) ; 
      }
    if( $this->row_name[10]!=false){
      array_push( $this->get_row_10,$row[$this->row_name[10]]) ; 
      }
    if( $this->row_name[11]!=false){
      array_push( $this->get_row_11,$row[$this->row_name[11]]) ; 
      }
    if( $this->row_name[12]!=false){
      array_push( $this->get_row_12,$row[$this->row_name[12]]) ; 
      }
    if( $this->row_name[13]!=false){
      array_push( $this->get_row_13,$row[$this->row_name[13]]) ; 
      }
    if( $this->row_name[14]!=false){
      array_push( $this->get_row_14,$row[$this->row_name[14]]) ; 
      }
    if( $this->row_name[15]!=false){
      array_push( $this->get_row_15,$row[$this->row_name[15]]) ; 
      }
    if( $this->row_name[16]!=false){
      array_push( $this->get_row_16,$row[$this->row_name[16]]) ; 
      }
    if( $this->row_name[17]!=false){
      array_push( $this->get_row_17,$row[$this->row_name[17]]) ; 
      }
    if( $this->row_name[18]!=false){
      array_push( $this->get_row_18,$row[$this->row_name[18]]) ; 
      }
    if( $this->row_name[19]!=false){
      array_push( $this->get_row_19,$row[$this->row_name[19]]) ; 
      }
    if( $this->row_name[20]!=false){
      array_push( $this->get_row_20,$row[$this->row_name[20]]) ; 
      }
      if( $this->row_name[21]!=false){
    //array_push( $this->get_row_1,)   
       array_push( $this->get_row_21,$row[$this->row_name[21]]) ; 
      }
     if( $this->row_name[22]!=false){
       array_push( $this->get_row_22,$row[$this->row_name[22]]) ; 
       }
     if( $this->row_name[23]!=false){
        array_push( $this->get_row_23,$row[$this->row_name[23]]) ; 
      }
      if( $this->row_name[24]!=false){
      array_push( $this->get_row_24,$row[$this->row_name[24]]) ; 
      } 
  $this->row_count ++ ;   
  }
} else {
  echo "0 results";
}
 $this->con->close();

}



  

}


// Exemple de code 
//$apple = new Bdd_class($servername ,$username,$password,$dbname);
/*
$apple->array_push_row_name("id_showCoords",0) ; 
$apple->array_push_row_name("adresse_ip",1) ; 
$apple->array_push_row_name("click",2) ; 
$apple->array_push_row_name("x_position",3) ; 
$apple->array_push_row_name("width_taille_page",4) ; 
$apple->array_push_row_name("height_taille_page",5) ; 
$apple->array_push_row_name("y_position",6) ; 
$apple->array_push_row_name("reg_date",7) ; 
$apple->array_push_row_name("width_taille_page",8) ; 
$apple->array_push_row_name("height_taille_page",9) ; 
$apple->array_push_row_name("y_position",10) ; 
$apple->array_push_row_name("reg_date",11) ; 


 $apple->set_sql('SELECT * FROM `showcoords` WHERE 1'); 

$apple->exe_select() ; 
 

//echo $apple-> get_row_1(0) ;  


/*

for($i=0 ; $i<5 ; $i++) {
 
  echo $apple->get_row_1($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_2($i) ;
  echo  "<br/>" ; 

  echo $apple->get_row_3($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_4($i) ;
  echo  "<br/>" ; 

  echo $apple->get_row_5($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_6($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_7($i) ;
  echo  "<br/>" ; 

  echo $apple->get_row_8($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_9($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_10($i) ;
  echo  "<br/>" ; 
  echo $apple->get_row_11($i) ;
  echo  "<br/>" ; 
    

}
*/
 
/*
effacer element d'une table 
$apple->set_action("DELETE FROM `showcoords` WHERE `showcoords`.`id_showCoords` = 89") ;
*/ 

//$apple->set_action("UPDATE `showcoords` SET `x_position` = 'BRAVO' WHERE `showcoords`.`id_showCoords` = 5") ;
/*
creer une table
$apple->set_action("CREATE TABLE Alomechor (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )") ;


  */
 
?>