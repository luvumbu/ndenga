<?php 
$grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg" ; 
require_once "Class/Give_url.php" ; 
require_once "Class/DatabaseHandler.php" ; 
require_once "Class/dbCheck.php" ; 
require_once 'Class/AsciiConverter.php';
//require_once 'function/add_ip.php';
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$id_sha1_projet = $url->get_basename() ;  
// $tabe_name = $url->get_elements()[0];
require 'view/ref.php' ;
//echo json_encode($finalArray, JSON_PRETTY_PRINT);


 
   echo json_encode($finalArray, JSON_PRETTY_PRINT);
 


?> 