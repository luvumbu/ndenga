<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";

 
$url  = $_SESSION["id_sha1_projet"] ;
 
/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */




// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `comment_projet` WHERE `id_sha1_comment_projet` ='$url' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("comment_projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
/*
// Exemple : affichage d'une variable dynamique spécifique
var_dump($dynamicVariables['id_sha1_user']);
var_dump($dynamicVariables['title_user']);

*/
 

$id_general = $dynamicVariables['id_general'] ; 
$id_user_sha1_comment_projet = $dynamicVariables['id_user_sha1_comment_projet'] ; 
$text_comment_projet = $dynamicVariables['text_comment_projet'] ; 
 
 





// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$username` WHERE 1";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($username);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();


 


$id_sha1_user = $dynamicVariables['id_sha1_user'] ; 
$title_user = $dynamicVariables['title_user'] ; 
$description_user = $dynamicVariables['description_user'] ; 




// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.

/*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */
?>




 
 <?php 

for ($y=0; $y < count($id_general ) ; $y++) { 
  $text_comment_projet_  =  $text_comment_projet[$y] ; 
  $id_user_sha1_comment_projet_  =  $id_user_sha1_comment_projet[$y] ; 

  $key = array_search( $id_user_sha1_comment_projet_, $id_sha1_user); // $key = 2;


 
 ?>

<div class="container">
    <div id="messages">
       
        <div class="message">
            <p class="author"><?= $title_user[$key]." ". $description_user[$key] ?></p>
            <p><?= 
            
            
            AsciiConverter::asciiToString($text_comment_projet_ );
            
            ?></p>
        </div>

    </div>
 
</div>
<?php 
}
?>


 