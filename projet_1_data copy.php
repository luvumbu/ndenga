<?php

session_start();


require_once "Class/Give_url.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once 'Class/AsciiConverter.php';
require_once 'Class/Get_anne_html_html.php';






// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();

// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');




# Tableau des couleurs
$colors_array = array(
  '#8f2704',
  '#d35c54',
  '#d99b97',
  '#cdc24a',
  '#c68a41',

  '#a0b151',
  '#489857',
  '#5b6849',
  '#373319'

);

# Tableau des couleurs
$margin_array = array(
  'margin-top:0px',
  'margin-top:35px',
  'margin-top:0px',
  'margin-top:35px',
  'margin-top:75px',
  'margin-top:175px',
  'margin-top:75px',
  'margin-top:10px',
  'margin-top:0px'









);






$name_r = $url->get_elements()[0];


$ramdom_color = $_SESSION["color_projet"];






$nom_table = "projet"; // Nom de la table cible

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE id_sha1_parent_projet ='$name_r'  AND visibility_1_projet !='' AND  activation_projet ='' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.






?>

 


  <?php


  $div = '<div class="projet_1_data">';

  //  $sha1_ =  $dynamicVariables['title_projet'];

  //$dynamicVariables['id_sha1_projet']
  $sha1_ = $dynamicVariables['id_sha1_projet'];

  for ($i_a = 0; $i_a < count($dynamicVariables['title_projet']); $i_a++) {





    $margin_ =  fmod($i_a, count($margin_array));

    $margin_info = $margin_array[$margin_];
 

    $ascii_title_projet = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i_a]); // Affiche "Hello"
  



    $div .= "<div style='$margin_info'   id='id_" . $sha1_[$i_a] . "' class='" . $sha1_[$i_a] . " section_1 hexagon colors_array_" . fmod($i_a, count($colors_array)) . " hover_cursor' onclick='function_projet_2(this)'>";

    $div .= $ascii_title_projet;
    $div .= "</div>";






  }





  $projet_1 =  [



    "id_projet" =>    $dynamicVariables['id_projet'],
    "activation_projet" =>    $dynamicVariables['activation_projet'],
    "id_general" =>    $dynamicVariables['id_general'],
    "color_projet" =>    $dynamicVariables['color_projet'],
    "google_title_projet" =>    $dynamicVariables['google_title_projet'],


    "id_user_projet" =>    $dynamicVariables['id_sha1_projet'],
    "id_sha1_user_projet" =>    $dynamicVariables['id_sha1_user_projet'],
    "id_sha1_projet" =>    $dynamicVariables['id_sha1_projet'],
    "id_sha1_parent_projet" =>    $dynamicVariables['id_sha1_parent_projet'],
    "id_sha1_parent_projet2" =>    $dynamicVariables['id_sha1_parent_projet2'],
    "cryptage_projet" =>    $dynamicVariables['cryptage_projet'],
    "input_cryptage_projet" =>    $dynamicVariables['input_cryptage_projet'],
    "name_projet" =>    $dynamicVariables['name_projet'],
    "name_extention_projet" =>    $dynamicVariables['name_extention_projet'],
    "statue_projet" =>    $dynamicVariables['statue_projet'],
    "title_projet" => $title_projet,
    "description_projet" => $description_projet,
    "password_projet" =>    $dynamicVariables['password_projet'],
    "visibility_1_projet" =>    $dynamicVariables['visibility_1_projet'],
    "visibility_2_projet" =>    $dynamicVariables['visibility_2_projet'],
    "screen_shoot_projet" =>    $dynamicVariables['screen_shoot_projet'],
    "img_projet_src1" =>    $dynamicVariables['img_projet_src1'],
    "img_projet_src2" =>    $dynamicVariables['img_projet_src2'],
    "img_projet_visibility" =>    $dynamicVariables['img_projet_visibility'],
    "group_projet" =>    $dynamicVariables['group_projet'],
    "heure_debut_projet" =>    $dynamicVariables['heure_debut_projet'],
    "date_debut_projet" =>    $dynamicVariables['date_debut_projet'],
    "dure_projet" =>    $dynamicVariables['dure_projet'],
    "publication_date_j_projet" =>    $dynamicVariables['publication_date_j_projet'],
    "publication_date_h_projet" =>    $dynamicVariables['publication_date_h_projet'],
    "shop_projet" =>    $dynamicVariables['shop_projet'],
    "date_inscription_projet" =>    $dynamicVariables['date_inscription_projet']


  ];




  $img_projet_src1 = $dynamicVariables['img_projet_src1'];
  // Exemple : affichage d'une variable dynamique spécifique
  //var_dump($projet_1 );
  // `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.



 $div .= "</div>";
  ?>
</div>


<?php

echo '
<style>
    :root {
  --blue: ' . $ramdom_color . ';
 
}



    #id_' . $name_r . ' {
        border: 1px solid ' . $ramdom_color . ';
        border-radius:15px;
    border-bottom: 45px solid var(--blue);

    }
</style>

';








 
?>



 




 

 














 

<?php







$title_projet  = $dynamicVariables['title_projet'];
$description_projet  = $dynamicVariables['description_projet'];
$img_projet_src1  = $dynamicVariables['img_projet_src1'];

$id_sha1_projet  = $dynamicVariables['id_sha1_projet'];




$date_inscription_projet  = $dynamicVariables['date_inscription_projet'];



$events = [];


 



$div .= '<div class="id_des_2 total">' ; 
$div .= '<b> Total element : ' . count($date_inscription_projet) . '</b>' ; 
$div .= '</div>' ; 
$div .= '</div>' ; 




?>




<?php
for ($iy = 0; $iy < count($dynamicVariables['date_debut_projet']); $iy++) {
  if ($dynamicVariables['date_debut_projet'][$iy] != "") {
    $events[$dynamicVariables['date_debut_projet'][$iy]] =  AsciiConverter::asciiToString($title_projet[$iy]);
  }
}



$countdowns = [];

// Calculer le temps restant pour chaque événement
foreach ($events as $date_future => $event_name) {
  $get_anne = new Get_anne_html_html($date_future);
  $temps_restant = $get_anne->get_temps_restant();
  $temps_restant["event_name"] = $event_name; // Ajouter le nom de l'événement au résultat
  $countdowns[] = $temps_restant;
}





foreach ($countdowns as $index => $temps_restant): ?>
 




  <?php 
 $div .= '
 <div id="countdown-' . $index . '" class="countdown-container">
   <div class="event-name">' . $temps_restant["event_name"] . '</div> <!-- Afficher le nom de l\'événement -->
   <div class="time">
     <span id="years-' . $index . '">' . $temps_restant["annees"] . '</span>
     <span class="label">Années</span>
   </div>
   <div class="time">
     <span id="days-' . $index . '">' . $temps_restant["jours"] . '</span>
     <span class="label">Jours</span>
   </div>
   <div class="time">
     <span id="hours-' . $index . '">' . $temps_restant["heures"] . '</span>
     <span class="label">Heures</span>
   </div>
   <div class="time">
     <span id="minutes-' . $index . '">' . $temps_restant["minutes"] . '</span>
     <span class="label">Minutes</span>
   </div>
   <div class="time">
     <span id="seconds-' . $index . '">' . $temps_restant["secondes"] . '</span>
     <span class="label">Secondes</span>
   </div>
 </div>';
 




?>
<?php endforeach;
for ($ii = 0; $ii < count($title_projet); $ii++) {









  $div .= '
  <div class="id_des_2">
    <b>' . $id_sha1_projet[$ii] . '</b>
  
    <div class="h1">
      ' . AsciiConverter::asciiToString($title_projet[$ii]) . '
    </div>
  
    <div class="taille_img">
      <img src="' . $img_projet_src1[$ii] . '" alt="" srcset="">
    </div>
  
    <div>
      <div>
        <b class="grey_">' . $date_inscription_projet[$ii] . '</b>
      </div>';
  
  $string_description_projet = AsciiConverter::asciiToString($description_projet[$ii]);
  $string_description_projet = str_replace("&lt;", "<", $string_description_projet);
  $string_description_projet = str_replace("&gt;", ">", $string_description_projet);
  
  $div .= $string_description_projet;
  
  $div .= "<br/>";
  $div .= '</div>';
  














 
 



  ?>




  <?php






 require 'comment.php';



  if (isset($_SESSION["index"])) {


    $div .= '
    <h3 style="margin-top:75px">Ajouter un commentaire</h3>
    
    <div class="div_comment">
      <div>
        <textarea name="" id="' . 'text_' . $id_sha1_projet[$ii] . '" placeholder="votre text"></textarea>
      </div>
      <div onclick="envoie_comment(this)" class="' . $id_sha1_projet[$ii] . ' val_comment_function"> ENVOYER</div>
    </div>
    
    </div>';
    

  }
 
}

 

     $div .= '<link rel="stylesheet" href="../css_data.css">'   ; 


echo    $div  ; 


?>
 


 