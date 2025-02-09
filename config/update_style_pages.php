<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";
 
echo "UPdate"  ; 

$name_style_pages =  $_POST["name_style_pages"] ;  // ok


$total_style_pages =  $_POST["total_style_pages"] ; 


$id_sha1_style_page = $_POST["id_sha1_style_page"] ;  // ok 

$header_style_pages = $_POST["header_style_pages"] ; // ok

  
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `style_pages` SET `name_style_pages` = '$name_style_pages',`total_style_pages` = '$total_style_pages' ,`header_style_pages` = '$header_style_pages'   WHERE  `id_sha1_style_page` ='$id_sha1_style_page'  ");

 
?>