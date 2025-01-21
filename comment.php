<?php 
 




// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler_user = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table


$id_sha1_comment_projet = $id_sha1_projet[$ii] ; 
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

 










 

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler_comment = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table


$id_sha1_comment_projet = $id_sha1_projet[$ii] ; 
$req_sql = "SELECT * FROM `comment_projet` WHERE `id_sha1_comment_projet`='$id_sha1_comment_projet' ";

// Récupération des informations des tables enfant liées
$databaseHandler_comment->getListOfTables_Child("comment_projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler_comment->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler_comment->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 




$comment_projet = [
    "id_comment_projet" => $databaseHandler_comment->tableList_info2[0],
    "id_general" => $databaseHandler_comment->tableList_info2[1],
    "id_parent_general" => $databaseHandler_comment->tableList_info2[2],
    "id_sha1_comment_projet" => $databaseHandler_comment->tableList_info2[3],
    "id_user_sha1_comment_projet" => $databaseHandler_comment->tableList_info2[4],
    "start_comment_projet" => $databaseHandler_comment->tableList_info2[5],
    "text_comment_projet" => $databaseHandler_comment->tableList_info2[6],
    "name_comment_projet" => $databaseHandler_comment->tableList_info2[7],
    "sha1_comment_projet" => $databaseHandler_comment->tableList_info2[8],
    "ip1_comment_projet" => $databaseHandler_comment->tableList_info2[9],
    "ip2_comment_projet" => $databaseHandler_comment->tableList_info2[10],
    "ip3_comment_projet" => $databaseHandler_comment->tableList_info2[11],
    "ip4_comment_projet" => $databaseHandler_comment->tableList_info2[12],
    "ip5_comment_projet" => $databaseHandler_comment->tableList_info2[13],
    "ip6_comment_projet" => $databaseHandler_comment->tableList_info2[14],
    "ip7_comment_projet" => $databaseHandler_comment->tableList_info2[15],
    "ip8_comment_projet" => $databaseHandler_comment->tableList_info2[16],
    "ip9_comment_projet" => $databaseHandler_comment->tableList_info2[17],
    "timestamp_comment_projet" => $databaseHandler_comment->tableList_info2[18]
];


 

 if($databaseHandler_comment->tableList_info2[0]!=null) {



   ?>
   
   
   <div id="comment_<?= $id_sha1_projet[$ii] ?>">


   <?php
    for($ix= 0;$ix<count($databaseHandler_comment->tableList_info2[0]);$ix++) {
        
        ?>





<div class="comment_class" >
    <div class="comment_class_1">
        <?php
        
        $comment_projet["id_user_sha1_comment_projet"][$ix] ; 
        
        $key = array_search( $comment_projet["id_user_sha1_comment_projet"][$ix], $databaseHandler_user->tableList_info2[2]);

if ($key !== false) {
 



    echo $databaseHandler_user->tableList_info2[5][$key] ;
}     
        
        
        ?>
    </div>
    <div class="comment_class_2">
        <?= $comment_projet["text_comment_projet"][$ix] ; ?>
    </div>
</div>
<?php 

    }
?>
</div>
<?php 
 }
 else {
    ?>
  <div id="comment_<?= $id_sha1_projet[$ii] ?>"></div>
    <?php 
 }
 
?>

<style>
    .comment_class{

    }
    .comment_class_1{
        background-color: var(--blue);
        color: white;
    }
</style>