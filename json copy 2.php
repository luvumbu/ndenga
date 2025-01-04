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
$projet_1 = [] ; 
$projet_2 = [] ;  
$tabe_name = $url->get_elements()[0];
$tabe_name_info = $url->get_elements()[1];
$id_sha1_projet= $url->get_elements()[2];
$tabe_name_result_parent = $url->get_elements()[3];
 


 require 'view/model_blog1.php' ; 
 require 'view/model_blog2.php' ; 
 require 'view/model_blog3.php' ; 
//for($a = 0 ; $a <$kount ; $a++)
 
for($a = 0 ; $a <$kount ; $a++)
{
 // require 'view/model_blog11.php' ; 
 $id_sha1_projet =  $id_sha1_projet__[$a] ;
 require 'view/model_blog11.php' ; 
array_push($projet_2 ,$namex) ; 
}
  
//var_dump($projet_1) ; 
//var_dump($projet_2) ;  

$finalArray = [

    "admin" =>$id_sha1_user_array ,
    "projet_1" => $id_sha1_projet_name ,
    "projet_2" => $projet_2,
    "projet_3"=> $projet_1
];
 echo json_encode($finalArray, JSON_PRETTY_PRINT);
?> 