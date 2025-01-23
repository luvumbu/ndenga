<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$color_projet = $_POST["color_projet"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `color_projet` = '".$color_projet."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");


?>