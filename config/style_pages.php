<?php 

require_once "require_once.php" ;




 
 
date_default_timezone_set('Europe/Paris');
 



 
$name_style_pages = $_POST["name_style_pages"] ; 


 
$name_style_pages = extraireAlphabetique($name_style_pages);

 
$total_style_pages = $_POST["total_style_pages"] ; 

$header_style_pages = $_POST["header_style_pages"] ; 
 
 $total_style_parent_pages = $_POST["total_style_parent_pages"] ; 


 
$id_sha1_user_projet = $_SESSION["index"][3] ; 
 
$id_sha1_style_page = time().'_'.rand(100,999) ; 



  
$databaseHandler = new DatabaseHandler($dbname, $username);



$total_style_pages = AsciiConverter::stringToAscii($total_style_pages); 
$header_style_pages = AsciiConverter::stringToAscii($header_style_pages); 
$total_style_parent_pages =AsciiConverter::stringToAscii($total_style_parent_pages); 
 

// Afficher la date et l'heure au format spécifié
 

$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `style_pages` (name_style_pages,id_user_style_page,id_sha1_style_page,total_style_pages,date_inscription_style_page,header_style_pages,total_style_parent_pages) VALUES ('$name_style_pages','$id_sha1_user_projet','$id_sha1_style_page','$total_style_pages','$date_inscription_projet','$header_style_pages','$total_style_parent_pages')");
 
require_once "all_pages_script_style.php" ; 
 
 
?>













