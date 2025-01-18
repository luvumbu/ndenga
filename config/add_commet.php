<?php

session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php";

date_default_timezone_set('Europe/Paris');

$name_comment_projet = $_POST["name_comment_projet"];
$text_comment_projet = $_POST["text_comment_projet"];
$id_sha1_comment_projet = $_POST["id_sha1_comment_projet"];




$time = time() . '_' . rand(100, 999);

$databaseHandler = new DatabaseHandler($dbname, $username);





// Afficher la date et l'heure au format spécifié


$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `comment_projet` (id_general,name_comment_projet,text_comment_projet,id_sha1_comment_projet) VALUES ('$time','$name_comment_projet','$text_comment_projet','$id_sha1_comment_projet')");
