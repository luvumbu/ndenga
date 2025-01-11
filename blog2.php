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
$url->split_basename('_');
$id_sha1_projet = $url->get_basename() ; 
 
$projet_1 = [] ; 
$projet_2 = [] ; 
 
 require 'view/model_blog2.php' ; 
 require 'view/model_blog1.php' ; 

 require 'view/model_blog11.php' ; 
 
 $kount =count($name['id_sha1_projet']) ; 

$id_sha1_projet__ = $name['id_sha1_projet'];
 
 $projet_1 = $name ; 
  
 


 

 


//for($a = 0 ; $a <$kount ; $a++)
 
for($a = 0 ; $a <$kount ; $a++)
{
 // require 'view/model_blog11.php' ; 
 $id_sha1_projet =  $id_sha1_projet__[$a] ;
 require 'view/model_blog11.php' ; 
array_push($projet_2 ,$namex) ; 
}
 
 
 
var_dump($projet_1) ; 
?>

<div style="background-color:black;padding:20px"></div>
<?php 

var_dump($projet_2) ;  

  



?>
<!DOCTYPE html>
<html lang="fr">


<title><?=  AsciiConverter::asciiToString($title_projet_dynamic_1[0])?></title>
 
<head>
<link rel="icon" type="image/x-icon" href="<?= $img_projet_src1_dynamic_1[0] ?>"><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 

 
<?php 
/*
if  ($count <1){
   require_once "view/all_articles.php" ; 
 ?>

 <?php 
} 
else {
  require_once "view/blog_articles2.php" ; 
}

*/
 
?>
</body>
</html>