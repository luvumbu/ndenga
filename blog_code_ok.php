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
$div_page = $row_projet[0];
$div_page_child_1_name = array();

for ($i = 0; $i < count($row_projet); $i++) {
  $div_page_child_1_value[$i] = $row_projet[$i];
  $div_page_child_1_name[$i] = $row_projet[$i]["id_sha1_projet"];
}

  var_dump($div_page_child_1_name);
  // Vérifier que `$div_page_child_1_name` est défini avant d'instancier `Div_page`
  $apple_1 = new Div_page($div_page_child_1_name);
  var_dump($apple_1 ->div_page_child_name()) ; 

  $apple_2 = new Div_page($apple_1 ->div_page_child_name());
  var_dump($apple_2 ->div_page_child_name()) ; 

  $apple_3 = new Div_page($apple_2 ->div_page_child_name());
  var_dump($apple_3 ->div_page_child_name()) ; 
  $apple_4 = new Div_page($apple_3 ->div_page_child_name());
  var_dump($apple_4 ->div_page_child_name()) ; 


  $apple_5 = new Div_page($apple_4 ->div_page_child_name());
  var_dump($apple_5 ->div_page_child_name()) ; 


  $apple_6= new Div_page($apple_5 ->div_page_child_name());
  var_dump($apple_6->div_page_child_name()) ;  

  $apple_7= new Div_page($apple_6 ->div_page_child_name());
  var_dump($apple_7->div_page_child_name()) ;  
 ?>