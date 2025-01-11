<?php
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once "Class/Give_url.php";
require_once "Class/AsciiConverter.php";


// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
//echo "Le nom du fichier actuel est : " . $url->get_basename() . "\n";
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
//var_dump($url->get_elements()) ; 

$URL = $url->get_basename();

/*
var_dump($URL ) ; 
var_dump($url->get_elements()) ; 
*/

$tabe_name = $url->get_elements()[0];
$tabe_name_info = $url->get_elements()[1];
$tabe_name_result = $url->get_elements()[2];
$tabe_name_result_parent = $url->get_elements()[3];







function General_DatabaseHandler($username, $dbname, $tabe_name, $tabe_name_info, $tabe_name_result, $nom_table, $x)
{

    // Création d'une instance de la classe `DatabaseHandler`
    $databaseHandler = new DatabaseHandler($username, $dbname);
    // Requête SQL pour récupérer toutes les données de la table
    //$req_sql = "SELECT * FROM `$nom_table` WHERE 1";




    switch ($x) {
        case 'projet':

            $req_sql = "SELECT * FROM `$tabe_name` WHERE `$tabe_name_info` ='$tabe_name_result' ";

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




            $title_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[13][0]); // Affiche "Hello"
            $description_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[14][0]); // Affiche "Hello"


           $finalArray_name1 =  [
                "id_projet" => $databaseHandler->tableList_info2[0],
                "activation_projet" => $databaseHandler->tableList_info2[1],
                "id_general" => $databaseHandler->tableList_info2[2],
                "id_user_projet" => $databaseHandler->tableList_info2[3],
                "id_sha1_user_projet" => $databaseHandler->tableList_info2[4],
                "id_sha1_projet" => $databaseHandler->tableList_info2[5],
                "id_sha1_parent_projet" => $databaseHandler->tableList_info2[6],
                "id_sha1_parent_projet2" => $databaseHandler->tableList_info2[7],
                "cryptage_projet" => $databaseHandler->tableList_info2[8],
                "input_cryptage_projet" => $databaseHandler->tableList_info2[9],
                "name_projet" => $databaseHandler->tableList_info2[10],
                "name_extention_projet" => $databaseHandler->tableList_info2[11],
                "statue_projet" => $databaseHandler->tableList_info2[12],
                "title_projet" => $title_projet,
                "description_projet" => $description_projet,
                "password_projet" => $databaseHandler->tableList_info2[15],
                "visibility_1_projet" => $databaseHandler->tableList_info2[16],
                "visibility_2_projet" => $databaseHandler->tableList_info2[17],
                "screen_shoot_projet" => $databaseHandler->tableList_info2[18],
                "img_projet_src1" => $databaseHandler->tableList_info2[19],
                "img_projet_src2" => $databaseHandler->tableList_info2[20],
                "img_projet_visibility" => $databaseHandler->tableList_info2[21],
                "group_projet" => $databaseHandler->tableList_info2[22],
                "heure_debut_projet" => $databaseHandler->tableList_info2[23],
                "date_debut_projet" => $databaseHandler->tableList_info2[24],
                "dure_projet" => $databaseHandler->tableList_info2[25],
                "publication_date_j_projet" => $databaseHandler->tableList_info2[26],
                "publication_date_h_projet" => $databaseHandler->tableList_info2[27],
                "shop_projet" => $databaseHandler->tableList_info2[28],
                "date_inscription_projet" => $databaseHandler->tableList_info2[29]


            ];



            $databaseHandler = new DatabaseHandler($username, $dbname);

            $req_sql = "SELECT * FROM `$tabe_name` WHERE `id_sha1_parent_projet` ='$tabe_name_result' ";

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




            $title_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[13][0]); // Affiche "Hello"
            $description_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[14][0]); // Affiche "Hello"


           $finalArray_name2 =  [
                "id_projet" => $databaseHandler->tableList_info2[0],
                "activation_projet" => $databaseHandler->tableList_info2[1],
                "id_general" => $databaseHandler->tableList_info2[2],
                "id_user_projet" => $databaseHandler->tableList_info2[3],
                "id_sha1_user_projet" => $databaseHandler->tableList_info2[4],
                "id_sha1_projet" => $databaseHandler->tableList_info2[5],
                "id_sha1_parent_projet" => $databaseHandler->tableList_info2[6],
                "id_sha1_parent_projet2" => $databaseHandler->tableList_info2[7],
                "cryptage_projet" => $databaseHandler->tableList_info2[8],
                "input_cryptage_projet" => $databaseHandler->tableList_info2[9],
                "name_projet" => $databaseHandler->tableList_info2[10],
                "name_extention_projet" => $databaseHandler->tableList_info2[11],
                "statue_projet" => $databaseHandler->tableList_info2[12],
                "title_projet" => $title_projet,
                "description_projet" => $description_projet,
                "password_projet" => $databaseHandler->tableList_info2[15],
                "visibility_1_projet" => $databaseHandler->tableList_info2[16],
                "visibility_2_projet" => $databaseHandler->tableList_info2[17],
                "screen_shoot_projet" => $databaseHandler->tableList_info2[18],
                "img_projet_src1" => $databaseHandler->tableList_info2[19],
                "img_projet_src2" => $databaseHandler->tableList_info2[20],
                "img_projet_visibility" => $databaseHandler->tableList_info2[21],
                "group_projet" => $databaseHandler->tableList_info2[22],
                "heure_debut_projet" => $databaseHandler->tableList_info2[23],
                "date_debut_projet" => $databaseHandler->tableList_info2[24],
                "dure_projet" => $databaseHandler->tableList_info2[25],
                "publication_date_j_projet" => $databaseHandler->tableList_info2[26],
                "publication_date_h_projet" => $databaseHandler->tableList_info2[27],
                "shop_projet" => $databaseHandler->tableList_info2[28],
                "date_inscription_projet" => $databaseHandler->tableList_info2[29]


            ];




            $finalArray_name =  [
                "finalArray_name1" => $finalArray_name1,
                "finalArray_name2" => $finalArray_name2
            ];



            
            

            break;

        case 'child':



 echo "child 1" ; 

/*

            $req_sql = "SELECT * FROM `$tabe_name` WHERE 1";

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




            $title_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[13][0]); // Affiche "Hello"
            $description_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[14][0]); // Affiche "Hello"


           $finalArray_name =  [
                "id_projet" => $databaseHandler->tableList_info2[0],
                "activation_projet" => $databaseHandler->tableList_info2[1],
                "id_general" => $databaseHandler->tableList_info2[2],
                "id_user_projet" => $databaseHandler->tableList_info2[3],
                "id_sha1_user_projet" => $databaseHandler->tableList_info2[4],
                "id_sha1_projet" => $databaseHandler->tableList_info2[5],
                "id_sha1_parent_projet" => $databaseHandler->tableList_info2[6],
                "id_sha1_parent_projet2" => $databaseHandler->tableList_info2[7],
                "cryptage_projet" => $databaseHandler->tableList_info2[8],
                "input_cryptage_projet" => $databaseHandler->tableList_info2[9],
                "name_projet" => $databaseHandler->tableList_info2[10],
                "name_extention_projet" => $databaseHandler->tableList_info2[11],
                "statue_projet" => $databaseHandler->tableList_info2[12],
                "title_projet" => $title_projet,
                "description_projet" => $description_projet,
                "password_projet" => $databaseHandler->tableList_info2[15],
                "visibility_1_projet" => $databaseHandler->tableList_info2[16],
                "visibility_2_projet" => $databaseHandler->tableList_info2[17],
                "screen_shoot_projet" => $databaseHandler->tableList_info2[18],
                "img_projet_src1" => $databaseHandler->tableList_info2[19],
                "img_projet_src2" => $databaseHandler->tableList_info2[20],
                "img_projet_visibility" => $databaseHandler->tableList_info2[21],
                "group_projet" => $databaseHandler->tableList_info2[22],
                "heure_debut_projet" => $databaseHandler->tableList_info2[23],
                "date_debut_projet" => $databaseHandler->tableList_info2[24],
                "dure_projet" => $databaseHandler->tableList_info2[25],
                "publication_date_j_projet" => $databaseHandler->tableList_info2[26],
                "publication_date_h_projet" => $databaseHandler->tableList_info2[27],
                "shop_projet" => $databaseHandler->tableList_info2[28],
                "date_inscription_projet" => $databaseHandler->tableList_info2[29]


            ];
            */

            break;

        case 'root':

 


           $req_sql = "SELECT * FROM `root` WHERE `id_sha1_user` ='$tabe_name_result' ";
            // Récupération des informations des tables enfant liées
            $databaseHandler->getListOfTables_Child("root");
            // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

            // Récupération des données de la table via une méthode spécialisée
            $databaseHandler->getDataFromTable2X($req_sql);
            // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

            // Génération de variables dynamiques à partir des données récupérées
            $databaseHandler->get_dynamicVariables();
            // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
            // Exemple : affichage d'une variable dynamique spécifique


            $title_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[5][0]); // Affiche "Hello"
            $description_projet = AsciiConverter::asciiToString($databaseHandler->tableList_info2[6][0]); // Affiche "Hello"




            


           $finalArray_name =  [
                "id_user" => $databaseHandler->tableList_info2[0][0],
                "date_user" => $databaseHandler->tableList_info2[1][0],
                "id_sha1_user" => $databaseHandler->tableList_info2[2][0],
                "id_parent_user" => $databaseHandler->tableList_info2[3][0],
                "description_user" => $databaseHandler->tableList_info2[4][0],
                "title_user" => $title_projet,
                "img_user" => $description_projet,
                "nom_user" => $databaseHandler->tableList_info2[7][0],
                "prenom_user" => $databaseHandler->tableList_info2[8][0],
                "password_user" => $databaseHandler->tableList_info2[9][0],
                "email_user" => $databaseHandler->tableList_info2[10][0],
                "activation_user" => $databaseHandler->tableList_info2[11][0],
                "date_inscription_user" => $databaseHandler->tableList_info2[12][0]
            ];
            break;
    }
    return$finalArray_name;
}





$nom_table = "projet";
$projet_01 = General_DatabaseHandler($username, $dbname, $tabe_name, $tabe_name_info, $tabe_name_result, $nom_table, $nom_table);
$projet_01_id_sha1_user_projet = $projet_01['finalArray_name1']['id_sha1_user_projet'][0];
 
$nom_table = "root";
$information_user = General_DatabaseHandler($username, $dbname, $tabe_name, $tabe_name_info, $projet_01_id_sha1_user_projet, $dbname, $nom_table);
 
$finalArray = [



    "root" => $information_user,
    "projet_01"=> $projet_01





];
 echo json_encode($finalArray, JSON_PRETTY_PRINT);



//var_dump($valeurs) ; 
