<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$change_meta_content = $_POST["change_meta_content"] ; 
 

echo  $change_meta_content ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `change_meta_name_projet` = '".$change_meta_content."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");


?>