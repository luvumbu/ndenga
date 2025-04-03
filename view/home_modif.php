<link rel="stylesheet" href="view/home_modif.css">

<body>
  <?php





  $count = count($id_sha1_projet_dynamic_1);

  $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Odit dignissimos necessitatibus recusandae eius sint, maxime cum nisi? Eveniet magni saepe quam,
 earum neque molestiae debitis sequi. Ducimus, placeat provident. Esse.';
  ?>
  <?php for ($i = 0; $i < $count; $i++): ?>
    <?php
    $change_meta_name_projet_dynamic_1_ =  $change_meta_name_projet_dynamic_1[$i];
    $change_meta_content_projet_dynamic_1_ = $change_meta_content_projet_dynamic_1[$i];
    $id_sha1_projet_dynamic_1_ = $id_sha1_projet_dynamic_1[$i];
    $description_projet_dynamic_1_ = $description_projet_dynamic_1[$i];
    $title_projet_dynamic_1_ =     $title_projet_dynamic_1[$i];




    $html_mode_projet_1_dynamic_1_ = $html_mode_projet_1_dynamic_1[$i];
    $html_mode_projet_2_dynamic_1_ = $html_mode_projet_2_dynamic_1[$i];










    $google_title_projet_dynamic_1_ =  AsciiConverter::asciiToString($google_title_projet_dynamic_1[$i]); // Affiche "Hello"
    $change_meta_name_projet_dynamic_1__ =  AsciiConverter::asciiToString($change_meta_name_projet_dynamic_1_); // Affiche "Hello"
    $change_meta_content_projet_dynamic_1__ =  AsciiConverter::asciiToString($change_meta_content_projet_dynamic_1_);








    /*
 $databaseHandler = new DatabaseHandler($dbname, $username);
 $req_sql = "SELECT * FROM projet WHERE  id_sha1_parent_projet ='$id_sha1_projet_dynamic_1_ ' ";
 $databaseHandler->getListOfTables_Child("projet");
 $databaseHandler->getDataFromTable2X($req_sql);
 $databaseHandler->get_dynamicVariables();
 $count = count($id_sha1_projet_dynamic_1 );
 var_dump($dynamicVariables['date_inscription_projet']) ; 
 
 echo "<br/>" ; 
 echo "<br/>" ; 
 echo "<br/>" ; 
 echo "<br/>" ; 
 echo "<br/>" ; 
 echo "<br/>" ; 
 echo "<br/>" ; 
 */
    ?>

    <div id="parent_<?= $id_sha1_projet_dynamic_1_ ?>" class="editor-container largeur_juste" style="border:5px solid <?= $color_projet_dynamic_1[0] ?>">
      <h2>Éditeur de texte <?= $id_sha1_projet_dynamic_1_  ?></h2>
      <?php
      require "div_form.php";
      $title_projet = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i]);
      $description_projet = AsciiConverter::asciiToString($dynamicVariables['description_projet'][$i]);
      $date_debut_projet_dynamic_1_ = $date_debut_projet_dynamic_1[$i];
      ?>
      <div class="change_google_title">
        <b>Title SEO</b>
        <input title="<?= $id_sha1_projet_dynamic_1_ ?>" id="title_seo_<?= $id_sha1_projet_dynamic_1_ ?>" value="<?= $google_title_projet_dynamic_1_ ?>" placeholder="valeur réferecement" type="text" class="<?= $id_sha1_projet_dynamic_1_ ?>" onkeyup="all_blok(this)">
      </div>
      <div>
        <b>Meta name</b>
        <input title="<?= $id_sha1_projet_dynamic_1_ ?>" id="meta_name_<?= $id_sha1_projet_dynamic_1_ ?>" value="<?= $change_meta_name_projet_dynamic_1__ ?>" type="text" onkeyup="all_blok(this)" class="<?= $id_sha1_projet_dynamic_1_ . ' meta_input' ?>">
      </div>
      <div>
        <b>Meta content</b>     
      <textarea style="width: 100%;height:120px"  class="<?= $id_sha1_projet_dynamic_1_ . ' meta_input' ?>" onkeyup="all_blok(this)"  id="meta_content_<?= $id_sha1_projet_dynamic_1_ ?>" title="<?= $id_sha1_projet_dynamic_1_ ?>" name="" id=""><?= $change_meta_content_projet_dynamic_1__ ?></textarea>
      
      </div>
      <div>
        <label for="numbers">Niveau d'urgence : ou de difficulte</label>
        <select title="<?= $id_sha1_projet_dynamic_1_ ?>" id="level_urgence_projet_<?= $id_sha1_projet_dynamic_1_ ?>" name="numbers" class="<?= "level_urgence_projet" ?>" id="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="all_blok(this)">
          <!-- Les options de 1 à 10 -->



          <?php
          for ($b_value = 0; $b_value < 10; $b_value++) {

            if ($level_urgence_projet_dynamic_1[0] != $b_value) {


          ?>
              <option value="<?= $b_value ?>"><?= $b_value ?></option>
          <?php
            }
          }

          ?>

          <?php
          echo ' <option selected  value="' . $level_urgence_projet_dynamic_1[0] . '">' . $level_urgence_projet_dynamic_1[0] . '</option>';
          ?>
        </select>

        <?php


        $key = array_search($style_pages_projet_dynamic_1[0], $id_sha1_style_page__); // $key = 2;


        ?>
        <label for="numbers">Style de la page</label>
        <select title="<?= $id_sha1_projet_dynamic_1_ ?>" id="style_page_<?= $id_sha1_projet_dynamic_1_ ?>" name="numbers" class="<?= $id_sha1_projet_dynamic_1_  ?>" onchange="all_blok(this)">
          <!-- Les options de 1 à 10 -->

          <?php

          for ($i_style = 0; $i_style < count($name_style_pages__); $i_style++) {




            if ($name_style_pages__[$i_style] != $name_style_pages__[$key]) {
          ?>

              <option value="<?= $id_sha1_style_page__[$i_style] ?>"><?= $name_style_pages__[$i_style] ?></option>

            <?php
            }
            ?>






          <?php
          }


          ?>
          <option value="<?= $style_pages_projet_dynamic_1[0] ?>" selected><?= $name_style_pages__[$key] ?></option>


          <?php
          ?>



        </select>
        <?php




        /* 


$id_style_page_auto__ = $dynamicVariables['id_style_page_auto'] ; 
$id_general__ = $dynamicVariables['id_general'] ; 

$name_style_pages__ = $dynamicVariables['name_style_pages'] ; 
$header_style_pages__ = $dynamicVariables['header_style_pages'] ; 
$total_style_pages__ = $dynamicVariables['total_style_pages'] ; 
$id_sha1_style_page__ = $dynamicVariables['id_sha1_style_page'] ; 



$id_style_page__ = $dynamicVariables['id_style_page'] ; 
$id_user_style_page__ = $dynamicVariables['id_user_style_page'] ; 
$date_inscription_style_page__ = $dynamicVariables['date_inscription_style_page'] ; 



*/
        ?>


      </div>

      <?php



      if ($img_projet_src1_dynamic_1[$i] != "") {
        $grande_image = str_replace("../", "", $img_projet_src1_dynamic_1[$i]);
      } else {
        $grande_image = $grande_image__;
      }


      ?>
      <div class="display_images">



        <?php

        $directory = dirname(__DIR__) . '/src/img/' . $_SESSION["index"][3] . '/';

        if (is_dir($directory)) {
          $files = scandir($directory);


          echo "<div>";
          foreach ($files as $file) {


            if ($file !== "." && $file !== "..") {

              echo "<img src='src/img/" . $_SESSION["index"][3] . "/" . $file . "'   style='max-width:200px; margin:5px;'>";

        ?>



              <div style="display: flex;justify-content:space-around; margin-top: 15px;margin-bottom: 15px;">
                <div onclick="remove_img(this)" class="<?= $file . ' __' . $id_sha1_projet_dynamic_1_ ?>">
                  <img width="50" height="50" src="https://img.icons8.com/color/50/delete-forever.png" alt="delete-forever" />

                </div>
                <div onclick="select_img(this)" class="<?= $file . ' __' . $id_sha1_projet_dynamic_1_ ?>">
                  <img width="50" height="50" src="https://img.icons8.com/color-pixels/50/checked-checkbox.png" alt="checked-checkbox" />
                </div>
              </div>
        <?php

            }
          }
          echo "</div>";
        }



        ?>



      </div>

      <div class="grande_image">
        <img style="border: 5pc solid black;padding:10px" src="<?php echo $grande_image ?>" onclick="a(this)" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" src="https://i.pinimg.com/236x/7c/cd/81/7ccd8106106ec20a9af1186b8065caee.jpg" alt="">
      </div>
      <div class="display_flex1">
        <div onclick="remove_all(this)" class="<?php echo $index_remove . $id_sha1_projet_dynamic_1_ ?>">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />
        </div>
        <a href="<?= 'blog.php/' . $id_sha1_projet_dynamic_1_ ?>">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/link--v1.png" alt="link--v1" />
        </a>

        <div id="<?= "visibility_info_" . $id_sha1_projet_dynamic_1_ ?>" class="<?= $visibility_1_projet_dynamic_1[$i] ?>">



          <?php




          if ($visibility_1_projet_dynamic_1[$i] == "") {
          ?>

            <img id="<?= "visibility_" . $id_sha1_projet_dynamic_1_ ?>" title="<?= $id_sha1_projet_dynamic_1_ ?>" onclick="all_blok(this)" class="<?= "visibility" ?>" width="50" height="50" src="<?php echo $visible_1 ?>" alt="visible--v1" />

          <?php
          } else {
          ?>
            <img id="<?= "visibility_" . $id_sha1_projet_dynamic_1_ ?>" title="<?= $id_sha1_projet_dynamic_1_ ?>" onclick="all_blok(this)" class="<?= "visibility" ?>" width="50" height="50" src="<?php echo $visible_2 ?>" alt="visible--v1" />


          <?php
          }
          ?>

        </div>
        <div onclick="add_child(this)" class="<?php echo $index_add . $id_sha1_projet_dynamic_1_ ?>">
          <img width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="delete-forever--v1" />
        </div>





        <?php




        $dure_projet_array = array(
          "1h",
          "2h",
          "3h",
          "4h",
          "5h",
          "6h",
          "7h",
          "8h",

          "1j",
          "2j",
          "3j",
          "4j",
          "5j",
          "6j",
          "7j",
          "8j"
        );



        ?>


        <div>
          <form action="" method="post">
            <label for="choix">Duré projet:</label>
            <select name="choix" class="<?= "dure_projet" ?>" id="<?= "dure_projet_" . $id_sha1_projet_dynamic_1_ ?>" title="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="all_blok(this)">


              <?php

              for ($i_array = 0; $i_array < count($dure_projet_array); $i_array++) {

                if ($dure_projet_array[$i_array] != $dure_projet_dynamic_1[$i]) {
              ?>
                  <option selected value="<?= $dure_projet_array[$i_array] ?>"><?= $dure_projet_array[$i_array] ?></option>

              <?php
                }
              }

              ?>


              <option selected value="<?= $dure_projet_dynamic_1[$i] ?>"><?= $dure_projet_dynamic_1[$i] ?></option>




            </select>


          </form>

          <?php


          $date_debut_projet_dynamic_1__ = $date_debut_projet_dynamic_1[0];





          ?>
          <input value="<?= $date_debut_projet_dynamic_1__ ?>" title="<?= $id_sha1_projet_dynamic_1_ ?>" id="date_debut_projet_<?= $id_sha1_projet_dynamic_1_ ?>" class="<?= "date_debut_projet_" ?>" onchange="all_blok(this)" style="padding: 15px;" type="date" name="date" min="<?php echo date('Y-m-d'); ?>">


          <img title="<?= $id_sha1_projet_dynamic_1_ ?>" class="remove_date_debut_projet" id="remove_date_debut_projet_<?= $id_sha1_projet_dynamic_1_ ?>" width="25" height="25" src="https://img.icons8.com/material-outlined/25/clear-symbol--v1.png" onclick="all_blok(this)" />
        </div>

      </div>

    </div>

    </div>

    <?php

    require "home_modif_child.php";

    ?>

  <?php endfor; ?>








  <script>
    function b(_this) {
      const myTimeout = setTimeout(x, 250);

      function x() {
        var textInput2 = document.getElementById("textInput2" + _this.title).value;
        var textInput0 = document.getElementById("textInput" + _this.title).innerHTML;
        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);


        /*

        var ok = new Information("config/general_function_update.php"); // création de la classe 

        ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
        ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
        ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
        ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
        ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 

        ok.add("textInput2", textInput2); // ajout de l'information pour lenvoi 
        ok.add("textInput0", textInput0); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
*/
      }

    }

    function remove_all(_this) {


      var ok = new Information("config/remove_all.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);
      console.log(element);
      ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
      location.reload();
    }


    function add_child(_this) {


      var ok = new Information("config/add_child.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);
      console.log(element);
      ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
      ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
      ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
      ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
      ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
      const myTimeout = setTimeout(xxx, 250);

      function xxx() {
        location.reload();

      }
    }



    function add_calendar(_this) {
      var ok = new Information("config/add_calendar.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);
      console.log(element);
      ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
      ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
      ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
      ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
      ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
    }





    function my_date_remove(_this) {






      document.getElementById("my_date_" + _this.className).value = "";








      var ok = new Information("config/my_date_remove.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);

      ok.add("heure_debut_projet", ""); // ajout de l'information pour lenvoi 

      ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 





    }

    function visivility(_this) {





      var element = afficherValeursFormattees2(_this.className, __);





      var visivility = "";





      if (_this.src == visible_1) {
        _this.src = visible_2;
        visivility = "(0-0)";
      } else {
        _this.src = visible_1;
        visivility = "";


      }




    }
  </script>



  <script>
    function add_img2(_this) {
      document.getElementById("add_img").className = "";
    }

    function change_color(_this) {




      var element = afficherValeursFormattees2(_this.className, " ");

      var ok = new Information("config/change_color.php"); // création de la classe 


      ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
      ok.add("color_projet", _this.value); // ajout de l'information pour lenvoi 



      document.getElementById("parent_" + element[0]).style = "border: 5px solid " + _this.value;


      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
    }
  </script>



  <style>
    .change_google_title input,
    .meta_input {
      opacity: 0.3;
    }
  </style>


  <script>





  </script>

  <style>
    .display_images {
      display: flex;
      justify-content: space-around;
      overflow-y: scroll;
      max-height: 300px;

      margin-bottom: 75px;
    }

    .hover_img:hover {
      cursor: pointer;
      opacity: 0.7;
      background-color: black;
    }
  </style>


  <script>
    function select_img(_this) {

      _this.style.display = "none";
      var element = afficherValeursFormattees2(_this.className, __);
      element[0] = element[0].replace(" ", "");
      var ok = new Information("config/select_img.php"); // création de la classe 
      ok.add("id_sha1_projet", element[1]); // ajout de l'information pour lenvoi 
      ok.add("img_projet_src1", element[0]); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
      const myTimeout = setTimeout(xx, 250);
      function xx() {
        location.reload();
      }
    }

    function remove_img(_this) {
      _this.style.display = "none";
      var element = afficherValeursFormattees2(_this.className, "__");
      element[0] = element[0].replace(" ", "");
      var ok = new Information("config/remove_img.php"); // création de la classe 
      ok.add("id_sha1_projet", element[1]); // ajout de l'information pour lenvoi 
      ok.add("img_projet_src1", element[0]); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
      const myTimeout = setTimeout(xx, 250);
      function xx() {
        location.reload();
      }

    }
  </script>