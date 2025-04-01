<?php
require_once "require_once.php" ;
$description_projet = $_POST["description_projet"] ; 

$style_pages_projet =                   $_POST["style_pages_projet"] ; 
$description_projet =           $_POST["description_projet"] ; 
$title_projet =                 $_POST["title_projet"] ; 
 
$change_meta_name_projet =      $_POST["change_meta_name_projet"] ; 
$change_meta_content_projet =   $_POST["change_meta_content_projet"] ; 
$google_title_projet =          $_POST["google_title_projet"] ; 
$level_urgence_projet =         $_POST["level_urgence_projet"] ; 
$id_sha1_projet =               $_POST["id_sha1_projet"] ; 
$html_mode_projet_1 =           $_POST["html_mode_projet_1"] ; 
$html_mode_projet_2 =           $_POST["html_mode_projet_2"] ; 
$visibility_1_projet =          $_POST["visibility_1_projet"] ; 

$date_debut_projet = $_POST["date_debut_projet"]; 
$dure_projet =                  $_POST["dure_projet"] ; 
$title_projet =  AsciiConverter::stringToAscii($title_projet); // Affiche "72,101,108,108,111"
$description_projet =  AsciiConverter::stringToAscii($description_projet); // Affiche "72,101,108,108,111"

$google_title_projet =  AsciiConverter::stringToAscii($google_title_projet); // Affiche "72,101,108,108,111"


$change_meta_name_projet =  AsciiConverter::stringToAscii($change_meta_name_projet); // Affiche "72,101,108,108,111"
$change_meta_content_projet =  AsciiConverter::stringToAscii($change_meta_content_projet); // Affiche "72,101,108,108,111"



$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet`               = "'.$title_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet`         = "'.$description_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `dure_projet`                = "'.$dure_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet`        = "'.$visibility_1_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `style_pages_projet`         = "'.$style_pages_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `google_title_projet`        = "'.$google_title_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_name_projet`    = "'.$change_meta_name_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_content_projet` = "'.$change_meta_content_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `level_urgence_projet`       = "'.$level_urgence_projet.'" WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');

 
$databaseHandler->action_sql('UPDATE  `projet` SET `html_mode_projet_1`       = "'.$html_mode_projet_1.'"    WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `html_mode_projet_2`       = "'.$html_mode_projet_2.'"    WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
 
$databaseHandler->action_sql('UPDATE  `projet` SET `date_debut_projet`       = "'.$date_debut_projet.'"    WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');









$_SESSION["id_sha1_projet"] = $id_sha1_projet ;
$_SESSION["home"] = "";
require_once 'all_pages_script.php' ; 
?>
 