<?php 
require_once "require_once.php" ;


echo "OK" ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);
$id_general = $time  ; 
$timestamp_comment_projet = date("Y-m-d H:i:s");
$id_sha1_comment_projet = $_POST["id_sha1_comment_projet"] ; 
$text_comment_projet = $_POST["text_comment_projet"] ; 
$text_comment_projet=AsciiConverter::stringToAscii($text_comment_projet);
$index = $_SESSION["index"][3] ; 
/*

$text_comment_projet = $_POST["text_comment_projet"] ;
$name_comment_projet = $_POST["name_comment_projet"] ; 
$id_sha1_comment_projet = $_POST["id_sha1_comment_projet"] ; 
*/

$databaseHandler->action_sql("INSERT INTO `comment_projet` (id_general,id_user_sha1_comment_projet,text_comment_projet,id_sha1_comment_projet) VALUES ('$id_general','$index','$text_comment_projet','$id_sha1_comment_projet')");
 











 
 
?>


<?php 


$name_file = "../all_coms/".$id_sha1_comment_projet.".php";
$myfile = fopen($name_file, "w") or die("Unable to open file!");



$txt = "<?php";
$txt .= "\n";
$txt .= '$row_comment_projet'." = \narray(\n";



// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `comment_projet` WHERE `id_sha1_comment_projet` ='$id_sha1_comment_projet'  ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("comment_projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 


 




$id_comment_projet_dyn = $dynamicVariables['id_comment_projet'];
$id_general_dyn = $dynamicVariables['id_general'];
$id_user_sha1_comment_projet_dyn = $dynamicVariables['id_user_sha1_comment_projet'];
$text_comment_projet_dyn = $dynamicVariables['text_comment_projet'];




$liste_array_dyn = array(
    "id_comment_projet", 
    "id_general", 
    "id_user_sha1_comment_projet", 
    "id_user_projet", 
    "text_comment_projet"

);

 











 

for ($i = 0; $i < count($dynamicVariables['id_sha1_comment_projet']); $i++) {
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