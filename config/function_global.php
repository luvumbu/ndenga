<?php
require_once "require_once.php";
$date_inscription_projet = date("Y-m-d H:i:s");
// Chemin du dossier à créer
$id_sha1_projet_time = $id_sha1_user_projet = $_POST["id_sha1_user_projet"]; 
$id_sha1_projet = time() .'_'. rand(0, 9);
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_user_projet,id_sha1_projet,date_inscription_projet) VALUES ('$id_sha1_user_projet','$id_sha1_projet','$date_inscription_projet')");
$_SESSION["id_sha1_user_projet"] = $_POST["id_sha1_user_projet"]; // 4
$_SESSION["home"] = "insert";
$_SESSION["id_sha1_projet"] = $id_sha1_projet ; 

?>