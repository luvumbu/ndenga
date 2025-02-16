<?php
require_once "require_once.php" ;

 

$id_sha1_projet =  $_POST["id_sha1_projet"]; 
$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `projet` SET `activation_projet` = "off"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');

//$id_sha1_projet
require_once 'all_pages_script.php' ; 
?>