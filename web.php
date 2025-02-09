<?php

session_start();
header("Access-Control-Allow-Origin: *");



?>


<body>
    <?php
  $grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg";
  require_once "Class/Give_url.php";
  require_once "Class/DatabaseHandler.php";
  require_once "Class/dbCheck.php";
  require_once 'Class/AsciiConverter.php';
 



  





  ?>



    <?php

  //require_once 'function/add_ip.php';
  // Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
  $url = new Give_url();
  // Afficher le nom du fichier actuel
  // Utilisation de la méthode split_basename pour séparer par "_"

  $separation_url = '__';
  $url->split_basename($separation_url);
  $id_sha1_projet = $url->get_basename();


var_dump(  $id_sha1_projet);


  $json = false;

  if (strpos($id_sha1_projet, $separation_url) !== false) {

    $id_sha1_projet = str_replace($separation_url, "", $id_sha1_projet);
  } else {
    $json = true;
  }





require_once 'view/divHierarchy_array.php';
  require 'view/ref.php';

  //$favicon = $projet_1["img_projet_src1"][0] ; 
  $favicon = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVypNA9sxdyjykQOhtG5JYU0QkspkIyDO0MOmMecN707vZvwjGFm96Py2SMFAK2TyJgRnxgRh4K_xa3JD8dMzWV4Du55qNj5h3qxFn';



  var_dump( $divHierarchy_array);
  var_dump( $liste_css);

  



  ?>










