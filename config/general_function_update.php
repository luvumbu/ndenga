<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php" ; 
require_once "../Class/DatabaseHandler.php" ;
require_once "../Class/AsciiConverter.php" ;
/* 
$general_function =  $_POST["general_function"]; // const
$id_sha1_projet_time = time() . rand(10, 99);
$id_user_projet = $_POST["id_user_projet"]; //3
$id_sha1_user_projet = $_POST["id_sha1_user_projet"]; // 4
 */ 
$id_sha1_projet   = $_POST["id_sha1_projet"] ;  
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="" ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$value = AsciiConverter::stringToAscii($value); // Affiche "72,101,108,108,111"
$textInput2 =  AsciiConverter::stringToAscii($_POST['textInput2'])  ; 
$textInput0 = AsciiConverter::stringToAscii($_POST['textInput0'])   ; 
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "'.$textInput2.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "'.$textInput0.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
?>