



<?php

$__ = "__";
$index_0 = $_SESSION["index"][0];
$index_1 = $_SESSION["index"][1];
$index_2 = $_SESSION["index"][2];
$index_3 = $_SESSION["index"][3];



$index = $index_0 . $__ . $index_1 . $__ . $index_2 . $__ . $index_3;

$index_insert = $_SESSION["index"][3] . '__insert';
$index_update = $index . $__ . "update" . $__;
$index_all = $index . $__ . "all" . $__;
$index_remove = $index . $__ . "remove" . $__;
$index_add = $index . $__ . "add" . $__;

$index_sitting = $index . $__ . "sitting" . $__;
$index_img = $index . $__ . "img" . $__;
$index_calendar = $index . $__ . "calendar" . $__;

$index_visivility = $index . $__ . "visivility" . $__;

$index_profil = $index . $__ . "profil" . $__;


$index_style = $index . $__ . "style" . $__;



$index_img_user = $index . $__ . "img_2" . $__;
$databaseHandler = new DatabaseHandler($dbname, $username);



$header_text_1 = "Option insert";
$header_text_2 = "MES PROJET";
$header_text_3 = "MON PROFIL";
$header_text_4 = "Liste style";





$databaseHandler__ = new DatabaseHandler($dbname, $username);


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `style_pages` WHERE 1";

// Récupération des informations des tables enfant liées
$databaseHandler__->getListOfTables_Child("style_pages");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler__->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler__->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique


$id_style_page_auto__ = $dynamicVariables['id_style_page_auto'];
$id_general__ = $dynamicVariables['id_general'];

$name_style_pages__ = $dynamicVariables['name_style_pages'];
$header_style_pages__ = $dynamicVariables['header_style_pages'];
$total_style_pages__ = $dynamicVariables['total_style_pages'];
$total_style_parent_pages__ = $dynamicVariables['total_style_parent_pages'];
$id_sha1_style_page__ = $dynamicVariables['id_sha1_style_page'];





$id_style_page__ = $dynamicVariables['id_style_page'];
$id_user_style_page__ = $dynamicVariables['id_user_style_page'];
$date_inscription_style_page__ = $dynamicVariables['date_inscription_style_page'];







$html_mode_projet_1_dynamic_1_ = $html_mode_projet_1_dynamic_1[$i];
$html_mode_projet_2_dynamic_1_ = $html_mode_projet_2_dynamic_1[$i];

$total_style_parent_pages__x = $dynamicVariables['total_style_parent_pages'][$i];







?>

<script>
    const header_text_1 = '<?= $header_text_1 ?>';
    const header_text_2 = '<?= $header_text_2 ?>';
    const header_text_3 = '<?= $header_text_3 ?>';
    const header_text_4 = '<?= $header_text_4 ?>';
</script>

<div class="header_element" onkeyup="">






    <?php

    if ($dbname == $_SESSION["index"][0]) {
          ?>
    <div class="<?php echo  $index_insert ?>" onclick="function_global(this)"><?= $header_text_1 ?></div>
    <div class="<?php echo  $index_all ?>" onclick="a(this)"><?= $header_text_2 ?></div>
    <div class="<?php echo  $index_style ?>" onclick="a(this)"><?= $header_text_4 ?></div>


    <?php   
    }  

    

    ?>
    <div class="<?php echo  $index_profil ?>" onclick="a(this)"><?= $header_text_3 ?></div>


    <a href="Class/Log_off.php" class="deconexion">
        <div>DECONNEXION</div>
    </a>

</div>
<?php



if ($_SESSION["home"] == "profil") {
    require_once 'view/mon_profil.php';
}
if (isset($_SESSION["home"])) {


    switch ($_SESSION["home"]) {

        case "all":


            $req_sql = "SELECT * FROM projet WHERE id_sha1_user_projet='$index_3' AND activation_projet ='' AND id_sha1_parent_projet =''  ";
            break;
        case "insert":

            $req_sql = "SELECT * FROM `projet` WHERE id_sha1_user_projet='$index_3'  ORDER BY  `id_projet` DESC LIMIT 1";

            break;
        case "":
        case "profil":

            $id_sha1_projet =  $_SESSION["id_sha1_projet"];
            $req_sql = "SELECT * FROM projet WHERE id_sha1_projet ='$id_sha1_projet' AND activation_projet ='' ORDER BY  `id_projet`  ";
            break;
    }




    $databaseHandler->getListOfTables_Child("projet");
    $databaseHandler->getDataFromTable2X($req_sql);
    $databaseHandler->get_dynamicVariables();






    $id_projet_dynamic_1 = $dynamicVariables['id_projet'];
    $activation_projet_dynamic_1 = $dynamicVariables['activation_projet'];
    $id_general_dynamic_1 = $dynamicVariables['id_general'];
    $id_user_projet_dynamic_1 = $dynamicVariables['id_user_projet'];
    $id_sha1_user_projet_dynamic_1 = $dynamicVariables['id_sha1_user_projet'];




    $color_projet_dynamic_1 = $dynamicVariables['color_projet'];
    $google_title_projet_dynamic_1 = $dynamicVariables['google_title_projet'];
    $level_urgence_projet_dynamic_1 = $dynamicVariables['level_urgence_projet'];



    $change_meta_name_projet_dynamic_1 = $dynamicVariables['change_meta_name_projet'];

    $style_pages_projet_dynamic_1 = $dynamicVariables['style_pages_projet'];
    $name_pages_projet_dynamic_1 = $dynamicVariables['name_pages_projet'];



    $html_mode_projet_1_dynamic_1 = $dynamicVariables['html_mode_projet_1'];
    $html_mode_projet_2_dynamic_1 = $dynamicVariables['html_mode_projet_2'];





    $change_meta_content_projet_dynamic_1 = $dynamicVariables['change_meta_content_projet'];









    $id_sha1_projet_dynamic_1 = $dynamicVariables['id_sha1_projet'];
    $id_sha1_parent_projet_dynamic_1 = $dynamicVariables['id_sha1_parent_projet'];
    $id_sha1_parent_projet2_dynamic_1 = $dynamicVariables['id_sha1_parent_projet2'];
    $cryptage_projet_dynamic_1 = $dynamicVariables['cryptage_projet'];
    $input_cryptage_projet_dynamic_1 = $dynamicVariables['input_cryptage_projet'];
    $name_projet_dynamic_1 = $dynamicVariables['name_projet'];
    $name_extention_projet_dynamic_1 = $dynamicVariables['name_extention_projet'];
    $statue_projet_dynamic_1 = $dynamicVariables['statue_projet'];
    $title_projet_dynamic_1 = $dynamicVariables['title_projet'];
    $description_projet_dynamic_1 = $dynamicVariables['description_projet'];
    $password_projet_dynamic_1 = $dynamicVariables['password_projet'];
    $visibility_1_projet_dynamic_1 = $dynamicVariables['visibility_1_projet'];
    $visibility_2_projet_dynamic_1 = $dynamicVariables['visibility_2_projet'];
    $screen_shoot_projet_dynamic_1 = $dynamicVariables['screen_shoot_projet'];
    $img_projet_src1_dynamic_1 = $dynamicVariables['img_projet_src1'];
    $img_projet_src2_dynamic_1 = $dynamicVariables['img_projet_src2'];
    $img_projet_visibility_dynamic_1 = $dynamicVariables['img_projet_visibility'];
    $group_projet_dynamic_1 = $dynamicVariables['group_projet'];
    $heure_debut_projet_dynamic_1 = $dynamicVariables['heure_debut_projet'];
    $date_debut_projet_dynamic_1 = $dynamicVariables['date_debut_projet'];
    $dure_projet_dynamic_1 = $dynamicVariables['dure_projet'];
    $publication_date_j_projet_dynamic_1 = $dynamicVariables['publication_date_j_projet'];
    $publication_date_h_projet_dynamic_1 = $dynamicVariables['publication_date_h_projet'];
    $shop_projet_dynamic_1 = $dynamicVariables['shop_projet'];
    $date_inscription_projet_dynamic_1 = $dynamicVariables['date_inscription_projet'];




    $style_pages_projet_dynamic_1 = $dynamicVariables['style_pages_projet'];













    $html_mode_projet_1_ = $dynamicVariables['html_mode_projet_1'];
    $html_mode_projet_2_ = $dynamicVariables['html_mode_projet_2'];









    $count = count($id_sha1_projet_dynamic_1);
    /*
 
var_dump($dynamicVariables['date_inscription_projet']) ; 
 $databaseHandler = new DatabaseHandler($dbname, $username);
 $req_sql = "SELECT * FROM projet WHERE `id_sha1_parent_projet` ='1734507386' ";
 $databaseHandler->getListOfTables_Child("projet");
 $databaseHandler->getDataFromTable2X($req_sql);
 $databaseHandler->get_dynamicVariables();
 $count = count($id_sha1_projet_dynamic_1 );
 var_dump($dynamicVariables['date_inscription_projet']) ; 
 */


    if ($_SESSION["home"] == "style") {
        require_once 'view/style.php';
    } else {
        require_once 'home_modif.php';
    }
}



//echo  'HOME : '.$_SESSION["home"] ; 
?>


<script>
    function function_global(_this) {



        var element = afficherValeursFormattees2(_this.className, __);
        var ok = new Information("config/function_global.php"); // création de la classe 




        ok.add("id_sha1_user_projet", element[0]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 


        const myTimeout = setTimeout(xt, 300);

        function xt() {



            if (element[1] == "insert") {
                window.location.href = "qr_code_1/index.php";
            } else {
                location.reload();
            }
        }
    }

    function a(_this) {


        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);



        var ok = new Information("config/general_function.php"); // création de la classe 

        // valeur si update       
        if (_this.value == undefined) {
            _this.value = "";
        }
        if (element[5] == undefined) {
            element[5] = "";
        }
        // valeur si update 
        // le tableau a une case en plus dans les parametres 





        if (_this.tagName != "INPUT") {
            ok.add("value", _this.innerHTML); // ajout de l'information pour lenvoi 

        } else {
            ok.add("value", _this.value); // ajout de l'information pour lenvoi 

        }



        ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
        ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
        ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
        ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
        ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 




        if (_this.tagName == "IMG") {
            var add_img = document.getElementById("add_img").className;

            if (add_img == "display_none") {
                document.getElementById("add_img").className = "";
            } else {
                document.getElementById("add_img").className = "display_none";


            }
        }
        if (_this.tagName == "DIV") {


            if (_this.tagName != "img") {
                const myTimeout = setTimeout(xxxx, 250);
            }

        }


        function xxxx() {


            switch (_this.innerHTML) {
                case header_text_1:
                case header_text_2:
                case header_text_3:
                case header_text_4:

                    location.reload();
                    break;

                default:
                    // code block
            }






        }

    }
</script>


<div id="add_img" class="display_none">

    <?php



    require_once "view/add_img.php";
    ?>

</div>
<style>
    .header_element {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(135deg, #1e1e2e, #3a3a55);
        padding: 15px 30px;

        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 30px;
    }

    .header_element div {
        color: #ffffff;
        font-weight: bold;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
    }

    .header_element div:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: scale(1.05);
    }

    .deconexion {
        text-decoration: none;
    }

    .deconexion div {
        background: #ff4d4d;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background 0.3s, transform 0.2s;
    }

    .deconexion div:hover {
        background: #d63333;
        transform: scale(1.05);
    }
</style>