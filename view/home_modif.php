<link rel="stylesheet" href="view/home_modif.css">

<body>


  <?php

  $count = count($id_sha1_projet_dynamic_1);

  ?>

  <?php


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
      $date_debut_projet_dynamic_1_ = $date_debut_projet_dynamic_1[$i] ; 
      ?>
      <div class="change_google_title">
        <b>Title SEO</b>
        <input value="<?= $google_title_projet_dynamic_1[$i] ?>" placeholder="valeur réferecement" type="text" class="<?= $id_sha1_projet_dynamic_1_ ?>" onkeyup="change_google_title(this)">
      </div>
      <div>
        <b>Meta name</b>
        <input value="<?= $change_meta_name_projet_dynamic_1_ ?>" type="text" onkeyup="change_meta_name(this)" class="<?= $id_sha1_projet_dynamic_1_ . ' meta_input' ?>">
      </div>
      <div>
        <b>Meta content</b>
        <input value="<?= $change_meta_content_projet_dynamic_1_ ?>" type="text" onkeyup="change_meta_content(this)" class="<?= $id_sha1_projet_dynamic_1_ . ' meta_input' ?>">
      </div>
      <div>
        <label for="numbers">Niveau d'urgence : ou de difficulte</label>
        <select name="numbers" class="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="level_urgence_projet(this)">
          <!-- Les options de 1 à 10 -->
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <?php
          echo ' <option selected  value="' . $level_urgence_projet_dynamic_1[0] . '">' . $level_urgence_projet_dynamic_1[0] . '</option>';
          ?>
        </select>
       <label for="numbers">Style de la page</label>
        <select name="numbers" class="<?= $id_sha1_projet_dynamic_1_  ?>" onchange="change_styles(this)">
         <!-- Les options de 1 à 10 -->
         <?php
         for ($i_style = 0; $i_style < count($name_style_pages__); $i_style++) {
         ?>
           <option value="<?= $id_sha1_style_page__[$i_style] ?>"><?= $name_style_pages__[$i_style] ?></option>
          <?php
          }

 
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
        <img style="border: 5pc solid black;padding:10px" src="<?php echo $grande_image ?>" onclick="add_img2(this)" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" src="https://i.pinimg.com/236x/7c/cd/81/7ccd8106106ec20a9af1186b8065caee.jpg" alt="">
      </div>
      <div class="display_flex1">
        <div onclick="remove_all(this)" class="<?php echo $index_remove . $id_sha1_projet_dynamic_1_ ?>">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />
        </div>
        <a href="<?= 'blog.php/' . $id_sha1_projet_dynamic_1_ ?>">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/link--v1.png" alt="link--v1" />
        </a>

        <div>



          <?php




          if ($visibility_1_projet_dynamic_1[$i] == "") {
          ?>

            <img onclick="visivility(this)" class="<?php echo $index_visivility . $id_sha1_projet_dynamic_1_ ?>" width="50" height="50" src="<?php echo $visible_1 ?>" alt="visible--v1" />

          <?php
          } else {
          ?>
            <img onclick="visivility(this)" class="<?php echo $index_visivility . $id_sha1_projet_dynamic_1_ ?>" width="50" height="50" src="<?php echo $visible_2 ?>" alt="visible--v1" />


          <?php
          }
          ?>

        </div>
        <div onclick="add_child(this)" class="<?php echo $index_add . $id_sha1_projet_dynamic_1_ ?>">
          <img width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="delete-forever--v1" />
        </div>








        <div>
          <form action="" method="post">
            <label for="choix">Choisissez un intervalle :</label>
            <select name="choix" class="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="my_date(this)" title="1">
              <option value="1">1h</option>
              <option value="2">2h</option>
              <option value="3">3h</option>
              <option value="4">4h</option>
              <option value="5">5h</option>
              <option value="6">6h</option>
              <option value="7">7h</option>
              <option value="8">8h</option>
              <option value="1jour">1 jour</option>
              <option value="2jours">2 jours</option>
              <option value="3jours">3 jours</option>
              <option value="1nuit">1 nuit</option>
              <option value="2nuits">2 nuits</option>
              <option value="3nuits">3 nuits</option>


            </select>


          </form>
          <input  value="<?= $date_debut_projet_dynamic_1_ ?>" title="2" id="my_date_<?= $id_sha1_projet_dynamic_1_ ?>" class="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="my_date(this)" style="padding: 15px;" type="date" name="date" min="<?php echo date('Y-m-d'); ?>">
          <img  class="<?= $id_sha1_projet_dynamic_1_ ?>" width="25" height="25" src="https://img.icons8.com/material-outlined/25/clear-symbol--v1.png" onclick="my_date_remove(this)" alt="clear-symbol--v1"/>
        </div>

      </div>

    </div>

    </div>
    
    <?php

    require "home_modif_child.php";

    ?>

  <?php endfor; ?>

  <script>
    <?php for ($i = 0; $i < $count; $i++): ?>
      const textInput<?= $i ?> = document.getElementById('textInput<?= $i ?>');
      const textColorPicker<?= $i ?> = document.getElementById('textColorPicker<?= $i ?>');
      const bgColorPicker<?= $i ?> = document.getElementById('bgColorPicker<?= $i ?>');
      const fontSizePicker<?= $i ?> = document.getElementById('fontSizePicker<?= $i ?>');
      const fontFamilyPicker<?= $i ?> = document.getElementById('fontFamilyPicker<?= $i ?>');
      const boldButton<?= $i ?> = document.getElementById('boldButton<?= $i ?>');
      const italicButton<?= $i ?> = document.getElementById('italicButton<?= $i ?>');
      const underlineButton<?= $i ?> = document.getElementById('underlineButton<?= $i ?>');
      const strikeThroughButton<?= $i ?> = document.getElementById('strikeThroughButton<?= $i ?>');
      const alignLeftButton<?= $i ?> = document.getElementById('alignLeftButton<?= $i ?>');
      const alignCenterButton<?= $i ?> = document.getElementById('alignCenterButton<?= $i ?>');
      const alignRightButton<?= $i ?> = document.getElementById('alignRightButton<?= $i ?>');
      const justifyButton<?= $i ?> = document.getElementById('justifyButton<?= $i ?>');
      const unorderedListButton<?= $i ?> = document.getElementById('unorderedListButton<?= $i ?>');
      const orderedListButton<?= $i ?> = document.getElementById('orderedListButton<?= $i ?>');
      const insertLinkButton<?= $i ?> = document.getElementById('insertLinkButton<?= $i ?>');
      const insertImageButton<?= $i ?> = document.getElementById('insertImageButton<?= $i ?>');
      const removeFormattingButton<?= $i ?> = document.getElementById('removeFormattingButton<?= $i ?>');


      const clearButton<?= $i ?> = document.getElementById('clearButton<?= $i ?>');
      clearButton<?= $i ?>.addEventListener('click', () => {
        textInput<?= $i ?>.innerHTML = ''; // Vide tout le contenu
      });

      function applyStyle<?= $i ?>(command, value = null) {
        document.execCommand(command, false, value);
      }

      textColorPicker<?= $i ?>.addEventListener('input', () => applyStyle<?= $i ?>('foreColor', textColorPicker<?= $i ?>.value));
      bgColorPicker<?= $i ?>.addEventListener('input', () => applyStyle<?= $i ?>('backColor', bgColorPicker<?= $i ?>.value));
      fontSizePicker<?= $i ?>.addEventListener('change', () => applyStyle<?= $i ?>('fontSize', fontSizePicker<?= $i ?>.value));
      fontFamilyPicker<?= $i ?>.addEventListener('change', () => applyStyle<?= $i ?>('fontName', fontFamilyPicker<?= $i ?>.value));
      boldButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('bold'));
      italicButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('italic'));
      underlineButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('underline'));
      strikeThroughButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('strikeThrough'));
      alignLeftButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyLeft'));
      alignCenterButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyCenter'));
      alignRightButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyRight'));
      justifyButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('justifyFull'));
      unorderedListButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('insertUnorderedList'));
      orderedListButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('insertOrderedList'));
      insertLinkButton<?= $i ?>.addEventListener('click', () => {
        const url = prompt('Entrez l\'URL du lien:');
        if (url) applyStyle<?= $i ?>('createLink', url);
      });
      insertImageButton<?= $i ?>.addEventListener('click', () => {
        const url = prompt('Entrez l\'URL de l\'image:');
        if (url) applyStyle<?= $i ?>('insertImage', url);
      });
      removeFormattingButton<?= $i ?>.addEventListener('click', () => applyStyle<?= $i ?>('removeFormat'));



    <?php endfor; ?>
  </script>

 <script src="view/home_scrypt.js"></script>