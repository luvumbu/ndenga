<?php
session_start();
require_once 'Class/DatabaseHandler.php';
require_once 'Class/Delete_file.php';
require_once 'Class/AsciiConverter.php';
require_once 'Class/CheckFileExists.php';
require_once 'Class/dbCheck.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Vertical</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <a href="index.php">
        <img width="100" height="100" src="https://img.icons8.com/ios/100/home--v1.png" alt="home--v1" />
    </a>
    <?php


    /*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la class `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */


    if (isset($_SESSION["index"])) {



        $nom_table = "visit_user";
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Requête SQL pour récupérer toutes les données de la table
        $req_sql = "SELECT * FROM `$nom_table` WHERE 1";

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


        $id_visit_user = $dynamicVariables['id_visit_user'];
        $id_general = $dynamicVariables['id_general'];
        $id_projet_visit_user = $dynamicVariables['id_projet_visit_user'];
        $ip1_visit_user = $dynamicVariables['ip1_visit_user'];
        $ip2_visit_user = $dynamicVariables['ip2_visit_user'];
        $ip3_visit_user = $dynamicVariables['ip3_visit_user'];
        $ip4_visit_user = $dynamicVariables['ip4_visit_user'];
        $ip5_visit_user = $dynamicVariables['ip5_visit_user'];
        $ip6_visit_user = $dynamicVariables['ip6_visit_user'];
        $ip7_visit_user = $dynamicVariables['ip7_visit_user'];
        $ip8_visit_user = $dynamicVariables['ip8_visit_user'];
        $ip9_visit_user = $dynamicVariables['ip9_visit_user'];
        $x_visit_user = $dynamicVariables['x_visit_user'];
        $y_visit_user = $dynamicVariables['y_visit_user'];
        $click_visit_user = $dynamicVariables['click_visit_user'];
        $screen_shoot_visit_user = $dynamicVariables['screen_shoot_visit_user'];
        $timestamp_visit_user = $dynamicVariables['timestamp_visit_user'];
        // `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.

        /*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */



        $id_visit_user_array = array();
        $id_id_general_array = array();
        $ip1_visit_user_array = array();
        $ip2_visit_user_array = array();
        $ip3_visit_user_array = array();
        $ip4_visit_user_array = array();
        $ip5_visit_user_array = array();
        $ip6_visit_user_array = array();
        $ip7_visit_user_array = array();
        $ip8_visit_user_array = array();
        $ip9_visit_user_array = array();
        $x_visit_user_array = array();
        $y_visit_user_array = array();
        $click_visit_user_array = array();
        $screen_shoot_visit_user_array = array();
        $timestamp_visit_user_array = array();



    ?>


        <?php
        $kount = count($id_visit_user);


        for ($a = 0; $a < $kount; $a++) {
            if (in_array($dynamicVariables['id_visit_user'][$a], $id_visit_user_array)) {
                // Si l'élément existe dans $id_visit_user_array, ne rien faire
            } else {
                array_push($id_visit_user_array, $dynamicVariables['id_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['id_id_general'][$a], $id_id_general_array)) {
                // Si l'élément existe dans $id_id_general_array, ne rien faire
            } else {
                array_push($id_id_general_array, $dynamicVariables['id_id_general'][$a]);
            }

            if (in_array($dynamicVariables['ip1_visit_user'][$a], $ip1_visit_user_array)) {
                // Si l'élément existe dans $ip1_visit_user_array, ne rien faire
            } else {
                array_push($ip1_visit_user_array, $dynamicVariables['ip1_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip2_visit_user'][$a], $ip2_visit_user_array)) {
                // Si l'élément existe dans $ip2_visit_user_array, ne rien faire
            } else {
                array_push($ip2_visit_user_array, $dynamicVariables['ip2_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip3_visit_user'][$a], $ip3_visit_user_array)) {
                // Si l'élément existe dans $ip3_visit_user_array, ne rien faire
            } else {
                array_push($ip3_visit_user_array, $dynamicVariables['ip3_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip4_visit_user'][$a], $ip4_visit_user_array)) {
                // Si l'élément existe dans $ip4_visit_user_array, ne rien faire
            } else {
                array_push($ip4_visit_user_array, $dynamicVariables['ip4_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip5_visit_user'][$a], $ip5_visit_user_array)) {
                // Si l'élément existe dans $ip5_visit_user_array, ne rien faire
            } else {
                array_push($ip5_visit_user_array, $dynamicVariables['ip5_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip6_visit_user'][$a], $ip6_visit_user_array)) {
                // Si l'élément existe dans $ip6_visit_user_array, ne rien faire
            } else {
                array_push($ip6_visit_user_array, $dynamicVariables['ip6_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip7_visit_user'][$a], $ip7_visit_user_array)) {
                // Si l'élément existe dans $ip7_visit_user_array, ne rien faire
            } else {
                array_push($ip7_visit_user_array, $dynamicVariables['ip7_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip8_visit_user'][$a], $ip8_visit_user_array)) {
                // Si l'élément existe dans $ip8_visit_user_array, ne rien faire
            } else {
                array_push($ip8_visit_user_array, $dynamicVariables['ip8_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['ip9_visit_user'][$a], $ip9_visit_user_array)) {
                // Si l'élément existe dans $ip9_visit_user_array, ne rien faire
            } else {
                array_push($ip9_visit_user_array, $dynamicVariables['ip9_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['x_visit_user'][$a], $x_visit_user_array)) {
                // Si l'élément existe dans $x_visit_user_array, ne rien faire
            } else {
                array_push($x_visit_user_array, $dynamicVariables['x_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['y_visit_user'][$a], $y_visit_user_array)) {
                // Si l'élément existe dans $y_visit_user_array, ne rien faire
            } else {
                array_push($y_visit_user_array, $dynamicVariables['y_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['click_visit_user'][$a], $click_visit_user_array)) {
                // Si l'élément existe dans $click_visit_user_array, ne rien faire
            } else {
                array_push($click_visit_user_array, $dynamicVariables['click_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['screen_shoot_visit_user'][$a], $screen_shoot_visit_user_array)) {
                // Si l'élément existe dans $screen_shoot_visit_user_array, ne rien faire
            } else {
                array_push($screen_shoot_visit_user_array, $dynamicVariables['screen_shoot_visit_user'][$a]);
            }

            if (in_array($dynamicVariables['timestamp_visit_user'][$a], $timestamp_visit_user_array)) {
                // Si l'élément existe dans $timestamp_visit_user_array, ne rien faire
            } else {
                array_push($timestamp_visit_user_array, $dynamicVariables['timestamp_visit_user'][$a]);
            }
        }


        // Demande element a rechercher
        for ($a = 0; $a < count($ip2_visit_user_array); $a++) {


        ?>
            <div class="div_grand" onclick="action_(this)" title='<?= $ip2_visit_user_array[$a] ?>'>
                <?= $ip2_visit_user_array[$a];  ?>
            </div>
        <?php

        }

        for ($a = 0; $a < count($ip3_visit_user_array); $a++) {


        ?>
            <div class="div_grand" onclick="action_(this)" title='<?= $ip3_visit_user_array[$a] ?>'>
                <?= $ip3_visit_user_array[$a];  ?>
            </div>
        <?php

        }



        for ($a = 0; $a < count($ip5_visit_user_array); $a++) {


        ?>
            <div class="div_grand" onclick="action_(this)" title='<?= $ip5_visit_user_array[$a] ?>'>
                <?= $ip5_visit_user_array[$a];  ?>
            </div>
        <?php

        }



        ?>


        <?php
        for ($a = 0; $a < $kount; $a++) {





        ?>


            <div class="<?= $dynamicVariables['ip2_visit_user'][$a] . ' ' . $dynamicVariables['ip3_visit_user'][$a] . ' ' . $dynamicVariables['ip5_visit_user'][$a]  ?>" style="display:none">
                <table>
                    <thead>
                        <tr>
                            <th>Nom de la colonne</th>
                            <th><?= $a + 1 ?> / <?= $kount . ' ' .  $dynamicVariables['ip2_visit_user'][$a] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>id_visit_user</td>
                            <td><?= $dynamicVariables['id_visit_user'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>id_general</td>
                            <td><?= $dynamicVariables['id_general'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>id_projet_visit_user</td>
                            <td><?= $dynamicVariables['id_projet_visit_user'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>ip1_visit_user</td>
                            <td><?= $dynamicVariables['ip1_visit_user'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>ip2_visit_user</td>
                            <td><?= $dynamicVariables['ip2_visit_user'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>ip3_visit_user</td>
                            <td><?= $dynamicVariables['ip3_visit_user'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>ip4_visit_user</td>
                            <td><?= $dynamicVariables['ip4_visit_user'][$a] ?></td>
                        </tr>
                        <tr class="son_ip">
                            <td>ip5_visit_user</td>
                            <td><?= $dynamicVariables['ip5_visit_user'][$a] ?></td>
                        </tr>
                        <tr>
                            <td>ip6_visit_user</td>
                            <td><?= $dynamicVariables['ip6_visit_user'][$a] ?></td>
                        </tr>
                        <?php
                        /* <tr><td>ip7_visit_user</td><td><?= $dynamicVariables['ip7_visit_user'][$a] ?></td></tr>
            <tr><td>ip8_visit_user</td><td><?= $dynamicVariables['ip8_visit_user'][$a] ?></td></tr>
            <tr><td>ip9_visit_user</td><td><?= $dynamicVariables['ip9_visit_user'][$a] ?></td></tr>
            <tr><td>x_visit_user</td><td><?= $dynamicVariables['x_visit_user'][$a] ?></td></tr>
            <tr><td>y_visit_user</td><td><?= $dynamicVariables['y_visit_user'][$a] ?></td></tr>
            <tr><td>click_visit_user</td><td><?= $dynamicVariables['click_visit_user'][$a] ?></td></tr>
            <tr><td>screen_shoot_visit_user</td><td><?= $dynamicVariables['screen_shoot_visit_user'][$a] ?></td></tr>
           */ ?>
                        <tr>
                            <td>timestamp_visit_user</td>
                            <td><?= $dynamicVariables['timestamp_visit_user'][$a] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php
        }
    } else {
        ?>

        <a href="index.php">
            <img src="src/img/x.webp" alt="">
        </a>


        <style>
            body {
                margin: 0;
                padding: 0;
            }
        </style>
    <?php
    }




    ?>

    <style>
        .div_grand {
            background-color: #6e2626;
            color: azure;
            margin-bottom: 5px;
            padding: 10px;

        }

        .div_grand:hover {
            cursor: pointer;
        }
    </style>
    <script>
        function action_(_this) {
            var el = document.getElementsByClassName(_this.title);


            for (var x = 0; x < el.length; x++) {


                if (el[x].style.display == '') {

                    el[x].style.display = 'none';

                } else {
                    el[x].style.display = '';
                }


                // document.getElementsByClassName("http://localhost/ndenga/index.php")[0].style.display='none';
            }
        }
    </script>





    <style>
        .son_ip {
            background-color: #6e2626;
            color: white;
        }

        body {
            background-color: #d6d0d0;
        }

        table {
            background-color: white;
        }
    </style>
</body>

</html>