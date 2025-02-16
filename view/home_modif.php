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


    $html_mode_projet_dynamic_1_  = $html_mode_projet_dynamic_1[$i];







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

      require_once "div_form.php" ; 

      $title_projet = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i]);
      $description_projet = AsciiConverter::asciiToString($dynamicVariables['description_projet'][$i]);

      ?>


      <div class="change_google_title">
        <b>Title SEO</b>
        <input value="<?= $google_title_projet_dynamic_1[0] ?>" placeholder="valeur réferecement" type="text" class="<?= $id_sha1_projet_dynamic_1_ ?>" onkeyup="change_google_title(this)">
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


<?php 
 






 



?>


        <label for="numbers">Style de la page</label>
        <select name="numbers" class="<?= $id_sha1_projet_dynamic_1_  ?>" onchange="change_styles(this)">
          <!-- Les options de 1 à 10 -->
 
<?php 

for ($i_style=0; $i_style <count($name_style_pages__) ; $i_style++) { 

 

 ?>

<option  value="<?= $id_sha1_style_page__[$i_style] ?>"><?= $name_style_pages__[$i_style] ?></option>





<?php 
}

?>


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

      <div class="grande_image">
        <img src="<?php echo $grande_image ?>" onclick="a(this)" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" src="https://i.pinimg.com/236x/7c/cd/81/7ccd8106106ec20a9af1186b8065caee.jpg" alt="">
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


        <?php

        if ($html_mode_projet_dynamic_1_ != "on") {
        ?>

          <div onclick="html_mode_projet_dynamic_1(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
            <img id="<?php echo 'html_2_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20" src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

          </div>
        <?php
        } else {
        ?>

          <div onclick="html_mode_projet_dynamic_1(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
            <br />
            <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
            <img id="<?php echo 'html_2_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

          </div>
        <?php
        }


        ?>





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
              <option value="3nuits"><?= $id_sha1_projet_dynamic_1_ ?></option>

            </select>


          </form>
          <input title="2" class="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="my_date(this)" style="padding: 15px;" type="date" name="date" min="<?php echo date('Y-m-d'); ?>">

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


    function my_date(_this) {

      console.log(_this.value);

      var ok = new Information("config/my_date.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);

      ok.add("heure_debut_projet", _this.value); // ajout de l'information pour lenvoi 

      ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 
      ok.add("title", _this.title); // ajout de l'information pour lenvoi 


      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 


    }

    function visivility(_this) {




      var ok = new Information("config/add_child.php"); // création de la classe 
      var element = afficherValeursFormattees2(_this.className, __);





      var visivility = "";





      if (_this.src == visible_1) {
        _this.src = visible_2;
        visivility = "(0-0)";
      } else {
        _this.src = visible_1;
        visivility = "";


      }


      var ok = new Information("config/visivility.php"); // création de la classe 


      ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
      ok.add("visivility", visivility); // ajout de l'information pour lenvoi 

      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 




      //const myTimeout = setTimeout(xxx, 250);

      function xxx() {
        location.reload();

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

    function change_google_title(_this) {





      var element = afficherValeursFormattees2(_this.className, " ");


      var ok = new Information("config/change_google_title.php"); // création de la classe 


      ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
      ok.add("google_title_projet", _this.value); // ajout de l'information pour lenvoi 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 





    }


    function level_urgence_projet(_this) {


      var element = afficherValeursFormattees2(_this.className, " ");


      var ok = new Information("config/level_urgence_projet.php"); // création de la classe 


      ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
      ok.add("level_urgence_projet", _this.value); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 




    }

    function change_meta_name(_this) {
      var element = afficherValeursFormattees2(_this.className, " ");


      var ok = new Information("config/change_meta_name.php"); // création de la classe 


      ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
      ok.add("change_meta_content", _this.value); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
    }

    function change_meta_content(_this) {
      var element = afficherValeursFormattees2(_this.className, " ");


      var ok = new Information("config/change_meta_content.php"); // création de la classe 


      ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
      ok.add("change_meta_content", _this.value); // ajout de l'information pour lenvoi 
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
    function html_mode_projet_dynamic_1(_this) {
      var element = afficherValeursFormattees2(_this.className, " ");










      var opacite = document.getElementById("html_1_" + element[0]).style.opacity;

      console.log(opacite);




      if (opacite == 0.2) {

        html_mode_projet = "on";
        document.getElementById("html_1_" + element[0]).style.opacity = 1;
        document.getElementById("html_2_" + element[0]).style.opacity = 0.2;

      } else {
        document.getElementById("html_1_" + element[0]).style.opacity = 0.2;
        document.getElementById("html_2_" + element[0]).style.opacity = 1;
        html_mode_projet = "";

      }




      var ok = new Information("config/html_mode_projet.php"); // création de la classe 

      ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
      ok.add("html_mode_projet", html_mode_projet); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp  





    }


    function change_styles(_this) {
    

 
 


        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);


       

        var ok = new Information("config/change_styles.php"); // création de la classe 

        ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 
        ok.add("style_pages_projet", _this.value); // ajout de l'information pour lenvoi 
    

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 







    }
  </script>
 