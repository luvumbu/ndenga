<?php 

session_start();
header("Access-Control-Allow-Origin: *");

require_once "Class/dbCheck.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/AsciiConverter.php";

date_default_timezone_set('Europe/Paris');

$time = time() . '_' . rand(100, 999); // Génération de l'ID unique

// Connexion à la base de données
$databaseHandler = new DatabaseHandler($dbname, $username);

// Stocker la requête SQL dans une variable
$sql = "INSERT INTO `projet` (id_projet) VALUES ('$time')";

// Exécuter la requête
$execution = $databaseHandler->action_sql($sql);

?>
