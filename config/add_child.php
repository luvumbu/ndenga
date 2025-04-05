<?php 
require_once "require_once.php" ;
$nom_user =             $_POST["nom_user"] ; 
$password_user =        $_POST["password_user"] ; 
$id_user_projet =       $_POST["id_user_projet"] ; 
$id_sha1_user_projet = $_SESSION["index"][3] ; 
$general_function =     $_POST["general_function"] ; 
$tagName =              $_POST["tagName"] ; 
$id_sha1_projet =      time();  
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="" ; 
$time = time().'_'.rand(100,999) ; 
 $id_sha1_parent_projet = $_POST["id_sha1_projet"]; 
$databaseHandler = new DatabaseHandler($dbname, $username);
// Afficher la date et l'heure au format spécifié

$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `projet` (id_user_projet,id_sha1_user_projet,id_sha1_projet,id_sha1_parent_projet,date_inscription_projet) VALUES ('$id_user_projet','$id_sha1_user_projet','$time','$id_sha1_parent_projet','$date_inscription_projet')");
 

$_SESSION["id_sha1_projet2"] = $time ; 

require_once "all_pages_script.php" ;
 
?>