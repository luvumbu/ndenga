<?php 
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
require_once '../Class/AsciiConverter.php';
require_once '../Class/Give_url.php';



 
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
 
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('_');
 

 
$URL =$url->get_basename() ; 


?>

<meta http-equiv="refresh" content="0; URL=../lecture.php/<?= $URL ?>">
