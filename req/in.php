<?php 
 
session_start();
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";


 
 


 $date_inscription_user = $_SESSION["AUTORISATION"] ;
 
 

 
 
// Configuration de la base de données
 

echo "<br/>"; 
 
var_dump($username) ; 
echo "<br/>"; 
var_dump($dbname) ; 
echo "<br/>"; 
 

 

/*
 * Vérification de la connexion à la base de données avec `DatabaseHandler`
 * Ce script montre comment configurer une connexion et vérifier son état.
 */
 
 

 
/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */
 
 
 $databaseHandler = new DatabaseHandler($dbname , $username);


 $req_sql = "SELECT * FROM `$dbname` WHERE `date_inscription_user`='$date_inscription_user' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($dbname );
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

 




if(count($dynamicVariables['nom_user'])>0){

     
    $_SESSION["index"][0]= $dynamicVariables['nom_user'][0] ; 
$_SESSION["index"][1]= $dynamicVariables['password_user'][0] ; 
$_SESSION["index"][2]= $dynamicVariables['id_user'][0] ; 
$_SESSION["index"][3]= $dynamicVariables['id_sha1_user'][0] ; 

echo "OK " ; 

var_dump($_SESSION["index"]) ; 

}
else{
    echo "VIDE" ; 
}

 
?>

<meta http-equiv="refresh" content="0; URL=../index.php">
 