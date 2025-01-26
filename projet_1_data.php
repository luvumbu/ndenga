<?php
session_start();


require_once "Class/Give_url.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once 'Class/AsciiConverter.php';
require_once 'Class/Get_anne_html_html.php';
require_once 'Get_anne_html_html_js.php';




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




/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */

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

<div class="projet_1_data">


  <?php
  //  $sha1_ =  $dynamicVariables['title_projet'];

  //$dynamicVariables['id_sha1_projet']
  $sha1_ = $dynamicVariables['id_sha1_projet'];

  for ($i_a = 0; $i_a < count($dynamicVariables['title_projet']); $i_a++) {


      


    $margin_ =  fmod($i_a, count($margin_array)) ;

    $margin_info = $margin_array[$margin_];
    echo "<div style='$margin_info'   id='id_" . $sha1_[$i_a] . "' class='" . $sha1_[$i_a] . " section_1 hexagon colors_array_" . fmod($i_a, count($colors_array)) . "' onclick='function_projet_2(this)'>";
    echo AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i_a]); // Affiche "Hello"
    echo "</div>";
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

  /*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */

  ?>
</div>


<?php

echo '
<style>
    :root {
  --blue: ' . $ramdom_color . ';
 
}
</style>

';





echo '<style>


#id_des_' . $name_r . '{
  display: block;
    border:2px solid  var(--blue);
    color:white ; 
    padding:25px ; 
    width:80% ; 
    margin:auto ; 
    margin-top:100px ; 
    border-radius:8px ; 

}';
?>




<style>
  .id_des_2 {
    border: 2px solid var(--blue);
    color: white;
    padding: 25px;
    width: 80%;
    margin: auto;
    margin-top: 100px;
    border-radius: 8px;
  }

  #id_des_ {
    display: none;
  }

  .projet_1_data {
    display: flex;
    justify-content: space-around;
    margin-top: 75px;
    flex-wrap: wrap;
    max-width: 700px;
    margin: auto;
  }

  .projet_1_data div {
    border: 1px solid rgba(0, 0, 0, 0.2);
    padding: 18px;
    border-radius: 15px;
    margin: 2px;
  }

  .projet_1_data div:hover {
    cursor: pointer;
  }


















  /*
    exagon  
    
    */



  .hexagon {
    position: relative;
    width: 150px;
    height: 130px;
    background-color: var(--blue);
    /* Couleur rouge foncé */
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-family: Arial, sans-serif;
    font-size: 16px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    /* Ombre pour donner du relief */
  }

  .hexagon::before,
  .hexagon::after {
    content: '';
    position: absolute;
    width: 0;
    border-left: 75px solid transparent;
    border-right: 75px solid transparent;
  }

  .hexagon::before {
    border-bottom: 45px solid var(--blue);
    top: -45px;
  }

  .hexagon::after {
    border-top: 45px solid var(--blue);
    bottom: -45px;
  }
</style>





<?php
/*
echo '<style>
    #id_'.$name_r.' img{
        border: 1px solid #bd4a23;
    }

</style>' ; 
*/
?>


<?php

echo '<style>
    #id_' . $name_r . ' {
        border: 1px solid ' . $ramdom_color . ';
        border-radius:15px;
    border-bottom: 45px solid var(--blue);

    }

</style>';















?>


<?php
/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */








$title_projet  = $dynamicVariables['title_projet'];
$description_projet  = $dynamicVariables['description_projet'];
$img_projet_src1  = $dynamicVariables['img_projet_src1'];

$id_sha1_projet  = $dynamicVariables['id_sha1_projet'];




$date_inscription_projet  = $dynamicVariables['date_inscription_projet'];



$events = [];


echo '<div class="id_des_2 total">';

echo '<b> Total element : ' . count($date_inscription_projet) . '</b>';
echo '</div>';
echo '</div>';


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
  <div id="countdown-<?php echo $index; ?>" class="countdown-container">
    <div class="event-name"><?php echo $temps_restant["event_name"]; ?></div> <!-- Afficher le nom de l'événement -->
    <div class="time">
      <span id="years-<?php echo $index; ?>"><?php echo $temps_restant["annees"]; ?></span>
      <span class="label">Années</span>
    </div>
    <div class="time">
      <span id="days-<?php echo $index; ?>"><?php echo $temps_restant["jours"]; ?></span>
      <span class="label">Jours</span>
    </div>
    <div class="time">
      <span id="hours-<?php echo $index; ?>"><?php echo $temps_restant["heures"]; ?></span>
      <span class="label">Heures</span>
    </div>
    <div class="time">
      <span id="minutes-<?php echo $index; ?>"><?php echo $temps_restant["minutes"]; ?></span>
      <span class="label">Minutes</span>
    </div>
    <div class="time">
      <span id="seconds-<?php echo $index; ?>"><?php echo $temps_restant["secondes"]; ?></span>
      <span class="label">Secondes</span>
    </div>

  </div>
<?php endforeach;
for ($ii = 0; $ii < count($title_projet); $ii++) {

























  echo '<div class="id_des_2" >';

  echo '<b>' . $id_sha1_projet[$ii] . '</b>';





  echo '<div class="h1">';
  echo AsciiConverter::asciiToString($title_projet[$ii]); // Affiche "Hello"
  echo '</div>';

?>
  <div class="taille_img">
    <img src="<?= $img_projet_src1[$ii] ?>" alt="" srcset="">
  </div>

  <?php

  echo '<div  >';
  echo '<div>';

  echo '<b class="grey_">' . $date_inscription_projet[$ii] . '</b>';
  echo '</div>';
  $string_description_projet = AsciiConverter::asciiToString($description_projet[$ii]);

  $string_description_projet = str_replace("&lt;", "<", $string_description_projet);
  $string_description_projet = str_replace("&gt;", ">", $string_description_projet);





  echo  $string_description_projet;



  echo "<br/>";
  echo '</div>';



  ?>




  <?php






  require 'comment.php';



  if (isset($_SESSION["index"])) {


  ?>
    <h3 style='margin-top:75px'>Ajouter un commentaire</h3>

    <div class="div_comment">
      <div>
        <textarea name="" id="<?= 'text_' . $id_sha1_projet[$ii] ?>" placeholder="votre text"></textarea>
      </div>
      <div onclick="envoie_comment(this)" class="<?= $id_sha1_projet[$ii] . ' val_comment_function' ?>"> ENVOYER</div>
    </div>


<?php

  }
  echo '</div>';
}





?>
<?php
?>





<style>
  .div_comment {
    margin-top: 75px;
  }

  .div_comment input,
  .div_comment textarea {
    width: 100%;
    border-radius: 3px;
    margin-bottom: 15px;
  }

  .grey_ {
    color: gray;

  }

  .repondre {
    background-color: black;
    color: white;
    padding: 7px;
    margin-bottom: 15px;
    width: 300px;
    text-align: center;
  }

  .id_des_2 {

    border: 2px solid var(--blue);




    width: 80%;
    margin: auto;
    margin-top: 75px;
    padding: 20px;
    border-radius: 7px;
    margin-bottom: 75px;
  }

  .id_des_3 {
    background-color: var(--blue);
    color: white;
    border-radius: 8px;
    padding: 15px;
  }

  .val_comment {
    background-color: var(--blue);
    width: 300px;
    color: white;
    padding: 8px;
    text-align: center;
    border-radius: 7px;

  }

  .val_comment:hover {
    cursor: pointer;
  }

  .add_comment {
    margin-top: 50px;
    margin-bottom: 50px;

  }

  .add_comment input {
    width: 100%;
    margin: auto;
    margin-bottom: 25px;
    padding: 3px;
    border-radius: 7px;
  }

  .add_comment textarea {
    width: 100%;
    margin: auto;
    margin-bottom: 25px;
    padding: 7px;
    border-radius: 7px;
  }

  .id_des_2 .h1 {
    text-align: center;
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .div_img {
    width: 300px;
    margin: auto;
    margin-top: 70px;
    margin-bottom: 70px;

  }

  .div_img img {
    width: 100%;
  }

  .say_comm {
    margin-top: 25px;
    margin-bottom: 25px;

  }


  @media only screen and (max-width: 600px) {
    .id_des_2 {






      width: 95%;
      border: 2px solid rgba(0, 0, 0, 0);


    }
  }

  .total {
    width: 300px;
    text-align: center;
  }
</style>

<style>
  .total_comment {
    background-color: var(--blue);
    color: white;
  }

  .total_comment_1 {
    border-bottom: 1px solid black;
    padding: 5px;

  }

  .total_comment_2 {
    background-color: var(--blue);
    margin-bottom: 25px;
    padding: 25px;
  }

  .taille_img {
    width: 300px;
    margin: auto;
    margin-top: 75px;
    margin-bottom: 75px;
  }

  .taille_img img {
    width: 100%;
  }

  .val_comment_function {
    background-color: var(--blue);
    color: white;
    padding: 10px;
    width: 150px;
    text-align: center
  }

  .val_comment_function:hover {
    cursor: pointer;
  }

  .colors_array_1 {

    background-color: #8f2704;
  }

  .colors_array_2 {

    background-color: #d35c54;
  }

  .colors_array_3 {

    background-color: #d99b97;
  }

  .colors_array_4 {

    background-color: #cdc24a;
  }


  .colors_array_5 {
    background-color: #c68a41;

  }



  .colors_array_6 {

    background-color: #a0b151;
  }

  .colors_array_7 {

    background-color: #489857;
  }

  .colors_array_8 {

    background-color: #5b6849;
  }

  .colors_array_0 {

    background-color: #373319;
  }






  .colors_array_0{
    padding-top: 1256px;
  }
</style>