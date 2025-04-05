<?php

// Configuration de la base de données

$nom_table = "projet"; // Nom de la table cible


$databaseHandler = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `visibility_1_projet` ='1'  AND `id_sha1_parent_projet` ='' ";



// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique

$img_projet_src1 = $dynamicVariables['img_projet_src1'];




?>








<div class="display_flex_">



    <?php

    for ($izz = 0; $izz < count($dynamicVariables['id_sha1_projet']); $izz++) {


        $title_projet_ =  AsciiConverter::asciiToString($dynamicVariables['title_projet'][$izz]); // Affiche "Hello"
        $img_projet_src1_ =  $dynamicVariables['img_projet_src1'][$izz]; // Affiche "Hello"
        $id_sha1_projet_ =  $dynamicVariables['id_sha1_projet'][$izz]; // Affiche "Hello"
        $img_projet_src1_ = str_replace("../", "", $img_projet_src1_);
    ?>
        <a href="<?= 'blog.php/'.$id_sha1_projet_?>">


            <div class="parent_element">
                <div class="card_img">
                    <?php
                    if ($img_projet_src1_ != "") {
                    ?>

                        <img src="<?= $img_projet_src1_ ?>" alt="" srcset="">

                    <?php
                    } else {
                    ?>
                        <img src="https://www.voyagefamily.com/wp-content/uploads/2024/01/visiter-senegal-1.jpg" alt="" srcset="">
                    <?php
                    }

                    ?>
                </div>
                <div class="element"><?= $title_projet_ ?></div>
            </div>

        </a>
    <?php
    }

    ?>
</div>

<style>
    .card_img {
        width: 250px;
        max-height: 100px;
        overflow-y: hidden;
        /* Hide vertical scrollbar */
    }

    .card_img img {
        width: 100%;
    }
    .element{
        max-width: 100%;
        overflow-x: hidden;

    }

    .parent_element {
        border: 1px solid rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 250px;
        margin: 45px;
    }

    .element {
        padding: 15px;
    }

    .display_flex_ {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
</style>