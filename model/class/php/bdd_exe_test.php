<?php
session_start() ; 
/*
Fichier de configuration appartir du renvoi de requette lorsque le fichier Connexion n'existe pas
*/
header("Access-Control-Allow-Origin: *");
include("bdd_class_exe.php") ; // nom de la fonction a ajouter 

$servername ="localhost" ; 
$username= $_POST["username"]; 
$password= $_POST["password"]; 
$dbname= $_POST["dbname"];
$_SESSION["alpha"] = "Erreur de mot de passe ou identifiant" ; 
 
/*
  //********************************************
  //*informations envoye a l'aide du formulaire*
  //*si le fichier connexion.php n'existe pas  *
  //******************************************** 
*/ 

$servername = "localhost";
$n="\n";
$debut="<?php".$n;
$fin="?>".$n;

// nom du fichier courant
$nom_file = "connexion.php";
$execution_formulaire_php = new Bdd_class(
  $servername,
  $username,
  $password,
  $dbname);
  
  //echo $execution_formulaire_php->exe();
  
  
    $execution_formulaire_php->set_action ("CREATE TABLE showCoords (
      id_showCoords	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      adresse_ip VARCHAR(30) NOT NULL,
      click VARCHAR(30) NOT NULL,
      x_position VARCHAR(30) NOT NULL,
      width_taille_page VARCHAR(30) NOT NULL,
      height_taille_page VARCHAR(30) NOT NULL,
      y_position VARCHAR(50),
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )");  
  
  
  $execution_formulaire_php->set_action ("CREATE TABLE information_user (
    id_information_user	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    password_information_user VARCHAR(500) NOT NULL,
    mail_information_user VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");
     
      if( $execution_formulaire_php->get_exe_resul()){
        // si il ya pas d'erreur  creer le fichier
        $texte=   $debut.$n.'$dbname="'.$dbname.'";'.$n.'$username="'.$username.'";'.$n.'$password="'.$password.'";'.$n.'$servername="'.$servername.'";'.$n.$n.$fin;

        // création du fichier
        $f = fopen($nom_file, "x+");
        // écriture
        fputs($f, $texte );
        // fermeture
        fclose($f);
      }
  