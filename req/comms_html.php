<?php


/*
$req_sql = "SELECT * FROM `$dbname` WHERE 1 ";
$databaseHandler_user = new DatabaseHandler($username, $dbname);
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



var_dump($array_title_user) ; 
 */
?>


<style>
    body {
        background-color: #f4f4f4;

    }

</style>







<?php

if (isset($_SESSION["index"])) {



    

    if (file_exists('all_coms/' . $id_sha1_projet . '.php')) {
        require_once 'all_coms/' . $id_sha1_projet . '.php';
    }



?>
    <div class="addComment">

        <?php

        for ($i_coms = count($row_comment_projet); $i_coms > 0; $i_coms--) {


        ?>

            <div class="comment-section" id="commentSection">
                <div class="comment">
                    <div class="author"><?= $row_comment_projet[$i_coms]["id_comment_projet"] ?></div>
                    <div class="text"><?= AsciiConverter::asciiToString($row_comment_projet[$i_coms]["text_comment_projet"]) ?></div>
                </div>
            </div>
        <?php





        }

        ?>

    </div>
    </div>

<?php
}


?>


</body>

</html>