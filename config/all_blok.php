<?php
require_once "require_once.php" ;
 
 
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 



 
$description_projet = $_POST["description_projet"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
$description_projet =AsciiConverter::stringToAscii($description_projet);
$databaseHandler->action_sql( "UPDATE  `projet` SET `description_projet` = '$description_projet' WHERE  `id_sha1_projet` ='$id_sha1_projet'  ");

//$id_sha1_projet
require_once 'all_pages_script.php' ; 


 
?>