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
$div_page_child_2 = array();
$div_page_child_2_name = array();
$div_page_child_2_value = array();





$div_page_child_3_name = array();
$div_page_child_3_value = array();



$div_page_child_4_name = array();
$div_page_child_4_value = array();



$div_page_child_5_name = array();
$div_page_child_5_value = array();



$div_page_child_6_name = array();
$div_page_child_6_value = array();









for ($i = 0; $i < count($row_projet); $i++) {
  $div_page_child_1_value[$i] = $row_projet[$i];

  $div_page_child_1_name[$i] = $row_projet[$i]["id_sha1_projet"];
}



 




for ($i = 0; $i < count($div_page_child_1_name); $i++) {
  $all_pages = "all_pages/" . $div_page_child_1_name[$i] . ".php";
  require_once   $all_pages;

  for ($ii = 0; $ii < count($row_projet); $ii++) {

    if($ii==0){
      array_push($div_page_child_2_value, $row_projet[$ii]);

    }

    if (!in_array($row_projet[$ii]["id_sha1_projet"], $div_page_child_1_name)) {

      if (!in_array($row_projet[$ii]["id_sha1_projet"], $div_page_child_2_name)) {

        array_push($div_page_child_2_name,  $row_projet[$ii]["id_sha1_projet"]);
        array_push($div_page_child_2_value, $row_projet[$ii]);
      }
    }
  }
}

 



//var_dump($div_page_child_2_value);






for ($i = 0; $i < count($div_page_child_2_name); $i++) {
  $all_pages = "all_pages/" . $div_page_child_2_name[$i] . ".php";
  require_once   $all_pages;
  for ($ii = 0; $ii < count($row_projet); $ii++) {

    if($ii==0){
      array_push($div_page_child_3_value, $row_projet[$ii]);

    }
    if (!in_array($row_projet[$ii]["id_sha1_projet"], $div_page_child_2_name)) {

      array_push($div_page_child_3_name,  $row_projet[$ii]["id_sha1_projet"]);
      array_push($div_page_child_3_value, $row_projet[$ii]);
    }
  }
}



//var_dump($div_page_child_3_value);







for ($i = 0; $i < count($div_page_child_3_name); $i++) {
  $all_pages = "all_pages/" . $div_page_child_3_name[$i] . ".php";
  require_once   $all_pages;
  for ($ii = 0; $ii < count($row_projet); $ii++) {

    if($ii==0){
      array_push($div_page_child_4_value, $row_projet[$ii]);

    }
    if (!in_array($row_projet[$ii]["id_sha1_projet"], $div_page_child_3_name)) {

      array_push($div_page_child_4_name,  $row_projet[$ii]["id_sha1_projet"]);
      array_push($div_page_child_4_value, $row_projet[$ii]);
    }
  }
}



 
//var_dump($div_page_child_4_value);











for ($i = 0; $i < count($div_page_child_4_name); $i++) {
  $all_pages = "all_pages/" . $div_page_child_4_name[$i] . ".php";
  require_once   $all_pages;
  for ($ii = 0; $ii < count($row_projet); $ii++) {
    if($ii==0){
      array_push($div_page_child_5_value, $row_projet[$ii]);

    }
    if (!in_array($row_projet[$ii]["id_sha1_projet"], $div_page_child_4_name)) {

      array_push($div_page_child_5_name,  $row_projet[$ii]["id_sha1_projet"]);
      array_push($div_page_child_5_value, $row_projet[$ii]);
    }
  }
}

//var_dump($div_page_child_5_value);

 






for ($i = 0; $i < count($div_page_child_5_name); $i++) {
  $all_pages = "all_pages/" . $div_page_child_5_name[$i] . ".php";
  require_once   $all_pages;
  for ($ii = 0; $ii < count($row_projet); $ii++) {

    if($ii==0){
      array_push($div_page_child_6_value, $row_projet[$ii]);

    }
    if (!in_array($row_projet[$ii]["id_sha1_projet"], $div_page_child_5_name)) {

      array_push($div_page_child_6_name,  $row_projet[$ii]["id_sha1_projet"]);
      array_push($div_page_child_6_value, $row_projet[$ii]);
    }
  }
}

//var_dump($div_page_child_6_value);


 






 for ($x=0; $x < count($div_page_child_1_value); $x++) { 
  var_dump($div_page_child_1_value[$x]["id_sha1_projet"]);
 }
