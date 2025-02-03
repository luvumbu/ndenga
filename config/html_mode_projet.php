<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$html_mode_projet = $_POST["html_mode_projet"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `html_mode_projet` = '".$html_mode_projet."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");


?>