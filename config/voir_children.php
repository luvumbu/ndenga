<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php" ; 
require_once "../Class/DatabaseHandler.php" ;
require_once "../Class/AsciiConverter.php" ;
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="" ; 
 

?>