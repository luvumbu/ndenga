<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="profil" ; 


$id_sha1_user =  $_POST["id_sha1_user"]; 
 
 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql('UPDATE  `'.$dbname.'` SET `activation_user` = "off"    WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');


?>