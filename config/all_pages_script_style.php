<?php 



 


// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `style_pages` WHERE id_sha1_style_page ='$id_sha1_style_page' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("style_pages");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 


 




$id_style_page_auto_dyn = $dynamicVariables['id_style_page_auto'];
$id_general_dyn = $dynamicVariables['id_general'];
$name_style_pages_dyn = $dynamicVariables['name_style_pages'];
$header_style_pages_dyn = $dynamicVariables['header_style_pages'];
$total_style_pages_dyn = $dynamicVariables['total_style_pages'];
$id_sha1_style_page_dyn = $dynamicVariables['id_sha1_style_page'];

$id_style_page_dyn = $dynamicVariables['id_style_page'];
$id_user_style_page_dyn = $dynamicVariables['id_user_style_page'];
$date_inscription_style_page_dyn = $dynamicVariables['date_inscription_style_page'];
 



$liste_array_dyn = array(
    "id_style_page_auto", 
    "id_general", 
    "name_style_pages", 
    "header_style_pages", 
    "total_style_pages", 

    "id_sha1_style_page", 
    "id_style_page", 
    "id_user_style_page", 
    "date_inscription_style_page"
   
 

   
);


?>


<?php
$name_file = "../all_style/".$id_sha1_style_page_dyn[0].".php";
$myfile = fopen($name_file, "w") or die("Unable to open file!");



$txt = "<?php";
$txt .= "\n";












$txt .= '$row_projet_style = ';

for ($i = 0; $i < count($dynamicVariables['id_style_page_auto']); $i++) {
    $txt .= "    array(\n"; // Début d'un sous-tableau

    for ($y = 0; $y < count($liste_array_dyn); $y++) {
        $key = $liste_array_dyn[$y];

        // Vérifie si l'élément existe, sinon assigne une chaîne vide
        $value = isset($dynamicVariables[$key][$i]) ? $dynamicVariables[$key][$i] : "";

        // Ajoute la clé et la valeur au tableau
        $txt .= '        "' . $key . '" => "' . $value . '",';
        $txt .= "\n";
    }

    
}

$txt .= ");\n"; // Fin du tableau principal


















$txt .= "?>";

fwrite($myfile, $txt);

fclose($myfile);

  ?>

