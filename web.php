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
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?= $favicon ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>
  <title><?= $google_title_projet ?> </title>
  <?php

  $title_projet_ = $row_projet[0]["title_projet"];
  $description_projet_ = $row_projet[0]["description_projet"];
  $html_mode_projet_ = $row_projet[0]["html_mode_projet"];
  $id_sha1_projet_ = $row_projet[0]["id_sha1_projet"];
  $style_pages_projet_ = $row_projet[0]["style_pages_projet"];
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

    $div_ .= "\n";
  

    if (!in_array($element_01[$i]["id_sha1_projet"], $id_array)) {
 
    
  array_push($id_array,$element_01[$i]["id_sha1_projet"]);
  $div_ .= "    <div>";
  $div_ .= "\n";
  $div_ .= "        " . '<img src="' . $element_01[$i]["img_projet_src1"] . '" alt="" srcset="">';
  $div_ .= "\n";
  $div_ .= "    </div>";
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
 
    
      array_push($id_array,$element_01[$i]["id_sha1_projet"]);
      $div_ .= "    <div>";
      $div_ .= "\n";
      $div_ .= "        " . $title_projet_;
      $div_ .= "\n";
      $div_ .= "    </div>";
      $div_ .= "\n";
    
        }






  }

  $div_ .= "    </div>";











  for ($i = 0; $i < count($element_01); $i++) {


    $key = array_search($element_01[$i]["style_pages_projet"], $row_projet_style_array_number); // $key = 2;

    $class_name_1 = $row_projet_style_array_name[$key] . '_1';
    $class_name_2 = $row_projet_style_array_name[$key] . '_2';
    $class_name_3 = $row_projet_style_array_name[$key] . '_3';

    //var_dump( $class_name_1) ; 


    $title_projet_ =  AsciiConverter::asciiToString($element_01[$i]["title_projet"]); // Affiche "Hello"
    $description_projet_ =  AsciiConverter::asciiToString($element_01[$i]["description_projet"]); // Affiche "Hello"


    $div_ .= "<div class='" . $class_name_3 . "'>";
    $div_ .= "    <div>";
    $div_ .= $title_projet_;
    $div_ .= "    </div>";

    $div_ .= "    <div>";
    $div_ .= $description_projet_;
    $div_ .= "    </div>";
    $div_ .= "</div>";
  }



  echo $div_;

  //var_dump( $element_01 ) ; 


  ?>



  <style>
    body {
      margin: 0;
      padding: 0;
    }

    div img {
      width: 150px;
      box-shadow: 1px 1px 5px black;
      border-radius: 17px;
    }

    div img:hover {
      cursor: pointer;
      opacity: 0.5;

      background-color: rgba(72, 39, 216, 0.5);
    }
  </style>