<?php
$index = $_SESSION["index"]["3"];
//var_dump($_SESSION["index"] ) ; 

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);


$req_sql = "SELECT * FROM `style_pages` WHERE id_user_style_page ='$index'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("style_pages");
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


<style>
    .barr_noire {
        background-color: black;
        width: 100%;
        padding-top: 10px;
        margin-bottom: 30px;
        margin-top: 30px;

    }
</style>
<div class="parent_input">
    <label for="">name_style_pages</label>
    <input type="text" class="input_info_1 input_info" id="name_style_pages" placeholder="name_style_pages">
    <label for="">header_style_pages</label>
    <textarea class="textarea_info_1 textarea_info" id="header_style_pages" placeholder="header_style_pages"></textarea>
    <label for="">total_style_pages</label>
    <textarea class="textarea_info_2 textarea_info" id="total_style_pages" placeholder="total_style_pages"></textarea>
    <label for="">total_style_text_pages</label>
    <textarea class="textarea_info_3 textarea_info" id="total_style_text_pages" placeholder="total_style_text_pages"></textarea>
    <label for="">total_style_parent_pages</label>
    <textarea class="textarea_info_4 textarea_info" id="total_style_parent_pages" placeholder="total_style_parent_pages"></textarea>
    <div class="btn_input" onclick="btn_input(this)">ENVOYER</div>

</div>


<div class="barr_noire"></div>

<?php

for ($i = 0; $i < count($dynamicVariables['id_style_page_auto']); $i++) {


    $id_sha1_style_page_  = $dynamicVariables['id_sha1_style_page'][$i];
    $name_style_pages_  = $dynamicVariables['name_style_pages'][$i];
    $total_style_pages_  = $dynamicVariables['total_style_pages'][$i];
    $header_style_pages_  = $dynamicVariables['header_style_pages'][$i];
    $total_style_parent_pages_  = $dynamicVariables['total_style_parent_pages'][$i];
    $total_style_text_pages_  = $dynamicVariables['total_style_text_pages'][$i];


    $total_style_pages_ =  AsciiConverter::asciiToString($total_style_pages_); // Affiche "Hello"
    $header_style_pages_ =  AsciiConverter::asciiToString($header_style_pages_); // Affiche "Hello"
    $total_style_parent_pages_ =  AsciiConverter::asciiToString($total_style_parent_pages_); // Affiche "Hello"
    $total_style_text_pages_ =  AsciiConverter::asciiToString($total_style_text_pages_); // Affiche "Hello"





?>


    <div class="parent_input">
        <label for="">name_style_pages</label>
        <input title="<?= $id_sha1_style_page_ ?>" value="<?= $name_style_pages_  ?>" type="text" class="input_info_1 input_info" id="name_style_pages_<?= $id_sha1_style_page_ ?>" placeholder="name_style_pages">
        <label for="">header_style_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_1 textarea_info" id="header_style_pages_<?= $id_sha1_style_page_ ?>" placeholder="header_style_pages"><?= $header_style_pages_  ?></textarea>
        <label for="">total_style_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_2 textarea_info" id="total_style_pages_<?= $id_sha1_style_page_ ?>" placeholder="total_style_pages"><?= $total_style_pages_  ?></textarea>
        <label for="">total_style_text_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_3 textarea_info" id="total_style_text_pages_<?= $id_sha1_style_page_ ?>" placeholder="total_style_text_pages"><?= $total_style_text_pages_  ?></textarea>
        <label for="">total_style_parent_pages</label>
        <textarea title="<?= $id_sha1_style_page_ ?>" class="textarea_info_4 textarea_info" id="total_style_parent_pages_<?= $id_sha1_style_page_ ?>" placeholder="total_style_parent_pages"><?= $total_style_parent_pages_  ?></textarea>

        <div class="flex_blox">
            <div class="btn_input" onclick="btn_update(this)" title="<?= $id_sha1_style_page_ ?>">UPDATE</div>
<a href="<?= 'style_page_flex_box.php/'.$id_sha1_style_page_  ?>">
<div class="btn_input">FLEX-BOX</div>

</a>
        </div>
    </div>
<?php
}
?>
<script>
    function btn_input(_this) {
        _this.style.display = "none";


        var name_style_pages = document.getElementById("name_style_pages").value;
        var header_style_pages = document.getElementById("header_style_pages").value;
        var total_style_pages = document.getElementById("total_style_pages").value;
        var total_style_text_pages = document.getElementById("total_style_text_pages").value;
        var total_style_parent_pages = document.getElementById("total_style_parent_pages").value;


        var ok = new Information("config/style_pages.php"); // création de la classe 

        ok.add("name_style_pages", name_style_pages); // ajout de l'information pour lenvoi 
        ok.add("header_style_pages", header_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_pages", total_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_text_pages", total_style_text_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_parent_pages", total_style_parent_pages); // ajout de l'information pour lenvoi 

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 



        const myTimeout = setTimeout(reload_, 250);

        function reload_() {
            location.reload();



        }

    }

 
    function btn_update(_this) {
        _this.style.display = "none";
        var name_style_pages = document.getElementById("name_style_pages_" + _this.title).value;
        var header_style_pages = document.getElementById("header_style_pages_" + _this.title).value;
        var total_style_pages = document.getElementById("total_style_pages_" + _this.title).value;
        var total_style_text_pages = document.getElementById("total_style_text_pages_" + _this.title).value;
        var total_style_parent_pages = document.getElementById("total_style_parent_pages_" + _this.title).value;



        var ok = new Information("config/syle_pages_update.php"); // création de la classe 

        ok.add("name_style_pages", name_style_pages); // ajout de l'information pour lenvoi 
        ok.add("header_style_pages", header_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_pages", total_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_text_pages", total_style_text_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_parent_pages", total_style_parent_pages); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_style_page", _this.title); // ajout de l'information pour lenvoi 



        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 



        const myTimeout = setTimeout(reload_, 250);

        function reload_() {

            _this.style.display = "block";



        }

    }
</script>

<style>
    .parent_input {
        width: 500px;
        margin: auto;
    }

    .textarea_info,
    .input_info {

        width: 100%;
        margin-bottom: 15px;

    }

    .textarea_info_1 {
        border: 3px solid rgba(200, 0, 0, 0.5);
        padding-top: 10px;
        padding-bottom: 10px;

    }

    .textarea_info_2 {
        border: 3px solid rgba(53, 201, 152, 0.5);
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .textarea_info_3 {
        border: 3px solid rgba(96, 21, 167, 0.5);
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .textarea_info_4 {
        border: 3px solid rgba(117, 172, 72, 0.5);
        padding-top: 25px;
        padding-bottom: 25px;
    }

    .btn_input {
        background: linear-gradient(rgba(53, 201, 152, 0.5), rgba(96, 21, 167, 0.5), rgba(117, 172, 72, 0.5));
        padding: 20px;
        color: white;
        width: 100px;
        text-align: center;
        text-shadow: 1px 1px 3px black;

    }

    .btn_input:hover {
        background: linear-gradient(rgba(96, 21, 167, 0.5), rgba(53, 201, 152, 0.5), rgba(117, 172, 72, 0.5));
        padding: 20px;
        color: white;
        width: 100px;
        text-align: center;
        text-shadow: 1px 1px 3px black;

        cursor: pointer;
    }
    .flex_blox{
        display: flex;
        justify-content: space-around;
    }
</style>