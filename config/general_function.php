<?php
require_once "require_once.php" ;

$date_inscription_projet = date("Y-m-d H:i:s");
// Chemin du dossier à créer

$general_function =  $_POST["general_function"]; // const
$id_sha1_projet_time = time() . rand(10, 99);
$id_user_projet = $_POST["id_user_projet"]; //3
$id_sha1_user_projet = $_POST["id_sha1_user_projet"]; // 4
$id_sha1_projet = $_POST["id_sha1_projet"];
$cheminDossier = '../src/img/' . $id_sha1_user_projet;
$_SESSION["img"] = time();






$_SESSION["id_sha1_projet_time"] = $id_sha1_projet_time ; 

// Vérification si le dossier existe
if (!is_dir($cheminDossier)) {
  // Création du dossier avec des permissions 0755
  if (mkdir($cheminDossier, 0755, true)) {
    //  echo "Dossier '$cheminDossier' créé avec succès.";
  } else {
    echo "Erreur : impossible de créer le dossier '$cheminDossier'.";
  }
} else {
  //  echo "Le dossier '$cheminDossier' existe déjà.";
}




$_SESSION["cheminDossier"] = $cheminDossier;

$_SESSION["id_user_projet"]  = $_POST["id_user_projet"]; //3
$_SESSION["id_sha1_user_projet"] = $_POST["id_sha1_user_projet"]; // 4

$_SESSION["id_sha1_projet"] = $id_sha1_projet;

$value = $_POST["value"];




$tagName = $_POST["tagName"];
$databaseHandler = new DatabaseHandler($dbname, $username);
$_SESSION["home"] = "";



switch ($general_function) {
  case "insert":

    $databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_user_projet,id_user_projet,id_sha1_projet,date_inscription_projet) VALUES ('$id_sha1_user_projet','$id_user_projet','$id_sha1_projet_time','$date_inscription_projet')");
    $_SESSION["home"] = "insert";

    break;
  case "update":



    $value = AsciiConverter::stringToAscii($value); // Affiche "72,101,108,108,111"


    if ($tagName == "INPUT") {
    //  $databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "' . $value . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
      //$id_sha1_projet
      require_once 'all_pages_script.php';
    } else {
     // $databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "' . $value . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
      //$id_sha1_projet
      require_once 'all_pages_script.php';
    }




    break;
  case "img_2":
    $_SESSION["img_2"] = "img_2";
    break;
  case "all":
    $_SESSION["home"] = "all";
    break;
  case "remove":
    $databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `id_sha1_projet` = '$id_sha1_projet'");

    break;

  case "profil":
    $_SESSION["home"] = "profil";

    break;

  case "style":
    $_SESSION["home"] = "style";

    break;





  default:
    //code block
}
