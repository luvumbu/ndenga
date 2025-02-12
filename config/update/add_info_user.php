<?php 
require_once "../require_once.php"; 

date_default_timezone_set('Europe/Paris');
 
$id_parent_user = $_SESSION["index"][3] ; 
 
$id_sha1_user =      time();  
 
$time = time().'_'.rand(100,999) ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);



$date_inscription = date("Y-m-d H:i:s");

 
$databaseHandler->action_sql("INSERT INTO `$dbname` (id_sha1_user,id_parent_user,date_inscription_user) VALUES ('$time','$id_parent_user','$date_inscription')");
 
?>