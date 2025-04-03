<?php
// Démarrage de la session pour stocker et manipuler les données utilisateur
session_start();
 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8"> <!-- Encodage UTF-8 pour supporter les caractères spéciaux -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptation aux appareils mobiles -->
  <title>Document</title> <!-- Titre de la page -->
  <link rel="icon" type="image/x-icon" href="https://ih1.redbubble.net/image.1762483057.7729/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.webp"> <!-- Icône de la page -->
</head>

<script src="Class/Js.js"></script> <!-- Inclusion d'un fichier JavaScript -->
<script>
  // Script exécuté une fois que la page est entièrement chargée
  window.onload = function() {
    document.getElementById("body").className = ""; // Suppression de la classe initiale du body
  };
</script>

<script>
  // Déclaration de variables contenant des URLs d'icônes
  var visible_1 = "https://img.icons8.com/ios/100/hide.png";
  var visible_2 = "https://img.icons8.com/ios/50/visible--v1.png";
</script>

<?php
// Définition des URLs d'icônes côté serveur
$visible_1 = "https://img.icons8.com/ios/100/hide.png";
$visible_2 = "https://img.icons8.com/ios/50/visible--v1.png";
?>

<body class="display_none" id="body">
  <link rel="stylesheet" href="css.css"> <!-- Inclusion du fichier CSS -->
  <?php
  // Récupération de l'URL de la requête
  $requestUri = $_SERVER['REQUEST_URI'];
  // Extraction de la partie de l'URL après "index.php/"
  $urlPath = parse_url($requestUri, PHP_URL_PATH);
  $urlParams = str_replace('index.php/', '', $urlPath);

  // Inclusion des classes nécessaires pour les fonctionnalités
  require_once 'Class/DatabaseHandler.php';
  require_once 'Class/Delete_file.php';
  require_once 'Class/AsciiConverter.php';
  require_once 'Class/CheckFileExists.php';
  require_once "Class/Give_url.php";
  require_once "Class/nettoyerTexteHtml.php";
  // Définition de l'image principale
  $grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg";
  /*
  // Exemple d'utilisation d'une classe DatabaseHandler (commenté pour l'instant)
  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "name_projet");
  $name_projet = $databaseHandler->tableList_info;
  */
  // Chemin vers le fichier de fonctions générales
  $path_general_js = "function/general_js.php";
  if (file_exists($path_general_js)) {
    require_once $path_general_js; // Inclusion du fichier s'il existe
  }
  // Chemin du fichier pour vérification de base de données
  $path = "Class/dbCheck.php";
  if (checkFileExists($path)) { // Vérification si le fichier existe
    require_once 'Class/dbCheck.php';
    $databaseHandler = new DatabaseHandler($dbname, $username);
    if ($databaseHandler->verif != 1) {
      // Inclusion de la vue pour vérifier la connexion
      require_once 'view/verifyConnection.php';
      if (file_exists($path)) {
        // Suppression du fichier si présent
        if (unlink($path)) {
  ?>
          <meta http-equiv="refresh" content="0"> <!-- Rafraîchissement immédiat de la page -->
        <?php
        }
      }
    } else {
      // Requête SQL pour récupérer les données utilisateur
      $req_sql = 'SELECT * FROM `' . $dbname . '` WHERE password_user = "' . $username . '" ';
      $databaseHandler->getListOfTables_Child($dbname); // Récupère les tables enfants
      $databaseHandler->getDataFromTable2X($req_sql); // Récupère les données utilisateur
      $databaseHandler->get_dynamicVariables(); // Récupère les variables dynamiques
      $count_ = count($dynamicVariables['id_sha1_user']); // Compte les utilisateurs trouvés
      if ($count_ < 1) {
        delete_file("Class/dbCheck.php"); // Supprime le fichier si aucun utilisateur trouvé
        ?>
        <meta http-equiv="refresh" content="0"> <!-- Rafraîchissement immédiat de la page -->
        <?php
      }
 

      // Vérification de l'existence de la session
      if (isset($_SESSION["index"])) {
        $url = new Give_url(); // Création d'une instance de Give_url
        $separation_url = '__';
        $url->split_basename($separation_url); // Séparation de l'URL avec "__"
        $id_sha1_projet = $url->get_basename();

        // Chargement de la page d'accueil ou du blog selon l'URL
        if ($url->get_elements()[0] == "index.php") {

          // Ensemble de donne lors que l'utilisateur est en ligne 
          require_once 'view/home.php';
          // Ensemble de donne lors que l'utilisateur est en ligne 
        } else {
          // require_once 'blog0.php';
        }
        // Vérification des données de session pour afficher l'administration
        if ($_SESSION["index"][0] == $dbname && $_SESSION["index"][1]  == $username) {
          echo '<div class="display_none">';
        ?>
          <link rel="stylesheet" href="view/admin_form_creation_table_bdd.css">
  <?php
          echo '</div>';
        } else {
        }
      } else {
        require_once 'forms/verifyConnection.php'; 
        // Vérification de la connexion si pas de session
      }
    }
  } else {
    require_once 'view/login_bdd.php'; // Redirection vers la page de connexion si le fichier n'existe pas
  }
  $nom_table = "projet"; // Nom de la table cible
  // Création d'une instance de la classe `DatabaseHandler`
  $databaseHandler = new DatabaseHandler($username, $dbname);
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = "SELECT * FROM `$nom_table` WHERE `activation_projet` ='' AND visibility_1_projet !='' AND id_sha1_parent_projet='' ";
  // Récupération des informations des tables enfant liées
  $databaseHandler->getListOfTables_Child($nom_table);
  // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
  // Récupération des données de la table via une méthode spécialisée
  $databaseHandler->getDataFromTable2X($req_sql);
  // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
  // Génération de variables dynamiques à partir des données récupérées
  $databaseHandler->get_dynamicVariables();
  // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
  
  ?>
  <br />
  <br />
  <br />
  <br />
  <div>
 </div>
  <style>
    .total_elements {
      border: 1px solid black;
      margin: auto;
      width: 300px;
    }
    .total_elements img {
      width: 100%;
    }
    /* Style personnalisé pour le bouton "Voir tous les projets" */
    .projet_all {
      background-color: #5264a9;
      color: white;
      padding: 15px;
      box-shadow: 1px 1px 8px black;
      float: left;
    }
  </style>
</body>
</html>