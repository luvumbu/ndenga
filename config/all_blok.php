<?php
require_once "require_once.php" ;
 


$description_projet = $_POST["description_projet"] ; 
$title_projet = $_POST["title_projet"] ; 
 
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
 

$title_projet =  AsciiConverter::stringToAscii($title_projet); // Affiche "72,101,108,108,111"
 
$description_projet =  AsciiConverter::stringToAscii($description_projet); // Affiche "72,101,108,108,111"
 
 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "'.$title_projet.'" , `description_projet` = "'.$description_projet.'"  WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');




$_SESSION["id_sha1_projet"] = $id_sha1_projet ;


$_SESSION["home"] = "";


require_once 'all_pages_script.php' ; 
 
?>
 