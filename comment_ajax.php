<?php 

require_once "Class/Give_url.php" ; 
require_once "Class/DatabaseHandler.php" ; 
require_once "Class/dbCheck.php" ; 
require_once 'Class/AsciiConverter.php';

$id_sha1_comment_projet = $id_sha1_projet[$ii] ;

$databaseHandler_user = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table


 
$req_sql = "SELECT * FROM `$dbname` WHERE 1 ";

// Récupération des informations des tables enfant liées
$databaseHandler_user->getListOfTables_Child($dbname);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler_user->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler_user->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique

 


 


$array_id_sha1_user =$dynamicVariables['id_sha1_user'] ;
$array_title_user =$dynamicVariables['title_user'] ;
$array_img_user =$dynamicVariables['img_user'] ;
$array_nom_user =$dynamicVariables['nom_user'] ;
$array_date_inscription_user =$dynamicVariables['date_inscription_user'] ;


 


 


// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
echo   $url->get_basename() . "\n";
 
 
?>

<?php 
 
 

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler_comment = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table


 
 
 
$databaseHandler_c = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table

$nom_table ="comment_projet" ; 

$id_sha1_comment_projet = $url->get_basename(); 

$req_sql = 'SELECT * FROM `comment_projet` WHERE `id_sha1_comment_projet`="'.$id_sha1_comment_projet.'"';

// Récupération des informations des tables enfant liées
$databaseHandler_c->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler_c->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler_c->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

 

/*

$array_id_sha1_user =$dynamicVariables['id_sha1_user'] ;
$array_title_user =$dynamicVariables['title_user'] ;
$array_img_user =$dynamicVariables['img_user'] ;
$array_nom_user =$dynamicVariables['nom_user'] ;
$array_date_inscription_user =$dynamicVariables['date_inscription_user'] ;

*/





$comment_projet = [
    "id_comment_projet" => $dynamicVariables['id_comment_projet']  ,
    "id_general" =>   $dynamicVariables['id_general'],
    "id_parent_general" =>   $dynamicVariables['id_parent_general'],
    "id_sha1_comment_projet" =>   $dynamicVariables['id_sha1_comment_projet'],
    "id_user_sha1_comment_projet" =>   $dynamicVariables['id_user_sha1_comment_projet'],
    "start_comment_projet" =>   $dynamicVariables['start_comment_projet'],
    "text_comment_projet" =>   $dynamicVariables['text_comment_projet'],
    "name_comment_projet" =>   $dynamicVariables['name_comment_projet'],
    "sha1_comment_projet" =>   $dynamicVariables['sha1_comment_projet'],
    "ip1_comment_projet" =>   $dynamicVariables['ip1_comment_projet'],
    "ip2_comment_projet" =>   $dynamicVariables['ip2_comment_projet'],
    "ip3_comment_projet" =>   $dynamicVariables['ip3_comment_projet'],
    "ip4_comment_projet" =>   $dynamicVariables['ip4_comment_projet'],
    "ip5_comment_projet" =>   $dynamicVariables['ip5_comment_projet'],
    "ip6_comment_projet" =>   $dynamicVariables['ip6_comment_projet'],
    "ip7_comment_projet" =>   $dynamicVariables['ip7_comment_projet'],
    "ip8_comment_projet" =>   $dynamicVariables['ip8_comment_projet'],
    "ip9_comment_projet" =>   $dynamicVariables['ip9_comment_projet'],
    "timestamp_comment_projet" =>   $dynamicVariables['timestamp_comment_projet']
];



echo '<div id="comment_'.$id_sha1_comment_projet.'">' ; 

 


for ($i = 0; $i < count( $dynamicVariables['id_user_sha1_comment_projet']); $i++) {

 





// Recherche de la position de '$id_sha1_comment_projet'
$position = array_search($dynamicVariables['id_user_sha1_comment_projet'][$i], $array_id_sha1_user);











 
if ($position !== false) {
 echo "<div class='comment_class_1'>" ;
    echo $array_title_user[$position] ;
    echo "</div>" ; 
}  
echo "<div class=''>" ; 
echo $dynamicVariables['text_comment_projet'][$i] ++  ; 
echo "</div>" ; 

}

echo '</div>' ; 
?>

 


<style>
 
    .comment_class_1{
        background-color: var(--blue);
        color: white;
        padding: 15px;
    }
</style>