<?php
require_once "require_once.php" ;

 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$change_meta_content = $_POST["change_meta_content"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `change_meta_content_projet` = '".$change_meta_content."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");

$_SESSION["id_sha1_projet"] = $id_sha1_projet ;


$_SESSION["home"] = "";
require_once 'all_pages_script.php' ; 
?>