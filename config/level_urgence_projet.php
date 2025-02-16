<?php
require_once "require_once.php" ;

 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$level_urgence_projet = $_POST["level_urgence_projet"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `level_urgence_projet` = '".$level_urgence_projet."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");

//$id_sha1_projet
require_once 'all_pages_script.php' ; 
?>