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
  





  //require_once 'function/add_ip.php';
  // Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
  $url = new Give_url();
  // Afficher le nom du fichier actuel
  // Utilisation de la méthode split_basename pour séparer par "_"

  $separation_url = '__';
  $url->split_basename($separation_url);
  $id_sha1_projet = $url->get_basename();







  require_once "all_pages/" . $id_sha1_projet . ".php";









  $title_projet_0 =AsciiConverter::asciiToString($row_projet[0]["title_projet"]);

  

  $description_projet_0 =AsciiConverter::asciiToString($row_projet[0]["description_projet"]);

  $img_projet_src1_0 =$row_projet[0]["img_projet_src1"];

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







function removeHtmlTags($texte) {
  return strip_tags($texte);
}

 





    ?>


<?php 




$a=array();
for ($i=0; $i < count($row_projet); $i++) { 
 


  
  if (in_array($row_projet[$i]["style_pages_projet"], $a)) {
   
  }
  else{
  
    if(  $row_projet[$i]["style_pages_projet"]!=""){
      array_push($a,$row_projet[$i]["style_pages_projet"]);
    }
    
  }



  if($i>0){

  



$title_projet_=AsciiConverter::asciiToString($row_projet[$i]["title_projet"]);

  

$description_projet_ =AsciiConverter::asciiToString($row_projet[$i]["description_projet"]);









 
$description_projet_ = removeHtmlTags($description_projet_);

 

$description_projet_  = str_replace("&lt;","<",$description_projet_) ;
$description_projet_ =  str_replace("&gt;",">",$description_projet_) ;


echo $title_projet_ ; 


echo $description_projet_ ; 
}


}


  

 



for ($i_a=0; $i_a < count($a); $i_a++) { 
 

 

 
 

  require_once "all_style/1739682976_696.php" ;






   


 
 
 

 

 
$row_projet_style_ =AsciiConverter::asciiToString($row_projet_style["header_style_pages"]);
 

  echo $row_projet_style_ ; 

}


echo "ON2" ; 
?>

    <img src="<?= $img_projet_src1_0 ?>" alt="" srcset="">
  </body>

  </html>