<?php
require_once "require_once.php";

$id_sha1_parent_projet = $_POST["id_sha1_parent_projet"];
$title_projet = AsciiConverter::stringToAscii($_POST["title_projet"]);
$description_projet = AsciiConverter::stringToAscii($_POST["description_projet"]);


$date_debut_projet = $_POST["date_debut_projet"];
 

 
 

$id_sha1_projet =      time();  



 
$_SESSION["home"] ="" ; 
$time = time().'_'.rand(1000,9999) ; 


$time_1 = date("Y-m-d",$t) ; 

$id_sha1_projet = $time ; 

$id_sha1_user_projet = $_SESSION["index"][3] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
// Afficher la date et l'heure au format spécifié

$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `projet` (
id_sha1_parent_projet,
title_projet,
description_projet,
id_sha1_user_projet,
id_sha1_projet,
date_debut_projet,
date_inscription_projet


) VALUES (
'$id_sha1_parent_projet',
'$title_projet',
'$description_projet',
'$id_sha1_user_projet',
'$id_sha1_projet',
'$date_debut_projet',
'$time_1'

)");
 
 require_once 'all_pages_script.php' ; 




?>
