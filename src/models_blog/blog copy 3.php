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



$monTableau = []; // Tableau vide












$id_sha1_user_projet_children_0 = array();
$id_sha1_user_projet_children_1 = array();

$id_sha1_user_projet_children_2 = array();
$id_sha1_user_projet_children_2_array = array();





$id_sha1_user_projet_children_3 = array();
$id_sha1_user_projet_children_3_array = array();


$id_sha1_user_projet_children__all = array();


for ($i = 1; $i < count($row_projet); $i++) {

  $id_sha1_user_projet_children_1[] = [$row_projet[$i]["id_sha1_projet"]];
  $id_sha1_user_projet_children_0[] = $row_projet[$i]["id_sha1_projet"];
}

for ($i = 0; $i < count($id_sha1_user_projet_children_1); $i++) {
  // $all_pages = "all_pages/". $id_sha1_user_projet_children__.".php";
  $all_pages_i1 = "all_pages/" . $id_sha1_user_projet_children_1[$i][0] . ".php";

  if (file_exists($all_pages_i1)) {
    require   $all_pages_i1;
    // var_dump($row_projet);
    $id_sha1_user_projet_children_2[$i] = $row_projet[$i]["id_sha1_projet"];
    $row_projet__ = $row_projet;
    $id_sha1_user_projet_children_2_array[$i] = $row_projet;
  }
 
}





//var_dump( $id_sha1_user_projet_children_2);

var_dump($id_sha1_user_projet_children_2_array);
/*

 var_dump( $id_sha1_user_projet_children_1);
 var_dump( $id_sha1_user_projet_children_2);
*/
