<?php
require_once "require_once.php" ;

$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$color_projet = $_POST["color_projet"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `color_projet` = '".$color_projet."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");


$_SESSION["id_sha1_projet"] = $id_sha1_projet ;


$_SESSION["home"] = "";
require_once 'all_pages_script.php' ; 




?>