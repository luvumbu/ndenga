<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="profil" ; 


$id_sha1_user =  $_POST["id_sha1_user"]; 
$title_user =  $_POST["title_user"]; 
$description_user =  $_POST["description_user"]; 
 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 $date_user = $_POST["date_user"] ; 

$databaseHandler->action_sql('UPDATE  `'.$dbname.'` SET `date_user` = "'.$date_user.'" , `title_user` = "'.$title_user.'" ,`description_user` = "'.$description_user.'"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');


?>