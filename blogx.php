<?php 
header("Access-Control-Allow-Origin: *");

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

$separation_url = '__';
$url->split_basename($separation_url);
$id_sha1_projet = $url->get_basename() ; 



$json=false ; 

if (strpos($id_sha1_projet, $separation_url) !== false) {
   
   $id_sha1_projet = str_replace($separation_url,"",$id_sha1_projet);
}
else {
   $json = true ; 
}

   

 


require 'view/ref.php' ;



if($json){
   echo json_encode($finalArray, JSON_PRETTY_PRINT);
}
else {

require_once 'view/html_test.php' ; 



}

 


?>


<style>

/*
partie admin 
*/


.id-user {}
.date-user {}
.id-sha1-user {}
.id-parent-user {}
.description-user {}
.title-user {}
.img-user {}
.nom-user {}
.prenom-user {}
.password-user {}
.email-user {}
.activation-user {}
.date-inscription-user {}



/*
Partie Projet
*/

.id-projet {}
.activation-projet {}
.id-general {}
.id-user-projet {}
.id-sha1-user-projet {}
.id-sha1-projet {}
.id-sha1-parent-projet {}
.id-sha1-parent-projet2 {}
.cryptage-projet {}
.input-cryptage-projet {}
.name-projet {}
.name-extension-projet {}
.statut-projet {}
.title-projet {}
.description-projet {}
.password-projet {}
.visibility-1-projet {}
.visibility-2-projet {}
.screen-shoot-projet {}
.img-projet-src1 {}
.img-projet-src2 {}
.img-projet-visibility {}
.group-projet {}
.heure-debut-projet {}
.date-debut-projet {}
.duree-projet {}
.publication-date-j-projet {}
.publication-date-h-projet {}
.shop-projet {}
.date-inscription-projet {}

</style>