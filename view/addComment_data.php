
 

<?php
 

require_once "../config/require_once.php" ; 
 
$id_sha1_projet = $_SESSION["id_sha1_projet"] ; 
// Configuration de la base de données

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `comment_projet` WHERE `id_user_sha1_comment_projet` = '$id_sha1_projet' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("comment_projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.




echo '<div id="addComment">';
for ($i = 0; $i < count($dynamicVariables['id_user_sha1_comment_projet']); $i++) {
?>

  <div class="comment-section">

    <div class="comment-list" id="commentList">
      <!-- Commentaire existant -->
      <div class="comment">
        <div class="comment-content">
          <strong> <?= $dynamicVariables['name_comment_projet'][$i] ?></strong><br>
          <?= $dynamicVariables['text_comment_projet'][$i] ?>
        </div>
      </div>
    </div>
  </div>

<?php
}
echo '</div>';

 
?>


 