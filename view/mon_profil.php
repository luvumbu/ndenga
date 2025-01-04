<?php

$databaseHandler___ = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["index"][3];
$req_sql___ = "SELECT * FROM `$dbname` WHERE id_sha1_user ='$id_sha1_user' ";

$databaseHandler___->getListOfTables_Child($dbname);
$databaseHandler___->getDataFromTable2X($req_sql___);
$databaseHandler___->get_dynamicVariables();



$title_user_p = $dynamicVariables['title_user'];
$id_user_p = $dynamicVariables['id_user'];
$date_user_p = $dynamicVariables['date_user'];
$id_sha1_user_p = $dynamicVariables['id_sha1_user'];
$description_user_p = $dynamicVariables['description_user'];
$id_parent_user_p = $dynamicVariables['id_parent_user'];
$description_user_p = $dynamicVariables['description_user'];
$img_user_p = $dynamicVariables['img_user'];
$nom_user_p = $dynamicVariables['nom_user'];
$prenom_user_p = $dynamicVariables['prenom_user'];
$password_user_p = $dynamicVariables['password_user'];
$email_user_p = $dynamicVariables['email_user'];
$activation_user_p = $dynamicVariables['activation_user'];
$date_inscription_user_p = $dynamicVariables['date_inscription_user'];



$img_user = str_replace("../", "", $dynamicVariables['img_user'][0]);





$databaseHandler___child = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["index"][3];
$req_sql___ = "SELECT * FROM `$dbname` WHERE id_parent_user ='$id_sha1_user' AND `activation_user`='' ";

$databaseHandler___child->getListOfTables_Child($dbname);
$databaseHandler___child->getDataFromTable2X($req_sql___);
$databaseHandler___child->get_dynamicVariables();



$title_user_c = $dynamicVariables['title_user'];
$id_user_c = $dynamicVariables['id_user'];
$date_user_c = $dynamicVariables['date_user'];
$id_sha1_user_c = $dynamicVariables['id_sha1_user'];
$id_parent_user_c = $dynamicVariables['id_parent_user'];
$description_user_c = $dynamicVariables['description_user'];
$img_user_c = $dynamicVariables['img_user'];
$nom_user_c = $dynamicVariables['nom_user'];
$prenom_user_c = $dynamicVariables['prenom_user'];
$password_user_c = $dynamicVariables['password_user'];
$email_user_c = $dynamicVariables['email_user'];
$activation_user_c = $dynamicVariables['activation_user'];
$date_inscription_user_c = $dynamicVariables['date_inscription_user'];






for ($p = 0; $p < count($title_user_p); $p++) {

?>
    <div class="pc">
        <input onkeyup="dbname_input(this)" type="text" id="<?= $id_sha1_user_p[$p] . 'i' ?>" title="<?= $id_sha1_user_p[$p] ?>" class="p" placeholder="Titre" value="<?= $title_user_p[$p] ?>">
        <textarea onkeyup="dbname_input(this)" name="" id="<?= $id_sha1_user_p[$p] . 't' ?>" title="<?= $id_sha1_user_p[$p] ?>" class="c" placeholder="Déscription"><?= $description_user_p[$p] ?></textarea>
        <input value="<?= $date_user_p[$p] ?>" onchange="dbname_input(this)" type="date" id="<?= $id_sha1_user_p[$p] . 'd' ?>" title="<?= $id_sha1_user_p[$p] ?>" class="d" placeholder="Déscription">

        <div class="mon_image_class">
            <?php


            if ($img_user_p[$p] == "") {
            ?>
                <img onclick="a(this)" class="<?= $index_profil . $id_sha1_user_p[$p] . '__ pc_image'  ?>" src="src/img/1735162964.jpeg" alt="">
            <?php
            } else {

                $img_user = str_replace("../", "", $img_user_p[$p]);

            ?>
                <img onclick="a(this)" class="<?= $index_profil . $id_sha1_user_p[$p] . '__ pc_image'  ?>" src="<?= $img_user ?>" alt="">

            <?php
            }
            ?>

        </div>

        <!--
        <div  >
            <img class="remove_image" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1">

        </div>
    -->
 
        <img title='<?= $id_sha1_user_p[$p] ?>' onclick="add_dbname(this)" width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="delete-forever--v1">
    </div>
<?php
}

echo "<br/>";
for ($c = 0; $c < count($title_user_c); $c++) {
?>
    <div class="pc">
        <input onkeyup="dbname_input(this)" type="text" id="<?= $id_sha1_user_c[$c] . 'i' ?>" title="<?= $id_sha1_user_c[$c] ?>" class="p" placeholder="Titre" value="<?= $title_user_c[$c] ?>">
        <textarea onkeyup="dbname_input(this)" name="" id="<?= $id_sha1_user_c[$c] . 't' ?>" title="<?= $id_sha1_user_c[$c] ?>" class="c" placeholder="Déscription"><?= $description_user_c[$c] ?></textarea>
        <input value="<?= $date_user_c[$c] ?>" type="date" onchange="dbname_input(this)" id="<?= $id_sha1_user_c[$c] . 'd' ?>" title="<?= $id_sha1_user_c[$c] ?>" class="d" value="<?= $title_user_c[$c] ?>">

        <div class="mon_image_class">
            <?php


            if ($img_user_c[$c] == "") {
            ?>



                <img onclick="a(this)" class="<?= $index_profil . $id_sha1_user_c[$c] . '__ pc_image'  ?>" title="<?= $index_profil ?>" src="src/img/1735162964.jpeg" alt="">
            <?php
            } else {

                $img_user = str_replace("../", "", $img_user_c[$c]);

            ?>
                <img onclick="a(this)" class="<?= $index_profil . $id_sha1_user_c[$c] . '__ pc_image'  ?>" title="<?= $index_profil ?>" src="<?= $img_user ?>" alt="">

            <?php
            }
            ?>
        </div>

        <div  onclick="remove_dbname(this)" title='<?= $id_sha1_user_c[$c] ?>'  >
            <img class="remove_image" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1">

        </div>
    </div>
<?php
}
?>




<style>
    .mon_image_class:hover {
        cursor: pointer;
    }

    .pc {

        width: 300px;
        margin: auto;
    }

    .pc .c {
        width: 95%;
        margin: auto;
    }

    .pc img {
        margin-top: 25px;
    }

    .pc_image {
        width: 100%;
        height: 100%;
    }


    .c,
    .p {
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .d {
        padding: 10px;
        margin-top: 7px;
        margin-bottom: 7px;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }
</style>



<script>
    function dbname_input(_this) {



        const title_user = document.getElementById(_this.title + "i").value;
        const description_user = document.getElementById(_this.title + "t").value;

        const date_user = document.getElementById(_this.title + "d").value;







        const ok = new Information("config/dbname_input.php"); // création de la classe 

        ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
        ok.add("title_user", title_user); // ajout de l'information pour lenvoi 
        ok.add("description_user", description_user); // ajout de l'information pour lenvoi 
        ok.add("date_user", date_user); // ajout de l'information pour lenvoi 




        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    }

    function add_dbname(_this) {
        const ok = new Information("config/add_dbname.php"); // création de la classe 
        ok.add("id_parent_user", _this.title); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    _this.style.display="none" ; 



        const myTimeout = setTimeout(xxxx, 250);

        function xxxx() {
            location.reload();


        }
    }




    function remove_dbname(_this) {


       
    
        const ok = new Information("config/remove_dbname.php"); // création de la classe 
        ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    _this.style.display="none" ; 



        const myTimeout = setTimeout(xxxx, 250);

        function xxxx() {
            location.reload();


        }
 
    }
</script>