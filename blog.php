<?php 

session_start() ; 
header("Access-Control-Allow-Origin: *");


 
?>


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

//$favicon = $projet_1["img_projet_src1"][0] ; 
$favicon = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVypNA9sxdyjykQOhtG5JYU0QkspkIyDO0MOmMecN707vZvwjGFm96Py2SMFAK2TyJgRnxgRh4K_xa3JD8dMzWV4Du55qNj5h3qxFn' ; 


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $projet_1["google_title_projet"][0] ?></title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Get_anne_html_html.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="<?= $projet_1["change_meta_name_projet"][0] ?>" content="<?= $projet_1["change_meta_content_projet"][0] ?>">
 
 
</head>



<?php
/*

if($json){
   echo json_encode($finalArray, JSON_PRETTY_PRINT);
}
else {

   ?>

   <h1>Mon element test </h1>
      <?php 
   var_dump($finalArray) ; 


//require_once 'root_.php' ; 



}

 */ 
require_once 'projet_1.php' ; 
require_once 'Get_anne_html_html_js.php' ; 
require_once 'Get_anne_html_html_css.php' ; 



?>

 

</body>