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
  $title_projet_ = AsciiConverter::asciiToString($title_projet_); // Affiche "Hello"
  $description_projet_ = AsciiConverter::asciiToString($description_projet_); // Affiche "Hello"

  /*
  var_dump( $style_pages_projet_);

  var_dump($row_projet) ; 
*/
  $style_pages_projet = array();

  for ($i = 0; $i < count($row_projet); $i++) {

    if (!in_array($row_projet[$i]["style_pages_projet"], $style_pages_projet)) {


      $filename = "all_style/" . $row_projet[$i]["style_pages_projet"] . '.php';
      if (file_exists($filename)) {
        array_push($style_pages_projet, $row_projet[$i]["style_pages_projet"]);

        require $filename;
        $row_projet[$i]["style_pages_projet"] = $row_projet_style["name_style_pages"];


     
        
        $row_projet[$i]["total_style_pages"] =        $row_projet_style["total_style_pages"];
        $row_projet[$i]["total_style_parent_pages"] = $row_projet_style["total_style_parent_pages"];
        $row_projet[$i]["total_style_text_pages"] =   $row_projet_style["total_style_text_pages"];


        $total_style_pages_1 = AsciiConverter::asciiToString($row_projet_style["total_style_pages"]); // Affiche "Hello"
        $total_style_pages_2 = AsciiConverter::asciiToString($row_projet_style["total_style_text_pages"]); // Affiche "Hello"
        $total_style_pages_3 = AsciiConverter::asciiToString($row_projet_style["total_style_parent_pages"]); // Affiche "Hello"

        echo '<style>
  .' . $row_projet_style["name_style_pages"] . '_1 {
    ' . $total_style_pages_1 . '
  }

    .' . $row_projet_style["name_style_pages"] . '_2 {
    ' . $total_style_pages_2 . '
  }
        .' . $row_projet_style["name_style_pages"] . '_3 {
    ' . $total_style_pages_3 . '
  }

   


</style>';
      }
    }
  }
 

  $style_pages_projet_ = $row_projet[0]["style_pages_projet"];
  ?>
</head>



<div class="<?= $style_pages_projet_ . '_1'  ?>"><?= $title_projet_  ?></div>
<div class="<?= $style_pages_projet_  .'_3'?>"><?= $description_projet_  ?></div>







</body>

</html>