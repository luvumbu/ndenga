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





  $json = false;

  if (strpos($id_sha1_projet, $separation_url) !== false) {

    $id_sha1_projet = str_replace($separation_url, "", $id_sha1_projet);
  } else {
    $json = true;
  }






  require 'view/ref.php';

  //$favicon = $projet_1["img_projet_src1"][0] ; 
  $favicon = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVypNA9sxdyjykQOhtG5JYU0QkspkIyDO0MOmMecN707vZvwjGFm96Py2SMFAK2TyJgRnxgRh4K_xa3JD8dMzWV4Du55qNj5h3qxFn';


  ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $projet_1["google_title_projet"][0] ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <meta name="<?= $projet_1["change_meta_name_projet"][0] ?>"
            content="<?= $projet_1["change_meta_content_projet"][0] ?>">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&family=Oswald:wght@200..700&display=swap"
            rel="stylesheet">


    </head>




    <?php 


 
   $color_projet = $projet_1["color_projet"][0]; 



   if($color_projet==""){
    $color_projet = "black";
   }
 
echo '  <style>



:root {
  --color_projet: '.$color_projet.';
 
}
  </style> 
'
?>
    <style>
    /* width */
    ::-webkit-scrollbar {
        width: 20px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: var(--color_projet);
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: var(--color_projet);
    }
    </style>
    <style>
    .style_1 {
        text-align: center;
    }

    video {
        height: 300px;
        width: 100%;
    }
    </style>





    <?php

  $div_ = "";

 


  if (strlen($projet_1["description_projet"][0] )> 20) {
    
    

    if($projet_1["html_mode_projet"][0]==""){
      $html_mode_projet = $projet_1["description_projet"][0] ; 

 
 

 $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
 $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;

 
     
    }
    else {
      $html_mode_projet = removeHtmlTags($html_mode_projet = $projet_1["description_projet"][0]);
   
   
      $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
      $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;
     
    }
    
    $div_ .=   '<div class="style_1">


<h1>' . $projet_1["title_projet"][0] . '</h1>
</div>
<div class="style_1">


<h5>' .$html_mode_projet. '</h5>
</div>';
  } else {


    $html_mode_projet = $projet_1["description_projet"][0] ; 

     $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
     $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;

 
    $div_ .=   '<div class="style_1">
  <h5>' . $html_mode_projet . '</h5>
  </div>
  <div class="style_1">
  <h1>' . $projet_1["title_projet"][0] . '</h1>
  </div>';
  }




  $div_ .= '<div class="img_projet_src1">
  <img src="'.$projet_1["img_projet_src1"][0].'" alt="" srcset=""></div>' ; 



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
  //require_once 'projet_1.php' ; 





  $div_ .= "<div class='menu_01'>";
  for ($i_b_a = 0; $i_b_a < count($projet_2["id_projet"]); $i_b_a++) {


    $div_ .= "<div title='".$projet_2["google_title_projet"][$i_b_a] ."' ><a href='#" . $projet_2["id_sha1_projet"][$i_b_a] . "'>";
    $div_ .= "<b>".$projet_2["title_projet"][$i_b_a]."</b>";

    $div_ .= "</a></div>";
  }


  $div_ .= "</div>";

/*

  $div_ .= "<div class='menu_02'>";
  for ($i_b_a = 0; $i_b_a < count($projet_2["id_projet"]); $i_b_a++) {

    $src_ = $projet_2["img_projet_src1"][$i_b_a];

    $id_= $projet_2["id_sha1_projet"][$i_b_a]  ;
    $div_ .= "<div id='".$id_."' style=\"background-image: url('$src_');\">";
    $div_ .= "<b>".$projet_2["title_projet"][$i_b_a]."</b>"; // Sécurisation

    $div_ .= "</div>";
  }

  $div_ .= "</div>";
*/



  $div_ .= "<div class='menu_03'>";
  for ($i_b_a = 0; $i_b_a < count($projet_2["id_projet"]); $i_b_a++) {


 
    if($projet_2["html_mode_projet"][$i_b_a]==""){
      $html_mode_projet = $projet_2["description_projet"][$i_b_a] ; 


      $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
      $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;
 


      
      
    }
    else {

      $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
      $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;
 
      $html_mode_projet = removeHtmlTags($html_mode_projet = $projet_2["description_projet"][0]);
    }
    

 


    $id_= $projet_2["id_sha1_projet"][$i_b_a]  ;

    $div_ .= "<div>";
   /* $div_ .= "<h1>";
    $div_ .= $projet_2["title_projet"][$i_b_a]; // Sécurisation
    $div_ .= "</h1>";
*/
    $div_ .= "<p>";
  
    $div_ .= "</p>";

    $div_ .= "<div class='link_a'>";

    

    
   
    $div_ .= '<div class="img_projet_src1_" id="'.$id_.'">
    <a href="'.$id_.'"><img src="'.$projet_2["img_projet_src1"][$i_b_a].'" alt="" srcset=""></a></div>' ; 
    $div_ .= "<a class='text_href' href='".$id_."'>".$projet_2["title_projet"][$i_b_a]."</a></div>";
    
    $div_ .= "</div>";
  

 
  
  }

  $div_ .= "</div>";












  $div_ .= "<div class='menu_04'>";
  for ($i_b_a = 0; $i_b_a < count($projet_2["id_projet"]); $i_b_a++) {


 
    if($projet_2["html_mode_projet"][$i_b_a]==""){
      $html_mode_projet = $projet_2["description_projet"][$i_b_a] ; 


      $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
      $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;
 


      
      
    }
    else {

      $html_mode_projet  = str_replace("&lt;","<",$html_mode_projet) ;
      $html_mode_projet =  str_replace("&gt;",">",$html_mode_projet) ;
 
      $html_mode_projet = removeHtmlTags($html_mode_projet = $projet_2["description_projet"][0]);
    }
    

 

 
    $div_ .= '<div class="title_projet_">'.$projet_2["title_projet"][$i_b_a].'</div>' ; 
    $div_ .= $html_mode_projet ;
 
 
  
  }

  $div_ .= "</div>";







  

?>


    <?php 

  








  echo   $div_;


  ?>



</body>
<style>


.title_projet_ {
  border: 1px solid var(--color_projet);
  text-align: center;
  margin-bottom: 50px;
  margin-top: 50px;
  padding: 15px;
  


}
.title_projet_:hover{
  cursor: pointer;
  background-color: var(--color_projet);
  opacity: 0.9;
  text-shadow: 1px 1px 2px white;
}
  .menu_04 {
   width: 80%;
   margin: auto;
  }
.img_projet_src1_ img {
    width: 100px;
    height: 100px;

}

.img_projet_src1 {
    width: 500px;
    margin: auto;
    margin-top: 75px;
    margin-bottom: 75px;

}

.img_projet_src1 img {
    width: 100%;

}
.menu_03{
  display: flex ; 
justify-content: space-around;
}
.link_a {

 
  


}

.text_href {
    background-color: var(--color_projet);
  
}

.link_a a {


    margin: auto;
    padding: 10px;
    text-decoration: none;
    color: white;
    text-shadow: 1px 1px 2px var(--color_projet);
    transition: 0.4s all;



}

.link_a img {
    border: 1px solid var(--color_projet);
    border-radius: 17px;
    padding: 17px;
}

.link_a img:hover {
    opacity: 0.8;
    background-color: var(--color_projet);
    opacity: 0.5;
}

.link_a a:hover {

    transition: 1s all;



}

.menu_01,
.menu_02 {
    display: flex;
    justify-content: space-around;
    margin-top: 75px;


}

.menu_01 {
    background-color: var(--color_projet);
    flex-wrap: wrap;
 

}

.menu_01 div {
    padding: 5px;
    background-color: var(--color_projet);
    color: white;

    text-align: center;
}


.menu_01 b {
    background-color: var(--color_projet);
    width: 100%;

}

.menu_02 b {
    background-color: var(--color_projet);
    width: 100%;
}

.menu_01 div:hover {
    cursor: pointer;
    opacity: 0.7;
    text-shadow: 1px 1px 4px var(--color_projet);


}

.menu_03 h1 {
    text-align: center;
}

.menu_03 p {
    text-align: justify;
    
    margin-top: 40px;
    margin-bottom: 40px;

}




.menu_03 div {
    margin-top: 60px;
    margin-bottom: 60px;

}

.menu_02 div {

    color: white;
    width: 400px;
    padding: 10px;




    text-align: center;
    border-radius: 7px;


    background-size: 100%;
    background-repeat: no-repeat;
    transition: 0.4s all;


}

.menu_02 div:hover {


    background-color: var(--color_projet);
    transition: 1s all;
}

.menu_02 div:hover {

    cursor: pointer;
    opacity: 0.8;
}


.menu_02 {

    flex-wrap: wrap;

}

.menu_02 div {

    margin-bottom: 75px;
}

.style_1 h1 {
    font-size: 6em;
}

.style_1 h1 {
    font-size: 6em;
    text-shadow: 1px 1px 5px var(--color_projet);
}

.style_1 h5 {
    font-size: 1.5em;
 
    
    margin-top: 45px;
    text-align: justify;


}

.menu_01 a {
    text-decoration: none;
    color: white;
}
</style>

 
<style>
:root {
    --background-color: #f9f9f9;
    /* Fond gris clair */
    --text-color: #333;
    /* Texte gris foncé */
    --highlight-color: #007acc;
    /* Bleu doux pour les éléments principaux */
    --label-color: #555;
    /* Couleur des étiquettes */
    --container-background: #ffffff;
    /* Fond des conteneurs */
    --border-color: #ddd;
    /* Bordure légère */
}



.countdown-container {
    margin-bottom: 20px;
    text-align: center;
    font-size: 1.2em;
    background-color: var(--container-background);
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);

    width: 100%;
    max-width: 600px;
    /* Largeur augmentée */
    color: var(--text-color);
}

.event-name {
    font-size: 1.5em;
    font-weight: 600;
    color: var(--highlight-color);
    margin-bottom: 10px;
}

.time {
    display: inline-block;
    margin: 0 5px;
    padding: 8px;
    background-color: var(--container-background);
    border-radius: 4px;
    width: 60px;
    border: 1px solid var(--border-color);
}

.label {
    display: block;
    font-size: 0.8em;
    color: var(--label-color);
    margin-top: 4px;
}

.status {
    color: var(--highlight-color);
    font-size: 1em;
    margin-top: 10px;
    font-weight: 500;
}
</style>
</head>


 



 
</a>

<?php 

if($projet_1["id_sha1_parent_projet"][0]=="") {
 $id_sha1_parent_projet = "../index.php" ;  
}
else {
 $id_sha1_parent_projet = $projet_1["id_sha1_parent_projet"][0];  

}

?>
<div class="return">
  <a href="<?= $id_sha1_parent_projet ?>">
  <img width="50" height="50" src="https://img.icons8.com/ios/50/return.png" alt="return"/>

</a>
</div>


</body>

</html>

<style>
  .return{
text-align: center;
background-color: var(--color_projet);
  }
  .return img{
    background-color: white;
    padding: 15px;
  }
</style>