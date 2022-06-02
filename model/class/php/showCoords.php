<?php
header("Access-Control-Allow-Origin: *");
// fichier pour ajouter les mouvement de la sourie de chaque utilisateur
$servername = "localhost";
$x_position =$_POST["x_position"] ;
$y_position =$_POST["y_position"] ;
$showCoords_ =$_POST["showCoords_"] ;
$width_taille_page =$_POST["width_taille_page"] ;
$height_taille_page =$_POST["height_taille_page"] ;
$ajout = false;
$filename = 'connexion.php';

include("bdd_class.php") ; 
include("connexion.php") ;

echo $dbname ;
echo $username ;
echo $password ;
echo "position en x ".$x_position ; 
echo "position en y ".$y_position ; 
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR']; // adresse ip 

  $execution_formulaire_php = new Bdd_class(
  $servername,
  $username,
  $password,
  $dbname);
 
  $execution_formulaire_php->set_action ("INSERT INTO showCoords (adresse_ip,click,x_position,y_position,width_taille_page,height_taille_page)
  VALUES ('$REMOTE_ADDR','true','$x_position','$y_position','$width_taille_page','$height_taille_page')"); 

?>