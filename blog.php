<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";
 

//require_once 'function/add_ip.php';
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
// Utilisation de la méthode split_basename pour séparer par "_"
$separation_url = '__';
$url->split_basename($separation_url);
$id_sha1_projet = $url->get_basename();
$all_pages = "all_pages/" . $id_sha1_projet . ".php";
require_once   $all_pages;
$favicon =  $row_projet[0]["img_projet_src1"];
$google_title_projet = $row_projet[0]["google_title_projet"];
$style_pages_projet = array();
//var_dump($row_projet) ; 
$id_sha1_projet_array = array();
$doubleArray = [];

$date_debut_projet = $row_projet[0]["date_debut_projet"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?= $favicon ?>">
  <link rel="stylesheet" href="../style_calendrier.css">
  <link rel="stylesheet" href="../comment.css">


  <script src="../class/Js.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>
  <title><?= $google_title_projet ?> </title>
  <?php

  $title_projet_ = $row_projet[0]["title_projet"];
  $description_projet_ = $row_projet[0]["description_projet"];
  $html_mode_projet_ = $row_projet[0]["html_mode_projet"];
  $id_sha1_projet_ = $row_projet[0]["id_sha1_projet"];
  $id_sha1_projet_ = $row_projet[0]["id_sha1_projet"];
  $img_projet_src1_ = $row_projet[0]["img_projet_src1"];

  $id_sha1_parent_projet_ = $row_projet[0]["id_sha1_parent_projet"];


  $total_style = array();








  ?>

  <?php

  $title_projet_ = AsciiConverter::asciiToString($title_projet_); // Affiche "Hello"
  $description_projet_ = AsciiConverter::asciiToString($description_projet_); // Affiche "Hello"
  $row_projet_style_array =    array();
  $style_pages_projet = array();
  $row_projet_style_array_number = array();
  $row_projet_style_array_name = array();
  $folder = __DIR__ . '/all_style'; // Chemin du dossier
  $div_ = "";
  if (is_dir($folder)) {
    $files = array_diff(scandir($folder), array('.', '..'));
    $div_ .= "<style>";
    foreach ($files as $file) {
      $path = $folder . '/' . $file;
      if (is_file($path)) {
        require_once "all_style/" . $file;
        array_push($row_projet_style_array_number, str_replace(".php", "", $file));
        array_push($row_projet_style_array_name, $row_projet_style["name_style_pages"]);
        $total_style_pages_1 =  AsciiConverter::asciiToString($row_projet_style["total_style_pages"]); // Affiche "Hello"
        $total_style_pages_3 =  AsciiConverter::asciiToString($row_projet_style["total_style_parent_pages"]); // Affiche "Hello"
        $total_style_pages_2 =  AsciiConverter::asciiToString($row_projet_style["total_style_text_pages"]); // Affiche "Hello"


        array_push($total_style, $row_projet_style);

        $div_ .= "\n";
        $div_ .= "." . $row_projet_style["name_style_pages"] . "_1 \n{";
        $div_ .= "\n";
        $div_ .= $total_style_pages_1;
        $div_ .= "\n";
        $div_ .= "}";
        $div_ .= "\n";
        $div_ .= "." . $row_projet_style["name_style_pages"] . "_2\n{";
        $div_ .= "\n";
        $div_ .= $total_style_pages_2;
        $div_ .= "\n";
        $div_ .= "}";
        $div_ .= "\n";
        $div_ .= "." . $row_projet_style["name_style_pages"] . "_3\n{";
        $div_ .= "\n";
        $div_ .= $total_style_pages_3;
        $div_ .= "\n";
        $div_ .= "}";
        $div_ .= "\n";
      }
    }
    $div_ .= "</style>";
  }


  ?>
</head>

<body>
  <?php
  // controle de mannete  ok  
  $liste_parent = array();
  $liste_parent_2 = array();
  $liste_class_parent = array();
  $title_projet_ =  AsciiConverter::asciiToString($row_projet[0]["title_projet"]); // Affiche "Hello"
  $description_projet_ =  AsciiConverter::asciiToString($row_projet[0]["description_projet"]); // Affiche "Hello"
  $key = array_search($row_projet[0]["style_pages_projet"], $row_projet_style_array_number); // $key = 2;

  $class_name_1 = $row_projet_style_array_name[$key] . '_1';
  $class_name_2 = $row_projet_style_array_name[$key] . '_2';
  $class_name_3 = $row_projet_style_array_name[$key] . '_3';





  $div_ .=   "<div class='" . $class_name_1 . "'>" . $title_projet_ . "</div>";



  $div_ .=   "<div class='header_class_img'>";

  $div_ .=   '<img src="' . $img_projet_src1_ . '" alt="">';
  $div_ .=   "</div>";
  $div_ .=   "<div class='" . $class_name_2 . "'>" .  $description_projet_  . "</div>";








  ?>

  <?php



  $date_debut_projet_nom___ = array();
  $date_debut_projet___ = array();

  for ($i = 0; $i < count($row_projet); $i++) {


    array_push($date_debut_projet_nom___, $row_projet[$i]["date_debut_projet"]);


    $title_projet_ =   AsciiConverter::asciiToString($row_projet[$i]["title_projet"]); // Affiche "Hello"


 

    array_push($date_debut_projet___, $title_projet_);
  }










  $events = [];

  // Vérifier que les deux tableaux ont la même longueur
  if (count($date_debut_projet_nom___) === count($date_debut_projet___)) {
    foreach ($date_debut_projet_nom___ as $index => $date) {
      $events[$date] = $date_debut_projet___[$index]; // Associe la bonne valeur
    }
  } else {
    echo "Erreur : les tableaux n'ont pas la même taille.";
  }










  $countdowns = [];

  // Calculer le temps restant pour chaque événement
  foreach ($events as $date_future => $event_name) {
    $get_anne = new Get_anne_2($date_future);
    $temps_restant = $get_anne->get_temps_restant();
    $temps_restant["event_name"] = $event_name; // Ajouter le nom de l'événement au résultat
    $countdowns[] = $temps_restant;
  }
  ?>






  <?php




  $row_projet_array = array();




  $folder = __DIR__ . '/all_pages'; // Chemin du dossier

  if (is_dir($folder)) {
    $files = array_diff(scandir($folder), array('.', '..'));


    foreach ($files as $file) {
      $path = $folder . '/' . $file;
      if (is_file($path)) {
        require_once "all_pages/" . $file;
        array_push($row_projet_array, $row_projet);
      }
    }
  }





  $id_sha1_projet_array = array();
  $element_val = array();
  $row_projet_array_filtre = array();



  for ($x = 0; $x < count($row_projet_array); $x++) {
    for ($y = 0; $y < count($row_projet_array[$x]); $y++) {
      for ($z = 0; $z < count($row_projet_array[$y]); $z++) {


        array_push($row_projet_array_filtre, $row_projet_array[$x][$y]);
      }
    }
  }

  //var_dump(  $row_projet_array_filtre );








  function recherche_array_element($row_projet_array_filtre, $recherche, $recherche_nom)
  {
    $a = array();
    $nom = array();
    for ($i = 0; $i < count($row_projet_array_filtre); $i++) {
      if ($row_projet_array_filtre[$i][$recherche_nom] == $recherche) {
      
        array_push($a, $row_projet_array_filtre[$i]);
      }
    }
    return $a;
  }

  $recherche_nom = "id_sha1_parent_projet";
  $recherche     = "174010521380";
  $recherche = $id_sha1_projet;


  $element_01 = recherche_array_element($row_projet_array_filtre, $recherche, $recherche_nom);







  $parent_class =  $class_name_3;











  $div_ .= "<div class='$parent_class'>";

  $id_array = array();



  for ($i = 0; $i < count($element_01); $i++) {

    $div_ .= "\n";

    $title_projet_ =  AsciiConverter::asciiToString($element_01[$i]["title_projet"]); // Affiche "Hello"

    // var_dump(   $title_projet_);

    $key = array_search($element_01[$i]["style_pages_projet"], $row_projet_style_array_number); // $key = 2;

    $class_name_1 = $row_projet_style_array_name[$key] . '_1';
    $class_name_2 = $row_projet_style_array_name[$key] . '_2';
    $class_name_3 = $row_projet_style_array_name[$key] . '_3';


    $hreff = $element_01[$i]["id_sha1_projet"];



    $div_ .= "\n";


    if (!in_array($element_01[$i]["id_sha1_projet"], $id_array)) {


      array_push($id_array, $element_01[$i]["id_sha1_projet"]);
      $div_ .= "<a href=#$hreff>";
      $div_ .= "    <div>";
      $div_ .= "\n";
      $div_ .= "        " . '<img src="' . $element_01[$i]["img_projet_src1"] . '" alt="" srcset="">';
      $div_ .= "\n";
      $div_ .= "    </div>";
      $div_ .= "</a>";

      $div_ .= "\n";
    }


    //var_dump( $class_name_1 ) ; 

  }




  $id_array = array();
  $div_ .= "    </div>";



  $div_ .= "<div class='$parent_class'>";
  $div_ .= "\n";


  for ($i = 0; $i < count($element_01); $i++) {

    $div_ .= "\n";

    $title_projet_ =  AsciiConverter::asciiToString($element_01[$i]["title_projet"]); // Affiche "Hello"

    // var_dump(   $title_projet_);

    $key = array_search($element_01[$i]["style_pages_projet"], $row_projet_style_array_number); // $key = 2;

    $class_name_1 = $row_projet_style_array_name[$key] . '_1';
    $class_name_2 = $row_projet_style_array_name[$key] . '_2';
    $class_name_3 = $row_projet_style_array_name[$key] . '_3';







    if (!in_array($element_01[$i]["id_sha1_projet"], $id_array)) {

      $hreff = $element_01[$i]["id_sha1_projet"];
      array_push($id_array, $element_01[$i]["id_sha1_projet"]);
      $div_ .= "    <div>";
      $div_ .= "\n";
      $div_ .= "<a href=#$hreff>";
      $div_ .= "        " . $title_projet_;
      $div_ .= "\n";
      $div_ .= "</a>";

      $div_ .= "    </div>";
      $div_ .= "\n";
    }
  }

  $div_ .= "    </div>";






  $div_ .=   "<div id='calendrier'></div>";


  $id_array = array();

  for ($i = 0; $i < count($element_01); $i++) {


    $key = array_search($element_01[$i]["style_pages_projet"], $row_projet_style_array_number); // $key = 2;

    $class_name_1 = $row_projet_style_array_name[$key] . '_1';
    $class_name_2 = $row_projet_style_array_name[$key] . '_2';
    $class_name_3 = $row_projet_style_array_name[$key] . '_3';

    //var_dump( $class_name_1) ; 


    $title_projet_ =  AsciiConverter::asciiToString($element_01[$i]["title_projet"]); // Affiche "Hello"
    $description_projet_ =  AsciiConverter::asciiToString($element_01[$i]["description_projet"]); // Affiche "Hello"
    $id_sha1_projet_ = $element_01[$i]["id_sha1_projet"]; // Affiche "Hello"
















    if (!in_array($element_01[$i]["id_sha1_projet"], $id_array)) {


      array_push($id_array, $element_01[$i]["id_sha1_projet"]);



      $div_ .= "<div id='" . $id_sha1_projet_ . "' class='" . $class_name_3 . "'>";
      $div_ .= "<div>";

      $div_ .= "    <div class='" . $class_name_1 . "'>";
      $div_ .= $title_projet_;
      $div_ .= "    </div>";

      $div_ .= "    <div class='" . $class_name_2 . "'>";
      $div_ .= $description_projet_;
      $div_ .= "<a href='" . $element_01[$i]["id_sha1_projet"] . "'>";

      $div_ .= "<div style='padding:10px;font-size:2em;width:300px;margin-top:50px;background-color:black;color:white'>";
      $div_ .= "Voir l'article complet";

      $div_ .= "</div>";
      $div_ .= "</a>";



      $div_ .= "    </div>";
      $div_ .= "</div>";
      $div_ .= "    </div>";
    }
  }
  echo $div_;


  if ($id_sha1_parent_projet_ != "") {
  ?>


    <a href="<?= $id_sha1_parent_projet_ ?>" style="margin-left:50px;margin-right:50px">
      <img width="50" height="50" src="https://img.icons8.com/hatch/50/home.png" alt="home" />
    </a>
  <?php
  } else {
  }



  //var_dump( $element_01 ) ; 


  ?>




  <style>
    body {
      margin: 0;
      padding: 0;
    }

    div img {
      width: 400px;
      box-shadow: 1px 1px 5px black;
      border-radius: 17px;
      text-align: center;
      margin-bottom: 35px;
    }

    div img:hover {
      cursor: pointer;
      opacity: 0.5;

      background-color: rgba(72, 39, 216, 0.5);
      
    }


    .header_class_img {
      width: 500px;
      margin: auto;
      margin-top: 45px;
    }

    .header_class_img img {
      width: 100%;
      border-radius: 0;
    }




    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: orangered;
      border-radius: 10px;
    }

    a {
      text-decoration: none;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>


  <?php


  /*























*/


  ?>




  <div id="countdown-z">


    <?php foreach ($countdowns as $index => $temps_restant): ?>
 
      <div id="countdown-<?php echo $index; ?>" class="countdown-container" style="margin-top:45px;margin-bottom:45px">
        <div class="event-name"><?php echo $temps_restant["event_name"]; ?></div> <!-- Afficher le nom de l'événement -->
        <div class="time">
          <span id="years-<?php echo $index; ?>"><?php echo $temps_restant["annees"]; ?></span>
          <span class="label">Années</span>
        </div>
        <div class="time">
          <span id="days-<?php echo $index; ?>"><?php echo $temps_restant["jours"]; ?></span>
          <span class="label">Jours</span>
        </div>
        <div class="time">
          <span id="hours-<?php echo $index; ?>"><?php echo $temps_restant["heures"]; ?></span>
          <span class="label">Heures</span>
        </div>
        <div class="time">
          <span id="minutes-<?php echo $index; ?>"><?php echo $temps_restant["minutes"]; ?></span>
          <span class="label">Minutes</span>
        </div>
        <div class="time">
          <span id="seconds-<?php echo $index; ?>"><?php echo $temps_restant["secondes"]; ?></span>
          <span class="label">Secondes</span>
        </div>

      </div>

    <?php endforeach; ?>

  </div>;



  </div>

  <div class="comment-section">

<h3>Ajouter un commentaire</h3>
<input id="commentText_1" type="text" class="input_commentText" placeholder="Nom de l'itulisateur">
<textarea class="comment-input" id="commentText_2" rows="3" placeholder="Écrivez votre commentaire..."></textarea>
<button class="comment-button" onclick="addComment(this)" title="<?= $id_sha1_projet ?>" >Publier</button>
</div>



  <script>
    class CountdownTimer {
      constructor(dateString, index) {
        this.targetDate = new Date(dateString).getTime();
        this.index = index;
        this.containerElement = document.getElementById(`countdown-${index}`);
        this.updateCountdown();
        setInterval(() => this.updateCountdown(), 1000);
      }

      updateCountdown() {
        const now = new Date().getTime();
        let distance = this.targetDate - now;

        if (distance < 0) {
          // Temps écoulé : appliquez la couleur de fond rgba(200, 0, 0, 0.3)
          this.containerElement.style.backgroundColor = 'rgba(200, 0, 0, 0.2)';
          distance = Math.abs(distance); // Pour afficher les valeurs positives
        }

        const years = Math.floor(distance / (1000 * 60 * 60 * 24 * 365));
        const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById(`years-${this.index}`).innerText = years;
        document.getElementById(`days-${this.index}`).innerText = days;
        document.getElementById(`hours-${this.index}`).innerText = hours;
        document.getElementById(`minutes-${this.index}`).innerText = minutes;
        document.getElementById(`seconds-${this.index}`).innerText = seconds;
      }
    }

    const events = <?php echo json_encode(array_keys($events)); ?>;

    function startCountdowns() {
      events.forEach((dateStr, index) => {
        new CountdownTimer(dateStr, index);
      });
    }

    startCountdowns();







    document.getElementById("calendrier").innerHTML = document.getElementById('countdown-z').innerHTML;



    setInterval(displayHello, 1000);

    function displayHello() {


      document.getElementById("countdown-z").innerHTML = document.getElementById("calendrier").innerHTML;




    }
  </script>



  <?php
  $_SESSION["id_sha1_projet"] =$id_sha1_projet ; 
  // Configuration de la base de données

  // Création d'une instance de la classe `DatabaseHandler`
  $databaseHandler = new DatabaseHandler($username, $dbname);

  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = "SELECT * FROM `comment_projet` WHERE `id_user_sha1_comment_projet` = '$id_sha1_projet' ";

  // Récupération des informations des tables enfant liées
  $databaseHandler->getListOfTables_Child("comment_projet");
  // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

  // Récupération des données de la table via une méthode spécialisée
  $databaseHandler->getDataFromTable2X($req_sql);
  // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

  // Génération de variables dynamiques à partir des données récupérées
  $databaseHandler->get_dynamicVariables();
  // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.




  echo '<div id="addComment">';
  for ($i = 0; $i < count($dynamicVariables['id_user_sha1_comment_projet']); $i++) {
  ?>

    <div class="comment-section">

      <div class="comment-list" id="commentList">
        <!-- Commentaire existant -->
        <div class="comment">
          <div class="comment-content">
            <strong> <?= $dynamicVariables['name_comment_projet'][$i] ?></strong><br>
            <?= $dynamicVariables['text_comment_projet'][$i] ?>
          </div>
        </div>
      </div>
    </div>

  <?php
  }
  echo '</div>';


  ?>

 






  <a href="../index.php" style="margin-left:50px;margin-right:50px">
    <img width="50" height="50" src="https://img.icons8.com/ios/50/settings--v1.png" alt="settings--v1" />
  </a>
 
  <style>
    .styles_ {
      width: 80%;
      margin: auto;

      text-align: center;
      margin-bottom: 75px;

    }

    .input_commentText {
      width: 90%;
      margin: auto;
      border: 1px solid rgba(0, 0, 0, 0.3);
      margin-bottom: 25px;
      padding: 15px;
    }
  </style>

  <script>
    function addComment(_this) {


 
_this.style.display= "none" ; 

      var commentText_1 = document.getElementById("commentText_1").value;
      var commentText_2 = document.getElementById("commentText_2").value;


 

 



      var ok = new Information("../config/addComment.php"); // création de la classe 

      ok.add("commentText_1", commentText_1); // ajout de l'information pour lenvoi 
      ok.add("commentText_2", commentText_2); // ajout de l'information pour lenvoi 
      ok.add("id_user_sha1_comment_projet", _this.title); // ajout de l'information pour lenvoi 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 








      const myTimeout = setTimeout(myGreeting, 100);

   

      function myGreeting() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("addComment").innerHTML =
            this.responseText;
        }
        xhttp.open("GET", "../view/addComment_data.php");
        xhttp.send();
 

      }




 
const myTimeout2 = setTimeout(myGreeting2, 300);
function myGreeting2() {
 
 _this.style.display= "block" ; 
 
       }


    }
  </script>


<style>
  #addComment {
    overflow-y: scroll;
    max-height: 400px;
  }
</style>


<script>
   

// condition pour affiche lorloge 
  var countdown_container = document.getElementsByClassName("countdown-container") ; 
 








for (let index = 0; index < countdown_container.length; index++) {


 
  if(countdown_container[index].children[1].children[0].innerHTML=="NaN"){
    countdown_container[index].style.display="none" ; 
  }
 
  
}
// condition pour affiche lorloge 
</script>