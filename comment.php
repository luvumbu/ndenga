<?php
/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */

// Configuration de la base de données


// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler_comment = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table

$id_sha1_projet__ = $id_sha1_projet[$i];
$req_sql = "SELECT * FROM `comment_projet` WHERE `id_sha1_comment_projet` ='$id_sha1_projet__' ";


// Récupération des informations des tables enfant liées
$databaseHandler_comment->getListOfTables_Child('comment_projet');
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler_comment->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler_comment->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique




$name_comment_projet = $dynamicVariables['name_comment_projet'];

$id_general = $dynamicVariables['id_general'];
$text_comment_projet = $dynamicVariables['text_comment_projet'];
$timestamp_comment_projet = $dynamicVariables['timestamp_comment_projet'];
$id_sha1_comment_projet = $dynamicVariables['id_sha1_comment_projet'];




$count_comment = count($dynamicVariables['id_general']);



for ($i_coment = 0; $i_coment < $count_comment; $i_coment++) {
    



    $reponse_ = $id_general [$i_coment] ; 

?>

    <div class="total_comment">
        <div class="total_comment_1">
            <i>écrit par : <?= $name_comment_projet[$i_coment] ?></i>
        </div>
        <div class="total_comment_2">
            <p>
                <?= $text_comment_projet[$i_coment] ?>
            </p>
        </div>



    </div>
   


        <?php 
 


 



$reponse_ = $id_general[$i_coment]  ; 
 
?>

<?php 
 /*
// Configuration de la base de données
 
 

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler_2x = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table
$req_sql_2x = 'SELECT * FROM `comment_projet` WHERE `id_sha1_comment_projet` ="'.$reponse_.'"';

// Récupération des informations des tables enfant liées
$databaseHandler_2x->getListOfTables_Child("comment_projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler_2x->getDataFromTable2X($req_sql_2x);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler_2x->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
var_dump($dynamicVariables['text_comment_projet']);
// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.
 echo "test 123"  ; 
*/
 

 






$id_general__ = $id_general[$i_coment] ; 










?>


























<?php

}



// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.

/*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */

?>

<style>
    .repondre_inputs input,.repondre_inputs textarea {
width: 60%;
margin: auto;
border-radius: 4px;

    }
    .repondre_inputs input   {
        margin-bottom: 25px;
    }
    .test_color{
        background-color: blue;
        color: white;
    }
</style>