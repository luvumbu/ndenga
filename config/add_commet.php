<?php 
require_once "require_once.php" ;
 
 
$databaseHandler = new DatabaseHandler($dbname, $username);


$id_sha1_comment_projet = $_POST["id_sha1_comment_projet"] ;
$text_comment_projet = $_POST["text_comment_projet"] ;
$id_user_sha1_comment_projet = $_SESSION["index"][3] ; 

// Afficher la date et l'heure au format spécifié
 
$time = time().'_'.rand(10,99);
$timestamp_comment_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `comment_projet` (id_general,id_user_sha1_comment_projet,timestamp_comment_projet,text_comment_projet,id_sha1_comment_projet) VALUES ('$time','$id_user_sha1_comment_projet','$timestamp_comment_projet','$text_comment_projet','$id_sha1_comment_projet')");
 





 
?>