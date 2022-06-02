<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hr_consulting_v2";

class Bdd_info {

  public $servername ;
  public $username;
  public $password;
  public $dbname;


  public $switch_all = array(
      "",
      "",
      "",
      "",
      "",

      "",
      "",
      "",
      "",
      "",

      "",
      "",
      "",
      "",
      "",

      "",
      "",
      "",
      "",
      "",

      "",
      "",
      "",
      "",
      "",
      ""


    );

  public $variable_switch_0 = array() ;   
  public $variable_switch_1 = array() ; 
  public $variable_switch_2 =array() ;  
  public $variable_switch_3 =array() ;  
  public $variable_switch_4 =array() ;  
  public $variable_switch_5 =array() ;  

  public $variable_switch_6 =array() ;  
  public $variable_switch_7 =array() ;  
  public $variable_switch_8 =array() ;  
  public $variable_switch_9 =array() ;  
  public $variable_switch_10 =array() ;  

  public $variable_switch_11 =array() ;  
  public $variable_switch_12 =array() ;  
  public $variable_switch_13 =array() ;  
  public $variable_switch_14 =array() ;  
  public $variable_switch_15 =array() ;  

  public $variable_switch_16 =array() ;  
  public $variable_switch_17 =array() ;  
  public $variable_switch_18 =array() ;  
  public $variable_switch_19 =array() ;  
  public $variable_switch_20 =array() ;  

  public $variable_switch_21 = array() ; 
  public $variable_switch_22 =array() ;  
  public $variable_switch_23 =array() ;  
  public $variable_switch_24 =array() ;  
  public $variable_switch_25 =array() ; 


 

  function __construct(
      $servername,
      $username,
      $password,
      $dbname
      ) 
      
  {
                $this->servername = $servername;
                $this->username = $username;
                $this->password = $password;
                $this->dbname = $dbname;
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
        function set_sql($sql){
            $this->sql =$sql; 
        } 

        function set_switch_all($val,$num){
                $this->switch_all[$num]=$val;
        }
        function get_switch_all($num){

            return  $this->switch_all[$nym];
        }

        function get_sql(){
            return $this->sql  ; 
        } 

        function action_all($value) {
          
                                        // Create connection
                            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = $value;
                                
                                if ($conn->query($sql) === TRUE) {
                                echo "Table MyGuests created successfully";
                                } else {
                                echo "Error creating table: " . $conn->error;
                                }
                                
                                $conn->close();
        }


        function exe() {

                                        // Create connection
                            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = $this->get_sql() ;
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              

                                if($this->switch_all[0]!=""){
                                    
                                    array_push($this->variable_switch_0,$row[$this->switch_all[0]]);

                                  //  echo $this->variable_switch_0[0] ; 
                                     
                                }
                                if($this->switch_all[1]!=""){
                                     array_push($this->variable_switch_1,$row[$this->switch_all[1]]);
                                     
                                }
                                if($this->switch_all[2]!=""){
                                     array_push($this->variable_switch_2,$row[$this->switch_all[2]]);
                                     
                                }
                                if($this->switch_all[3]!=""){
                                     array_push($this->variable_switch_3,$row[$this->switch_all[3]]);
                                     
                                }
                                if($this->switch_all[4]!=""){
                                     array_push($this->variable_switch_4,$row[$this->switch_all[4]]);
                                     
                                }

                                if($this->switch_all[5]!=""){
                                     array_push($this->variable_switch_5,$row[$this->switch_all[5]]);
                                     
                                }
                                if($this->switch_all[6]!=""){
                                     array_push($this->variable_switch_6,$row[$this->switch_all[6]]);
                                     
                                }
                                if($this->switch_all[7]!=""){
                                     array_push($this->variable_switch_7,$row[$this->switch_all[7]]);
                                     
                                }
                                if($this->switch_all[8]!=""){
                                     array_push($this->variable_switch_8,$row[$this->switch_all[8]]);
                                     
                                }
                                if($this->switch_all[9]!=""){
                                     array_push($this->variable_switch_9,$row[$this->switch_all[9]]);
                                     
                                }

                                if($this->switch_all[10]!=""){
                                     array_push($this->variable_switch_10,$row[$this->switch_all[10]]);
                                     
                                }
                                if($this->switch_all[11]!=""){
                                     array_push($this->variable_switch_11,$row[$this->switch_all[11]]);
                                     
                                }
                                if($this->switch_all[12]!=""){
                                     array_push($this->variable_switch_12,$row[$this->switch_all[12]]);
                                     
                                }
                                if($this->switch_all[13]!=""){
                                     array_push($this->variable_switch_13,$row[$this->switch_all[13]]);
                                     
                                }
                                if($this->switch_all[14]!=""){
                                     array_push($this->variable_switch_14,$row[$this->switch_all[14]]);
                                     
                                }

                                if($this->switch_all[15]!=""){
                                     array_push($this->variable_switch_15,$row[$this->switch_all[15]]);
                                     
                                }
                                if($this->switch_all[16]!=""){
                                     array_push($this->variable_switch_16,$row[$this->switch_all[16]]);
                                     
                                }
                                if($this->switch_all[17]!=""){
                                     array_push($this->variable_switch_17,$row[$this->switch_all[17]]);
                                     
                                }
                                if($this->switch_all[18]!=""){
                                     array_push($this->variable_switch_18,$row[$this->switch_all[18]]);
                                     
                                }
                                if($this->switch_all[19]!=""){
                                     array_push($this->variable_switch_19,$row[$this->switch_all[19]]);
                                     
                                }
                                if($this->switch_all[20]!=""){
                                     array_push($this->variable_switch_20,$row[$this->switch_all[20]]);
                                     
                                }
                                if($this->switch_all[21]!=""){
                                     array_push($this->variable_switch_21,$row[$this->switch_all[21]]);
                                     
                                }
                                if($this->switch_all[22]!=""){
                                     array_push($this->variable_switch_22,$row[$this->switch_all[22]]);
                                     
                                }
                                if($this->switch_all[23]!=""){
                                     array_push($this->variable_switch_23,$row[$this->switch_all[23]]);
                                     
                                }
                                if($this->switch_all[24]!=""){
                                     array_push($this->variable_switch_24,$row[$this->switch_all[24]]);
                                     
                                }
                                if($this->switch_all[25]!=""){
                                     array_push($this->variable_switch_25,$row[$this->switch_all[25]]);
                                     
                                }
                                
                               
                            }
                            } else {
                            echo "0 results";
                            }
                            $conn->close();
        }


}

$apple = new Bdd_info(
$servername,
$username,
$password,
$dbname
);

// Etape n°1 

 $apple->set_sql('SELECT * FROM `showcoords` WHERE 1');
 // Etape idependante creation d'une table 1_001

 
 $apple->action_all('CREATE TABLE test_valid (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )'); 

  // Etape idependante creation d'une table 1_002

$apple->action_all('UPDATE `showcoords` SET `click` = "Je reussi le test ok " WHERE `showcoords`.`id_showCoords` = 1'); 











  //$apple->sql("");

  // Etape n°2 sleection dans $row 

  $apple->switch_all[0] = "adresse_ip" ; 
  $apple->switch_all[1] = "click" ; 
  $apple->switch_all[2] = "x_position" ; 
  $apple->switch_all[3] = "width_taille_page" ; 
  $apple->switch_all[4] = "height_taille_page" ; 
  $apple->switch_all[5] = "y_position" ; 
  $apple->switch_all[6] = "reg_date" ; 


// Etape n° 3 execution du code
  


$apple->exe();




// Etape n° 4 recupetation des donnees 
echo $apple->variable_switch_1[0] ; 
echo $apple->variable_switch_2[1] ;  
 



?>