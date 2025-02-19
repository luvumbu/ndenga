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

for ($i=0; $i <count($row_projet) ; $i++) {  
  $src_path= "all_style/".$row_projet[$i]["style_pages_projet"].'.php' ;
 require $src_path  ;  
 $row_projet[$i]["style_pages_projet"] = $row_projet_style["name_style_pages"];
 $header_style_pages_  = AsciiConverter::asciiToString($row_projet_style["header_style_pages"]); // Affiche "Hello"

 echo "<style>
  .".$row_projet_style["name_style_pages"]." {
    ". $header_style_pages_ ."
  }
</style>";
}
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
  $style_pages_projet_ = $row_projet[0]["style_pages_projet"] ; 
  ?>
</head>



<div class="<?=   $style_pages_projet_  ?>"><?=   $title_projet_  ?></div>
<div class="<?=   $style_pages_projet_  ?>"><?=   $description_projet_  ?></div>

 
 




</body>

</html>