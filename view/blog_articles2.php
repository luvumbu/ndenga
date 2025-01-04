 


 <style>
    .blog_articles2_div1{
        background-color: #bd4a23;
        color:white ; 
        padding: 15px;
        text-align: center;
    }
    .blog_articles2_div2{

        display: none;
    }
    body{
        margin: 0;
    }
    .children_element {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
 </style>
 <?php
    /*
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
*/

    echo '<div class="all_articles">';
    for ($a = 0; $a < $count; $a++) {
        if ($visibility_1_projet_dynamic_1[$a] != ""):
            // Code à exécuter si la condition est vraie
            $title_projet_dynamic_1__   = AsciiConverter::asciiToString($title_projet_dynamic_1[$a]);
            $description_projet_dynamic_1__   = AsciiConverter::asciiToString($description_projet_dynamic_1[$a]);
            $date_inscription_projet_dynamic_1  = $date_inscription_projet_dynamic_1[$a];
            $img_projet_src1_dynamic_1__ =   $img_projet_src1_dynamic_1[$a];
            $id_sha1_projet_dynamic_1__ = $id_sha1_projet_dynamic_1[$a];


    ?>

         <?php
/*
            if ($id_sha1_parent_projet_dynamic_1[$a] != "") {
            ?>
             <a href="<?= $id_sha1_parent_projet_dynamic_1[$a] ?>">
                 <img style="width: 50px;" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1" />
             </a>

         <?php
            } else {
            ?>
             <a href="1">
                 <img style="width: 50px;" src="https://img.icons8.com/office/40/home--v1.png" alt="home--v1" />
             </a>

         <?php

        
            } */
            ?>

         <?php





            ?>


 
            <div class="blog_articles2_div1">

        
         <h1><?php echo $title_projet_dynamic_1__  ?></h1>
    </div>
         <div class="blog_articles2_div2">
             <img src="<?= $img_projet_src1_dynamic_1__ ?>" alt="">
         </div>
         <p class="article_description"><?php echo $description_projet_dynamic_1__  ?></p>
         <a href="../view/redirection_lecture.php/<?= $id_sha1_projet_dynamic_1__ ?>">
             <img class="cursor_pointer" style="margin-top: 50px;margin-bottom:50px" width="50" height="50" src="https://img.icons8.com/ios/50/high-volume--v1.png" alt="high-volume--v1" />
         </a>


         </br>

         <b><?= $date_inscription_projet_dynamic_1 ?></b>
         <?php
            $databaseHandler = new DatabaseHandler($dbname, $username);
            $req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet ='$id_sha1_projet' AND visibility_1_projet!=''   ";

            $databaseHandler->getListOfTables_Child("projet");
            $databaseHandler->getDataFromTable2X($req_sql);
            $databaseHandler->get_dynamicVariables();
            $id_projet_dynamic_2 = $dynamicVariables['id_projet'];
            $activation_projet_dynamic_2 = $dynamicVariables['activation_projet'];
            $id_general_dynamic_2 = $dynamicVariables['id_general'];
            $id_user_projet_dynamic_2 = $dynamicVariables['id_user_projet'];
            $id_sha1_user_projet_dynamic_2 = $dynamicVariables['id_sha1_user_projet'];
            $id_sha1_projet_dynamic_2 = $dynamicVariables['id_sha1_projet'];
            $id_sha1_parent_projet_dynamic_2 = $dynamicVariables['id_sha1_parent_projet'];
            $id_sha1_parent_projet2_dynamic_2 = $dynamicVariables['id_sha1_parent_projet2'];
            $cryptage_projet_dynamic_2 = $dynamicVariables['cryptage_projet'];
            $input_cryptage_projet_dynamic_2 = $dynamicVariables['input_cryptage_projet'];
            $name_projet_dynamic_2 = $dynamicVariables['name_projet'];
            $name_extention_projet_dynamic_2 = $dynamicVariables['name_extention_projet'];
            $statue_projet_dynamic_2 = $dynamicVariables['statue_projet'];
            $title_projet_dynamic_2 = $dynamicVariables['title_projet'];
            $description_projet_dynamic_2 = $dynamicVariables['description_projet'];
            $password_projet_dynamic_2 = $dynamicVariables['password_projet'];
            $visibility_1_projet_dynamic_2 = $dynamicVariables['visibility_1_projet'];
            $visibility_2_projet_dynamic_2 = $dynamicVariables['visibility_2_projet'];
            $screen_shoot_projet_dynamic_2 = $dynamicVariables['screen_shoot_projet'];
            $img_projet_src1_dynamic_2 = $dynamicVariables['img_projet_src1'];
            $img_projet_src2_dynamic_2 = $dynamicVariables['img_projet_src2'];
            $img_projet_visibility_dynamic_2 = $dynamicVariables['img_projet_visibility'];
            $group_projet_dynamic_2 = $dynamicVariables['group_projet'];
            $heure_debut_projet_dynamic_2 = $dynamicVariables['heure_debut_projet'];
            $date_debut_projet_dynamic_2 = $dynamicVariables['date_debut_projet'];
            $dure_projet_dynamic_2 = $dynamicVariables['dure_projet'];
            $publication_date_j_projet_dynamic_2 = $dynamicVariables['publication_date_j_projet'];
            $publication_date_h_projet_dynamic_2 = $dynamicVariables['publication_date_h_projet'];
            $shop_projet_dynamic_2 = $dynamicVariables['shop_projet'];
            $date_inscription_projet_dynamic_2 = $dynamicVariables['date_inscription_projet'];
            $kount = count($date_inscription_projet_dynamic_2);








            echo '<div class="children_element">';
         
            for ($y = 0; $y < $kount; $y++) {
                $title_projet__ = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$y]);
                $visibility_1_projet____ = $visibility_1_projet__[$y];
                $img_projet_src1__ = $dynamicVariables['img_projet_src1'][$y];
                $date_inscription_projet_dynamic_2__ = $dynamicVariables['date_inscription_projet_dynamic_2'][$y];
                $id_sha1_projet__c =  $id_sha1_projet_dynamic_2[$y];


                $description_projet_dynamic_2_c = AsciiConverter::asciiToString($description_projet_dynamic_2[$y]);



                echo  '<h1>' . $title_projet__ . '</h1>';





                echo '     <div class="grande_image">';

                if ($img_projet_src1__ != "") {


                    echo '<img src="' . $img_projet_src1__ . '" style="cursor:pointer"alt="">';
                } else {
                    echo '<img src="' . $grande_image__ . '" alt="">';
                }
                echo '     </div>';

                echo "<br/>";
                echo "<i class='date_articles'>" .  $date_inscription_projet_dynamic_2[$y] . '</i>';

                echo   $description_projet_dynamic_2_c;



            ?>

             <a href="<?= $id_sha1_projet__c  ?>">
                 <h4>
                     Article complet
                 </h4>
             </a>




 <?php
           }

           
            echo '</div';
        else:
            echo "<h1 class='autorisation'>Vous n'êtes pas autorisé à accéder à cette page.</h1>";
        endif;
    }
    echo '</div>';

    ?>





 <a href="../" style="margin-top: 150px;">
     <img width="100" height="100" src="https://img.icons8.com/ios/100/login-rounded-right--v1.png" alt="login-rounded-right--v1" />
 </a>

 
 