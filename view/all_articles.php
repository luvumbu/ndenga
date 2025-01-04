<?php




$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet='' AND activation_projet='' ";

$databaseHandler->getListOfTables_Child("projet");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

$id_projet_dynamic_1 = $dynamicVariables['id_projet'];
$activation_projet_dynamic_1 = $dynamicVariables['activation_projet'];
$id_general_dynamic_1 = $dynamicVariables['id_general'];
$id_user_projet_dynamic_1 = $dynamicVariables['id_user_projet'];
$id_sha1_user_projet_dynamic_1 = $dynamicVariables['id_sha1_user_projet'];
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



 



 
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
 








$chaine = $url->get_basename();

if (strpos($chaine, '.') !== false) {


    ?>

    <style>
        body{
            background-color: white;
            display: none;
        }
    </style>
    <meta http-equiv="refresh" content="0; URL=blog.php/1">
    </head>
        <?php 
}  


 
 
?>



    <?php
    $img_projet_src1_dynamic_1__ = "../src/img/1735162964.jpeg";
    $kount = count($img_projet_src1_dynamic_1);




    echo '<div class="classcontainer container mt-3">';
    for ($a = 0; $a < $kount; $a++) {








        // Texte original
        $text__ = AsciiConverter::asciiToString($description_projet_dynamic_1[$a]);

      





    ?>




        <div class="card" style="width:400px">

            <?php

            if ($img_projet_src1_dynamic_1[$a] != "") {
            ?>
                <img class="card-img-top" src="<?= $img_projet_src1_dynamic_1[$a]  ?>" alt="Card image" style="width:100%">

            <?php
            } else {
            ?>
                <img class="card-img-top" src="<?= $img_projet_src1_dynamic_1__ ?>" alt="Card image" style="width:100%">

            <?php
            }
            ?>

            <div class="card-body">
                <h4 class="card-title"><?= AsciiConverter::asciiToString($title_projet_dynamic_1[$a]) ?></h4>
 
                <a href="<?= $id_sha1_projet_dynamic_1[$a]?>" class="btn btn-primary">voir projet</a>
            </div>
        </div>




        <?php


        ?>
    <?php

    }
    echo '</div>';
    ?>


    <style>
        .classcontainer {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .classcontainer div {
            margin-bottom: 75px;
        }

    
    </style>

<a href="../" style="margin-top: 150px;">
<img width="100" height="100" src="https://img.icons8.com/ios/100/login-rounded-right--v1.png" alt="login-rounded-right--v1"/>
</a>


