<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 

$id_sha1_projet =  $_POST["id_sha1_projet"]; 
$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `projet` SET `activation_projet` = "off"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');

//$id_sha1_projet
require_once 'all_pages_script.php' ; 
?>