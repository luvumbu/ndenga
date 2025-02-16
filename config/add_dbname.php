<?php 

require_once "require_once.php" ;



$id_parent_user =             $_POST["id_parent_user"] ; 
 
 
 
$_SESSION["home"] ="profil" ; 
$time = time().'_'.rand(100,999) ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);





// Afficher la date et l'heure au format spécifié
 

$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `$dbname` (id_sha1_user,id_parent_user) VALUES ('$time','$id_parent_user')");
 
?>