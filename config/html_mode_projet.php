<?php
require_once "require_once.php" ;

 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$html_mode_projet_1 = $_POST["html_mode_projet_1"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `html_mode_projet_1` = '".$html_mode_projet_1."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");

//$id_sha1_projet
require_once 'all_pages_script.php' ; 
?>