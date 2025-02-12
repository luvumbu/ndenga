<?php

session_start();
header("Access-Control-Allow-Origin: *");



?>


<body>
    <?php
  $grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg";
  require_once "Class/Give_url.php";
  require_once "Class/DatabaseHandler.php";
  require_once "Class/dbCheck.php";
  require_once 'Class/AsciiConverter.php';
 

  //require_once 'function/add_ip.php';
  // Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
  $url = new Give_url();
  // Afficher le nom du fichier actuel
  // Utilisation de la méthode split_basename pour séparer par "_"

  $separation_url = '__';
  $url->split_basename($separation_url);
  $id_sha1_projet = $url->get_basename();
 

  $name_file_1 = $id_sha1_projet.".php" ; 
  $name_file_2 = $id_sha1_projet."_c.php" ; 


  $row_file = "row_projet_173912757656" ; 

 

  require_once 'all_pages/'.$name_file_1  ; 
  require_once 'all_pages/'.$name_file_2.''  ; 

  require_once 'view/divHierarchy_array.php' ; 




  /*
  
  var_dump($divHierarchy_array) ; 
  var_dump($row_projet)  ;
  var_dump($row_projet_c)  ;

*/




var_dump($row_projet)  ;



$nom_provisoir_1 = "v01z"; // Nom de la nom_provisoir cible
$nom_provisoir_2 = "v02z"; // Nom de la nom_provisoir cible



// Créer la nom_provisoir dynamique avec le nom de $nom_provisoir et lui affecter la valeur de $nom_provisoir2
$$nom_provisoir_1 = $row_projet; 
$$nom_provisoir_2 = $row_projet_c; 


// Afficher la valeur de la variable dynamique


 
 
$row_style_array=array();

for ($i=0; $i < count($row_projet); $i++) { 
 
  require 'all_style/'.$row_projet[$i]["style_pages_projet"].'.php';

  
 
array_push($row_style_array,$row_style);
  }




  var_dump($row_projet_c);

  for ($i=0; $i < count($row_projet_c); $i++) { 
 
     
 
  echo "<br/>" ;
echo $i ; 
   
 
    }
  



 
 



  ?>