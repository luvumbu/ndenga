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
$id_sha1_user_projet_children__all_array = array();
$id_sha1_user_projet_children__all_array_1 = array();
$id_sha1_user_projet_children__all_array_2 = array();

class Row_projet
{
  public $row_projet;
  public $row_projet_name;
  public $row_projet_name_parent;
  public $row_projet_name_all;
  public $row_projet_value;

  function __construct($row_projet)
  {
    $this->row_projet = $row_projet;
    for ($i = 1; $i < count($row_projet); $i++) {
      $id_sha1_user_projet_children_1[] = [$row_projet[$i]["id_sha1_projet"]];
      $id_sha1_user_projet_children_0[] =  $row_projet[$i]["id_sha1_projet"];
      $this->row_projet_name_all[$i] = $row_projet[$i]["id_sha1_projet"];
      $this->row_projet_name_parent[$i] = $row_projet[$i]["id_sha1_parent_projet"];
    }
    for ($i = 0; $i < count($id_sha1_user_projet_children_1); $i++) {
      $all_pages_i1 = "all_pages/" . $id_sha1_user_projet_children_1[$i][0] . ".php";
      if (file_exists($all_pages_i1)) {
        require   $all_pages_i1;
        // var_dump($row_projet);
        $id_sha1_user_projet_children_2[$i] = $row_projet[$i]["id_sha1_projet"];
        $id_sha1_user_projet_children_2_array[$i] = $row_projet;
      }
    }
    $this->row_projet_name = $id_sha1_user_projet_children_2;
    $this->row_projet_value = $id_sha1_user_projet_children_2_array;
  }
  function row_projet()
  {
    return $this->row_projet;
  }

  function row_projet_name()
  {
    return $this->row_projet_name;
  }
  function row_projet_name_parent()
  {
    return $this->row_projet_name_parent;
  }

  function row_projet_name_all()
  {
    return $this->row_projet_name_all;
  }
  function row_projet_value()
  {
    return $this->row_projet_value;
  }
}

$apple_1 = new Row_projet($row_projet);
$row_projet_total;
$id_sha1_user_projet_children__all_array[] = $apple_1->row_projet_value();
$id_sha1_user_projet_children__all_array_1 = $apple_1->row_projet_value();

for ($i = 0; $i < count($apple_1->row_projet_value()); $i++) {

  $apple_2 = new Row_projet($apple_1->row_projet_value()[$i]);
  $row_projet_total[$i] = $apple_2;
}


for ($i = 0; $i < count($row_projet_total); $i++) {
  for ($ii = 0; $ii < count($row_projet_total[$i]->row_projet_value()); $ii++) {
    $apple_1 = new Row_projet($row_projet_total[$i]->row_projet_value()[$ii]);
    $id_sha1_user_projet_children__all_array[] = $apple_1->row_projet_value();
    $id_sha1_user_projet_children__all_array_2[] = $apple_1->row_projet_value();
  }
}

 

class Recherche_recher
{

  public $id_sha1_user_projet_children__all_array_result;


  function __construct($id_sha1_user_projet_children__all_array,$element_recherche)
  {
    for ($i = 0; $i < count($id_sha1_user_projet_children__all_array); $i++) {
      for ($ii = 0; $ii < count($id_sha1_user_projet_children__all_array[$i]); $ii++) {
        for ($iii = 0; $iii < count($id_sha1_user_projet_children__all_array[$i][$ii]); $iii++) {
          if ($id_sha1_user_projet_children__all_array[$i][$ii][$iii]["id_sha1_parent_projet"] == $element_recherche) {
            //  var_dump( $id_sha1_user_projet_children__all_array[$i][$ii][$iii]);
            $this->id_sha1_user_projet_children__all_array_result[$ii] = $id_sha1_user_projet_children__all_array[$i][$ii][$iii];
          }
        }
      }
    }
  }
  function get_name()
  {
    return $this->id_sha1_user_projet_children__all_array_result;
  }
}

$apple = new Recherche_recher($id_sha1_user_projet_children__all_array,"1741500201_293");




var_dump(count($apple->get_name())) ; 
var_dump($apple->get_name());
