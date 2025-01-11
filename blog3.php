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
$url->split_basename('_');
$id_sha1_projet = $url->get_basename() ; 
  




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


   "projet" => $id_sha1_projet_name ,
   "child_projet_1" => $projet_2,
   "child_projet_2"=> $projet_1,
   "admin" =>$id_sha1_user_array 





];
//echo json_encode($finalArray, JSON_PRETTY_PRINT);
// 
var_dump($id_sha1_projet_name) ; 

?>






