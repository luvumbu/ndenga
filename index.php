<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="https://ih1.redbubble.net/image.1762483057.7729/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.webp">
</head>
<script src="Class/Js.js"></script>
<script>
  window.onload = function() {
    document.getElementById("body").className = "";

  };
</script>


<script>
  var visible_1 = "https://img.icons8.com/ios/100/hide.png";
  var visible_2 = "https://img.icons8.com/ios/50/visible--v1.png";
</script>
<?php

$visible_1 = "https://img.icons8.com/ios/100/hide.png";
$visible_2 = "https://img.icons8.com/ios/50/visible--v1.png";
?>


<body class="display_none" id="body">

  <link rel="stylesheet" href="css.css">
  <?php



  // Récupérer l'URL complète
  $requestUri = $_SERVER['REQUEST_URI'];
  // Extraire la partie après "index.php/"
  $urlPath = parse_url($requestUri, PHP_URL_PATH);
  $urlParams = str_replace('index.php/', '', $urlPath);
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'Class/DatabaseHandler.php';
  require_once 'Class/Delete_file.php';
  require_once 'Class/AsciiConverter.php';
  require_once 'Class/CheckFileExists.php';



  $grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg";
  /*
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_projet");
$name_projet = $databaseHandler->tableList_info;
 */
  $path_general_js = "function/general_js.php";
  if (file_exists($path_general_js)) {
    require_once $path_general_js;
  }
  // Example usage
  $path = "Class/dbCheck.php";
  if (checkFileExists($path)) {
    require_once  'Class/dbCheck.php';

    $databaseHandler = new DatabaseHandler($dbname, $username);
    if ($databaseHandler->verif != 1) {
      require_once 'view/verifyConnection.php';
      if (file_exists($path)) {
        // Tente de supprimer le fichier
        if (unlink($path)) {
  ?>
          <meta http-equiv="refresh" content="0"> <!-- Rafraîchit toutes les 5 secondes -->
        <?php
        }
      }
    } else {
      $req_sql = 'SELECT * FROM `' . $dbname . '` WHERE password_user = "' . $username . '" ';
      $databaseHandler->getListOfTables_Child($dbname);
      $databaseHandler->getDataFromTable2X($req_sql);
      $databaseHandler->get_dynamicVariables();
      $count_ = count($dynamicVariables['id_sha1_user']);
      if ($count_ < 1) {
        delete_file("Class/dbCheck.php");
        ?>
        <meta http-equiv="refresh" content="0"> <!-- Rafraîchit toutes les 5 secondes -->
        <?php
      }
      // require_once 'view/form_creation_table_bdd.php';
      //  require_once 'view/test.php';
      if (isset($_SESSION["index"])) {
        require_once 'view/home.php';

        if ($_SESSION["index"][0] == $dbname && $_SESSION["index"][1]  == $username) {

          echo '<div class="display_none">';
        ?>
          <link rel="stylesheet" href="view/admin_form_creation_table_bdd.css">
  <?php
          echo '</div>';
        } else {
        }
      } else {
        require_once 'view/verifyConnection.php';
      }
    }
  } else {
    require_once 'view/login_bdd.php';
  }
  ?>
  <a href="blog.php/1">
    <h3 class="projet_all">
      Voir tous les projet
    </h3>
  </a>

  <?php
  // require_once 'log/log.php';
  // requare all 
  ?>
  </div>


  <style>
    .projet_all {
      background-color: #5264a9;
      color: white;
      padding: 15px;
      box-shadow: 1px 1px 8px black;
      float: left;
    }
  </style>