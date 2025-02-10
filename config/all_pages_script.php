<?php 



 


// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE id_sha1_projet ='$id_sha1_projet' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 


 




$id_projet_dyn = $dynamicVariables['id_projet'];
$activation_projet_dyn = $dynamicVariables['activation_projet'];
$id_general_dyn = $dynamicVariables['id_general'];
$id_user_projet_dyn = $dynamicVariables['id_user_projet'];
$id_sha1_user_projet_dyn = $dynamicVariables['id_sha1_user_projet'];
$id_sha1_projet_dyn = $dynamicVariables['id_sha1_projet'];
$color_projet_dyn = $dynamicVariables['color_projet'];
$google_title_projet_dyn = $dynamicVariables['google_title_projet'];
$level_urgence_projet_dyn = $dynamicVariables['level_urgence_projet'];
$change_meta_name_projet_dyn = $dynamicVariables['change_meta_name_projet'];
$change_meta_content_projet_dyn = $dynamicVariables['change_meta_content_projet'];
$id_sha1_parent_projet_dyn = $dynamicVariables['id_sha1_parent_projet'];
$id_sha1_parent_projet2_dyn = $dynamicVariables['id_sha1_parent_projet2'];
$cryptage_projet_dyn = $dynamicVariables['cryptage_projet'];
$html_mode_projet_dyn = $dynamicVariables['html_mode_projet'];
$style_pages_projet_dyn = $dynamicVariables['style_pages_projet'];
$name_pages_projet_dyn = $dynamicVariables['name_pages_projet'];
$input_cryptage_projet_dyn = $dynamicVariables['input_cryptage_projet'];
$name_projet_dyn = $dynamicVariables['name_projet'];
$name_extention_projet_dyn = $dynamicVariables['name_extention_projet'];
$statue_projet_dyn = $dynamicVariables['statue_projet'];
$title_projet_dyn = $dynamicVariables['title_projet'];
$description_projet_dyn = $dynamicVariables['description_projet'];
$password_projet_dyn = $dynamicVariables['password_projet'];
$visibility_1_projet_dyn = $dynamicVariables['visibility_1_projet'];
$visibility_2_projet_dyn = $dynamicVariables['visibility_2_projet'];
$screen_shoot_projet_dyn = $dynamicVariables['screen_shoot_projet'];
$img_projet_src1_dyn = $dynamicVariables['img_projet_src1'];
$img_projet_src2_dyn = $dynamicVariables['img_projet_src2'];
$img_projet_visibility_dyn = $dynamicVariables['img_projet_visibility'];
$groupe_projet_dyn = $dynamicVariables['groupe_projet'];
$heure_debut_projet_dyn = $dynamicVariables['heure_debut_projet'];
$date_debut_projet_dyn = $dynamicVariables['date_debut_projet'];
$dure_projet_dyn = $dynamicVariables['dure_projet'];
$publication_date_j_projet_dyn = $dynamicVariables['publication_date_j_projet'];
$publication_date_h_projet_dyn = $dynamicVariables['publication_date_h_projet'];
$shop_projet_dyn = $dynamicVariables['shop_projet'];
$date_inscription_projet_dyn = $dynamicVariables['date_inscription_projet'];


$liste_array_dyn = array(
    "id_projet", 
    "activation_projet", 
    "id_general", 
    "id_user_projet", 
    "id_sha1_user_projet", 
    "id_sha1_projet", 
    "color_projet", 
    "google_title_projet", 
    "level_urgence_projet", 
    "change_meta_name_projet", 
    "change_meta_content_projet", 
    "id_sha1_parent_projet", 
    "id_sha1_parent_projet2", 
    "cryptage_projet", 
    "html_mode_projet", 
    "style_pages_projet", 
    "name_pages_projet", 
    "input_cryptage_projet", 
    "name_projet", 
    "name_extention_projet", 
    "statue_projet", 
    "title_projet", 
    "description_projet", 
    "password_projet", 
    "visibility_1_projet", 
    "visibility_2_projet", 
    "screen_shoot_projet", 
    "img_projet_src1", 
    "img_projet_src2", 
    "img_projet_visibility", 
    "groupe_projet", 
    "heure_debut_projet", 
    "date_debut_projet", 
    "dure_projet", 
    "publication_date_j_projet", 
    "publication_date_h_projet", 
    "shop_projet", 
    "date_inscription_projet"
);


?>


<?php
$name_file = "../all_pages/" . $id_sha1_projet . ".php";
$myfile = fopen($name_file, "w") or die("Unable to open file!");



$txt = "<?php";
$txt .= "\n";












$txt .= '$row_projet_' . $id_sha1_projet . " = \narray(\n";

for ($i = 0; $i < count($dynamicVariables['id_sha1_projet']); $i++) {
    $txt .= "    array(\n"; // Début d'un sous-tableau

    for ($y = 0; $y < count($liste_array_dyn); $y++) {
        $key = $liste_array_dyn[$y];

        // Vérifie si l'élément existe, sinon assigne une chaîne vide
        $value = isset($dynamicVariables[$key][$i]) ? $dynamicVariables[$key][$i] : "";

        // Ajoute la clé et la valeur au tableau
        $txt .= '        "' . $key . '" => "' . $value . '",';
        $txt .= "\n";
    }

    $txt .= "    ),\n"; // Fin du sous-tableau
}

$txt .= ");\n"; // Fin du tableau principal


















$txt .= "?>";

fwrite($myfile, $txt);

fclose($myfile);

 
// ajout children   en bas

$databaseHandler = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE id_sha1_parent_projet ='$id_sha1_projet' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique





$id_projet_dyn = $dynamicVariables['id_projet'];
$activation_projet_dyn = $dynamicVariables['activation_projet'];
$id_general_dyn = $dynamicVariables['id_general'];
$id_user_projet_dyn = $dynamicVariables['id_user_projet'];
$id_sha1_user_projet_dyn = $dynamicVariables['id_sha1_user_projet'];
$id_sha1_projet_dyn = $dynamicVariables['id_sha1_projet'];
$color_projet_dyn = $dynamicVariables['color_projet'];
$google_title_projet_dyn = $dynamicVariables['google_title_projet'];
$level_urgence_projet_dyn = $dynamicVariables['level_urgence_projet'];
$change_meta_name_projet_dyn = $dynamicVariables['change_meta_name_projet'];
$change_meta_content_projet_dyn = $dynamicVariables['change_meta_content_projet'];
$id_sha1_parent_projet_dyn = $dynamicVariables['id_sha1_parent_projet'];
$id_sha1_parent_projet2_dyn = $dynamicVariables['id_sha1_parent_projet2'];
$cryptage_projet_dyn = $dynamicVariables['cryptage_projet'];
$html_mode_projet_dyn = $dynamicVariables['html_mode_projet'];
$style_pages_projet_dyn = $dynamicVariables['style_pages_projet'];
$name_pages_projet_dyn = $dynamicVariables['name_pages_projet'];
$input_cryptage_projet_dyn = $dynamicVariables['input_cryptage_projet'];
$name_projet_dyn = $dynamicVariables['name_projet'];
$name_extention_projet_dyn = $dynamicVariables['name_extention_projet'];
$statue_projet_dyn = $dynamicVariables['statue_projet'];
$title_projet_dyn = $dynamicVariables['title_projet'];
$description_projet_dyn = $dynamicVariables['description_projet'];
$password_projet_dyn = $dynamicVariables['password_projet'];
$visibility_1_projet_dyn = $dynamicVariables['visibility_1_projet'];
$visibility_2_projet_dyn = $dynamicVariables['visibility_2_projet'];
$screen_shoot_projet_dyn = $dynamicVariables['screen_shoot_projet'];
$img_projet_src1_dyn = $dynamicVariables['img_projet_src1'];
$img_projet_src2_dyn = $dynamicVariables['img_projet_src2'];
$img_projet_visibility_dyn = $dynamicVariables['img_projet_visibility'];
$groupe_projet_dyn = $dynamicVariables['groupe_projet'];
$heure_debut_projet_dyn = $dynamicVariables['heure_debut_projet'];
$date_debut_projet_dyn = $dynamicVariables['date_debut_projet'];
$dure_projet_dyn = $dynamicVariables['dure_projet'];
$publication_date_j_projet_dyn = $dynamicVariables['publication_date_j_projet'];
$publication_date_h_projet_dyn = $dynamicVariables['publication_date_h_projet'];
$shop_projet_dyn = $dynamicVariables['shop_projet'];
$date_inscription_projet_dyn = $dynamicVariables['date_inscription_projet'];

$name_file = "../all_pages/" . $id_sha1_projet . "_c.php";
$myfile = fopen($name_file, "w") or die("Unable to open file!");



$txt = "<?php";
$txt .= "\n";












$txt .= '$row_projet_' . $id_sha1_projet . "_c = \narray(\n";

for ($i = 0; $i < count($dynamicVariables['id_sha1_projet']); $i++) {
    $txt .= "    array(\n"; // Début d'un sous-tableau

    for ($y = 0; $y < count($liste_array_dyn); $y++) {
        $key = $liste_array_dyn[$y];

        // Vérifie si l'élément existe, sinon assigne une chaîne vide
        $value = isset($dynamicVariables[$key][$i]) ? $dynamicVariables[$key][$i] : "";

        // Ajoute la clé et la valeur au tableau
        $txt .= '        "' . $key . '" => "' . $value . '",';
        $txt .= "\n";
    }

    $txt .= "    ),\n"; // Fin du sous-tableau
}

$txt .= ");\n"; // Fin du tableau principal


















$txt .= "?>";

fwrite($myfile, $txt);

fclose($myfile);


?>
 


 