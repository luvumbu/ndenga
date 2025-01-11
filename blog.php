<?php 
header("Access-Control-Allow-Origin: *");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
$grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg" ; 
require_once "Class/Give_url.php" ; 
require_once "Class/DatabaseHandler.php" ; 
require_once "Class/dbCheck.php" ; 
require_once 'Class/AsciiConverter.php';
//require_once 'function/add_ip.php';
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
// Utilisation de la méthode split_basename pour séparer par "_"

$separation_url = '__';
$url->split_basename($separation_url);
$id_sha1_projet = $url->get_basename() ; 



$json=false ; 

if (strpos($id_sha1_projet, $separation_url) !== false) {
   
   $id_sha1_projet = str_replace($separation_url,"",$id_sha1_projet);
}
else {
   $json = true ; 
}

   

 


require 'view/ref.php' ;



if($json){
   echo json_encode($finalArray, JSON_PRETTY_PRINT);
}
else {
/*
   ?>

   <h1>Mon element test </h1>
      <?php 
   var_dump($finalArray) ; 

*/ 
//require_once 'root_.php' ; 


require_once 'projet_1.php' ; 

}

 


?>

</body>