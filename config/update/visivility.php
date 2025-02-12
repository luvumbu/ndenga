<?php
require_once "../require_once.php"; 
 
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="" ; 


$id_sha1_projet =  $_POST["id_sha1_projet"]; 
$visivility = $_POST["visivility"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "'.$visivility.'"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');

//$id_sha1_projet
require_once 'all_pages_script.php' ; 
?>