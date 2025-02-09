<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$style_pages_projet = $_POST["style_pages_projet"] ; 
 

 


 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET  `style_pages_projet` = '".$style_pages_projet."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");
 

?>