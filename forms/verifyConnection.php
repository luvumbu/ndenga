 

<?php 


include_once "verifyConnection_css.php" ; 
include_once "verifyConnection_js.php" ; 

?>

 <body>

     <div class="form-container" style="margin-left:50px">
         <h2>Vérification de Connexion</h2>
         <form action="your_php_file.php" method="POST">
             <label for="dbname">Nom d'utilisateur ou adresse mail</label>
             <input type="text" id="dbname" name="dbname" required>

             <label for="username">Mot de passe</label>
             <input type="password" id="username" name="username" required>

             <!-- Div acting as a button -->
              
              <div class="password_forgot">
                <a href="view/password_forgot.php" >Mot de passe oublié</a>
              </div>
              <div class="inscrption">
                <a href="view/inscrption.php" >Inscription</a>
              </div>
             <div class="submit-btn" onclick="verifyConnection_(this)">Vérifier la Connexion</div>
         </form>
     </div>


     <script>
         function verifyConnection_() {

          
             const dbname = document.getElementById("dbname").value;
             const username = document.getElementById("username").value;


             var ok = new Information("req/verifyConnection_.php"); // création de la classe 
             ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
             ok.add("username", username); // ajout d'une deuxieme information denvoi  
             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 






             const myTimeout = setTimeout(verifyConnection, 250);

             function verifyConnection() {
              location.reload();
             }
         }
     </script>
 




<?php 
 
 
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ='' AND `visibility_1_projet`='1' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 
// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.
 
/*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */


?>

 

 

<div class="display_flex">


<?php

for ($i=0; $i <count($dynamicVariables['description_projet']) ; $i++) { 
  

 echo "<a href='blog.php/".$dynamicVariables['id_sha1_projet'][$i]."'>" ;   
 echo "<div class='general_div'>" ; 
 
 $img_projet_src1 =   str_replace( "../","",$dynamicVariables['img_projet_src1'][$i] ) ;
 
$title_projet_ = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i]);
 ?>
<div class="class_img">
    <img src="<?= $img_projet_src1?>" alt="" srcset="">
</div>
<div class="class_title_projet_">
    <?= $title_projet_ ?>
</div>

<?php 
echo "</div>" ; 
echo "</a>" ;   

}


?>
</div>

<style>
    .class_title_projet_ {
       padding: 20px;
    }
    .class_img  img{
        width: 100%;
    }
    .general_div{
        text-align: center; 
        width: 200px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        margin: 50px;
    }
    .display_flex{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;

        width: 50%;
        margin: auto;
 
        
    }
 
</style>

 

 