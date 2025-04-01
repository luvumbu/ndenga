<style>
    /* Définition de la police par défaut pour tout le document */
    body {
        font-family: Arial, sans-serif;
    }

    /* Conteneur principal de l'éditeur */
    .editor-container {
        width: 80%;
        /* Largeur de 80% de la fenêtre */
        margin: 0 auto;
        /* Centrer horizontalement */
        padding: 20px;
        background-color: #f4f4f4;
        /* Couleur de fond gris clair */
        border-radius: 8px;
        /* Coins arrondis */
    }

    /* Barre d'outils située en haut */
    .toolbar {
        margin-bottom: 10px;
        /* Espacement sous la barre */
    }

    /* Style général pour les boutons, inputs et sélecteurs */
    button,
    input[type="color"],
    select {
        padding: 10px;
        margin-right: 10px;
        cursor: pointer;
        /* Curseur en mode pointer */
    }

    /* Zone de contenu de petite hauteur */
    .blog-content_1 {
        min-height: 25px;
        border: 1px solid #ccc;
        /* Bordure grise */
        padding: 10px;
        background-color: #fff;
        /* Fond blanc */
    }

    /* Zone de contenu plus grande */
    .blog-content_2 {
        min-height: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #fff;
    }

    /* Ajout d'un texte indicatif si le contenu éditable est vide */
    .blog-content[contenteditable="true"]:empty:before {
        color: #999;
        /* Couleur grise pour l’indication */
    }

    /* Alignement des éléments en ligne avec un espacement équitable */
    .display_flex_1 {
        display: flex;
        justify-content: space-around;
    }

    /* Marges pour un meilleur espacement */
    .margin_top_50 {
        margin-top: 20px;
        margin-bottom: 50px;
    }

    /* Bloc rouge avec marges et dimensions définies */
    .red {
        padding: 10px;
        background-color: red;
        width: 50px;
        height: 50px;
        margin-top: 25px;
        margin-bottom: 25px;
    }
</style>


<div title="<?php echo $id_sha1_projet_dynamic_1_; ?>" onkeyup="all_blok(this)" contenteditable="true"
    class="blog-content_1" id="title_projet_<?php echo $id_sha1_projet_dynamic_1_; ?>">
    <?php




    if ($html_mode_projet_1_dynamic_1_ != "1") {

        echo AsciiConverter::asciiToString($title_projet_dynamic_1_); // Affiche "Hello"

    } else {
        $texteNettoye = nettoyerTexteHtml(AsciiConverter::asciiToString($title_projet_dynamic_1_));

        echo $texteNettoye;
    }

    ?>
</div>


<?php

if ($html_mode_projet_1_dynamic_1_ != "1") {
?>
    <div class="display_flex_1">
        <div onclick="all_blok(this)" id="<?php echo 'html_mode_projet_1_' . $id_sha1_projet_dynamic_1_ ?>"
            class="html_mode_projet_1" title="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20"
                src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
            <img id="<?php echo 'html_2_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20"
                src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

        </div>
        <div>
            <div class="margin_top_1" onclick="all_blok(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img
                    width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png"
                    alt="clear-symbol--v1" /></div>

        </div>

    </div>
<?php
} else {
?>
    <div class="display_flex_1">
        <div onclick="all_blok(this)" id="<?php echo 'html_mode_projet_1_' . $id_sha1_projet_dynamic_1_ ?>"
            class="html_mode_projet_1" title="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20"
                src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
            <img id="<?php echo 'html_2_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20"
                src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

        </div>
        <div>
            <div class="margin_top_1" onclick="all_blok(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img
                    width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png"
                    alt="clear-symbol--v1" /></div>

        </div>

    </div>

<?php
}

?>

<div title="<?php echo $id_sha1_projet_dynamic_1_; ?>" onkeyup="all_blok(this)" contenteditable="true"
    class="blog-content_2" id="description_projet_<?php echo $id_sha1_projet_dynamic_1_; ?>">



    <?php

    if ($html_mode_projet_2_dynamic_1_ != "1") {

        echo AsciiConverter::asciiToString($description_projet_dynamic_1_); // Affiche "Hello"


    } else {
        $texteNettoye = nettoyerTexteHtml(AsciiConverter::asciiToString($description_projet_dynamic_1_));
        echo $texteNettoye;
    }
    ?>

</div>



<?php



if ($html_mode_projet_2_dynamic_1_ != "1") {
?>



    <div class="display_flex_1">
        <div onclick="all_blok(this)" class="html_mode_projet_2"
            id="<?= 'html_mode_projet_2_' . $id_sha1_projet_dynamic_1_ ?>" title="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_11_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20"
                src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
            <img id="<?php echo 'html_22_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 1;" width="20" height="20"
                src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

        </div>
        <div>
            <div class="margin_top_2" onclick="all_blok(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img
                    width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png"
                    alt="clear-symbol--v1" /></div>

        </div>

    </div>
<?php
} else {
?>

    <div class="display_flex_1">
        <div onclick="all_blok(this)" class="html_mode_projet_2"
            id="<?= 'html_mode_projet_2_' . $id_sha1_projet_dynamic_1_ ?>" title="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_11_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 1;" width="20" height="20"
                src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
            <img id="<?php echo 'html_22_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20"
                src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

        </div>
        <div>
            <div class="margin_top_2" onclick="all_blok(this)" title="<? $id_sha1_projet_dynamic_1_; ?>"><img width="50"
                    height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png"
                    alt="clear-symbol--v1" /></div>

        </div>

    </div>

<?php
}

?>


<div id="blog-content-2<?php echo $id_sha1_projet_dynamic_1_; ?>" title="<?php echo $id_sha1_projet_dynamic_1_; ?>">

</div>







<script>
    var src_1 = "https://img.icons8.com/ios/100/hide.png";
    var src_2 = "https://img.icons8.com/ios/50/visible--v1.png";

    function red_box_1(_this) {
        document.getElementById("title_projet_" + _this.title).innerHTML = "";
        var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;
        var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
        const myTimeout = setTimeout(xx, 250);

        function xx() {
            var ok = new Information("config/all_blok.php"); // création de la classe 
            ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
            ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 
            ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 
        }



    }

    function red_box_2(_this) {
        document.getElementById("description_projet_" + _this.title).innerHTML = "";
    }

    function html_mode_projet_dynamic_1(_this) {

        var element = afficherValeursFormattees2(_this.className, " ");
        var opacite = document.getElementById("html_1_" + element[0]).style.opacity;
        console.log(opacite);
        if (opacite == 0.2) {
            html_mode_projet = "1";
            document.getElementById("html_1_" + element[0]).style.opacity = 1;
            document.getElementById("html_2_" + element[0]).style.opacity = 0.2;

        } else {
            document.getElementById("html_1_" + element[0]).style.opacity = 0.2;
            document.getElementById("html_2_" + element[0]).style.opacity = 1;
            html_mode_projet = "";
        }

        var ok = new Information("config/html_mode_projet.php"); // création de la classe 
        ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
        ok.add("html_mode_projet_1", html_mode_projet); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp  
        const myTimeout = setTimeout(time_out, 250);

        function time_out() {
            location.reload();
        }
    }




    var all_blok_ = false;

    function all_blok(_this) {
        var element = afficherValeursFormattees2(_this.className, " ");
        var visivility = "";
        var reload_page = false;
        switch (_this.className) {
            case "blog-content_1":
            case "blog-content_2":
                break;
            case "html_mode_projet_1":
                var opacite = document.getElementById("html_1_" + _this.title).style.opacity;
                if (opacite == 0.2) {
                    html_mode_projet_1 = "on";
                    document.getElementById("html_1_" + _this.title).style.opacity = 1;
                    document.getElementById("html_2_" + _this.title).style.opacity = 0.2;


                } else {
                    document.getElementById("html_1_" + _this.title).style.opacity = 0.2;
                    document.getElementById("html_2_" + _this.title).style.opacity = 1;
                    html_mode_projet_1 = "";
                }
                reload_page = true;
                break;


            case "html_mode_projet_2":

                var opacite = document.getElementById("html_11_" + _this.title).style.opacity;

                if (opacite == 0.2) {

                    html_mode_projet_2 = "on";
                    document.getElementById("html_11_" + _this.title).style.opacity = 1;
                    document.getElementById("html_22_" + _this.title).style.opacity = 0.2;

                } else {
                    document.getElementById("html_11_" + _this.title).style.opacity = 0.2;
                    document.getElementById("html_22_" + _this.title).style.opacity = 1;
                    html_mode_projet_2 = "";
                }
                reload_page = true;

                break;
            case "margin_top_1":

                document.getElementById("title_projet_" + _this.title).innerHTML = "";
                var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;
                var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
                break;
            case "margin_top_2":
                document.getElementById("description_projet_" + _this.title).innerHTML = "";
                break;

            case "visibility":

                var visibility_src = document.getElementById('visibility_' + _this.title).src;
                if (visibility_src == src_1) {
                    document.getElementById('visibility_' + _this.title).src = src_2;
                    visibility_info_ = document.getElementById("visibility_info_" + _this.title).className = "1";
                } else {
                    document.getElementById('visibility_' + _this.title).src = src_1;
                    visibility_info_ = document.getElementById("visibility_info_" + _this.title).className = "";

                }
                break;
            case "remove_date_debut_projet":
                document.getElementById("date_debut_projet_" + _this.title).value = "";
                break;

            case "remove_date_debut_projet":
                document.getElementById("date_debut_projet_" + _this.title).value = "";
                break;


            default:
        }





















        var dure_projet = document.getElementById('dure_projet_' + _this.title).value;
        var visibility_info_ = document.getElementById("visibility_info_" + _this.title).className;
        var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
        var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;
        var google_title_projet = document.getElementById("title_seo_" + _this.title).value;
        var change_meta_name_projet = document.getElementById("meta_name_" + _this.title).value;
        var change_meta_content_projet = document.getElementById("meta_content_" + _this.title).value;
        var level_urgence_projet = document.getElementById("level_urgence_projet_" + _this.title).value;
        var style_page = document.getElementById("style_page_" + _this.title).value;
        var info_2 = document.getElementById("blog-content-2" + _this.title).title;
        var id_sha1_projet = _this.title;
        var html_mode_projet_1 = document.getElementById("html_1_" + _this.title).style.opacity;
        var html_mode_projet_2 = document.getElementById("html_11_" + _this.title).style.opacity;
        var level_urgence_projet = document.getElementById("level_urgence_projet_" + _this.title).value;
        var style_pages_projet = document.getElementById("style_page_" + _this.title).value;



        var date_debut_projet = document.getElementById("date_debut_projet_" + _this.title).value;

        const myTimeout = setTimeout(xx, 1000);

        function xx() {



            if (all_blok_ == false) {
                all_blok_ = true;

                var ok = new Information("config/all_blok.php"); // création de la classe 





                ok.add("style_pages_projet", style_pages_projet); // ajout de l'information pour lenvoi 
                ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
                ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
                ok.add("change_meta_name_projet", change_meta_name_projet); // ajout de l'information pour lenvoi 
                ok.add("change_meta_content_projet", change_meta_content_projet); // ajout de l'information pour lenvoi 
                ok.add("google_title_projet", google_title_projet); // ajout de l'information pour lenvoi 
                ok.add("html_mode_projet_1", html_mode_projet_1); // ajout de l'information pour lenvoi 
                ok.add("html_mode_projet_2", html_mode_projet_2); // ajout de l'information pour lenvoi 
                ok.add("level_urgence_projet", level_urgence_projet); // ajout de l'information pour lenvoi 
                ok.add("date_debut_projet", date_debut_projet); // ajout de l'information pour lenvoi 
                ok.add("id_sha1_projet", info_2); // ajout de l'information pour lenvoi
                ok.add("visibility_1_projet", visibility_info_); // ajout de l'information pour lenvoi
                ok.add("dure_projet", dure_projet); // ajout de l'information pour lenvoi
                //    console.log(ok.info()); // demande l'information dans le tableau
                ok.push(); // envoie l'information au code pkp         
                const myTimeout2 = setTimeout(x2, 500);
            }
        }


        function x2() {
            all_blok_ = false;
        }



        if (reload_page) {



            const const_page = setTimeout(const_page_action, 250);

            function const_page_action() {
                 location.reload()  ; 
            }




        }

    }
</script>
















</body>

</html>