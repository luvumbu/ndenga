<?php
session_start() ; 


require_once "Class/Give_url.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once 'Class/AsciiConverter.php';


// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();

// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');



# Tableau des couleurs
$colors_array = array(
  '#f24118',
  '#65baa7',
  '#935c7c',
  '#c0ad2d',
  '#373319'
);


$name_r = $url->get_elements()[0];


$ramdom_color = $colors_array[rand(0, 4)];






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
  $sha1_ =  $databaseHandler->tableList_info2[5];
  for ($i_a = 0; $i_a < count($databaseHandler->tableList_info2[13]); $i_a++) {


    echo "<div id='id_" . $sha1_[$i_a] . "' class='" . $sha1_[$i_a] . " section_1 hexagon' onclick='function_projet_2(this)'>";
    echo AsciiConverter::asciiToString($databaseHandler->tableList_info2[13][$i_a]); // Affiche "Hello"
    echo "</div>";
  }




  $projet_1 =  [



    "id_projet" => $databaseHandler->tableList_info2[0],
    "activation_projet" => $databaseHandler->tableList_info2[1],
    "id_general" => $databaseHandler->tableList_info2[2],
    "id_user_projet" => $databaseHandler->tableList_info2[3],
    "id_sha1_user_projet" => $databaseHandler->tableList_info2[4],
    "id_sha1_projet" => $databaseHandler->tableList_info2[5],
    "id_sha1_parent_projet" => $databaseHandler->tableList_info2[6],
    "id_sha1_parent_projet2" => $databaseHandler->tableList_info2[7],
    "cryptage_projet" => $databaseHandler->tableList_info2[8],
    "input_cryptage_projet" => $databaseHandler->tableList_info2[9],
    "name_projet" => $databaseHandler->tableList_info2[10],
    "name_extention_projet" => $databaseHandler->tableList_info2[11],
    "statue_projet" => $databaseHandler->tableList_info2[12],
    "title_projet" => $title_projet,
    "description_projet" => $description_projet,
    "password_projet" => $databaseHandler->tableList_info2[15],
    "visibility_1_projet" => $databaseHandler->tableList_info2[16],
    "visibility_2_projet" => $databaseHandler->tableList_info2[17],
    "screen_shoot_projet" => $databaseHandler->tableList_info2[18],
    "img_projet_src1" => $databaseHandler->tableList_info2[19],
    "img_projet_src2" => $databaseHandler->tableList_info2[20],
    "img_projet_visibility" => $databaseHandler->tableList_info2[21],
    "group_projet" => $databaseHandler->tableList_info2[22],
    "heure_debut_projet" => $databaseHandler->tableList_info2[23],
    "date_debut_projet" => $databaseHandler->tableList_info2[24],
    "dure_projet" => $databaseHandler->tableList_info2[25],
    "publication_date_j_projet" => $databaseHandler->tableList_info2[26],
    "publication_date_h_projet" => $databaseHandler->tableList_info2[27],
    "shop_projet" => $databaseHandler->tableList_info2[28],
    "date_inscription_projet" => $databaseHandler->tableList_info2[29]


  ];




  $img_projet_src1 = $databaseHandler->tableList_info2[19];
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
  }

  .projet_1_data div {
    border: 1px solid rgba(0, 0, 0, 0.2);
    padding: 18px;
    border-radius: 15px;
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
        border: 1px solid #bd4a23;
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






echo '<div class="id_des_2 total">';

echo '<b> Total element : ' . count($date_inscription_projet) . '</b>';
echo '</div>';
echo '</div>';

?>




<?php

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

  echo AsciiConverter::asciiToString($description_projet[$ii]); // Affiche "Hello"
  echo '</div>';



  ?>




<?php 

 
 
 

 
 require 'comment.php' ; 



if(isset($_SESSION["index"])){
  

?>
<h3 style='margin-top:75px'>Ajouter un commentaire</h3>

  <div class="div_comment">
    <div>
      <textarea name="" id="<?= 'text_'.$id_sha1_projet[$ii] ?>" placeholder="votre text"></textarea>
    </div>
    <div onclick="envoie_comment(this)" class="<?= $id_sha1_projet[$ii].' val_comment_function' ?>"> ENVOYER</div>
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
  .div_comment input ,.div_comment textarea {
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
  .val_comment_function{
    background-color: var(--blue);
    color: white;
    padding: 10px;
    width: 150px;
    text-align: center

  }
  .val_comment_function:hover{
    cursor: pointer;
  }
</style>