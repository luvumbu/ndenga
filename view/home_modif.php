
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
      $id_sha1_projet_dynamic_1_ = $id_sha1_projet_dynamic_1[$i];






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
     <div class="editor-container largeur_juste">
       <?php



        ?>

       <h2>Éditeur de texte <?= $id_sha1_projet_dynamic_1_  ?></h2>
       <div class="toolbar">
         <label>Couleur du texte:</label>
         <input class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" type="color" id="textColorPicker<?= $i ?>">


         <label>Couleur de l'arrière-plan:</label>
         <input class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" type="color" id="bgColorPicker<?= $i ?>">
         <label>Taille de la police:</label>
         <select class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" id="fontSizePicker<?= $i ?>">
           <option value="1">Très petite</option>
           <option value="2">Petite</option>
           <option value="3" selected>Moyenne</option>
           <option value="4">Grande</option>
           <option value="5">Très grande</option>
           <option value="6">Énorme</option>
           <option value="7">Gigantesque</option>
         </select>
         <label>Police:</label>
         <select class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onchange="b(this)" id="fontFamilyPicker<?= $i ?>">
           <option value="Arial">Arial</option>
           <option value="Courier New">Courier New</option>
           <option value="Georgia">Georgia</option>
           <option value="Times New Roman">Times New Roman</option>
           <option value="Verdana">Verdana</option>
         </select>
         <div>
           <img class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" onclick="a(this)" title="<?php echo $id_sha1_projet_dynamic_1_ ?>" class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/ios/50/image--v1.png" alt="image--v1" />

         </div>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="boldButton<?= $i ?>"><b>B</b></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="italicButton<?= $i ?>"><i>I</i></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="underlineButton<?= $i ?>"><u>U</u></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="strikeThroughButton<?= $i ?>"><s>S</s></button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="alignLeftButton<?= $i ?>">Aligner à gauche</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="alignCenterButton<?= $i ?>">Centrer</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="alignRightButton<?= $i ?>">Aligner à droite</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="justifyButton<?= $i ?>">Justifier</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="unorderedListButton<?= $i ?>">Liste à puces</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="orderedListButton<?= $i ?>">Liste numérotée</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="insertLinkButton<?= $i ?>">Insérer un lien</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="insertImageButton<?= $i ?>">Insérer une image</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="removeFormattingButton<?= $i ?>" style="background-color:black">Effacer le formatage</button>
         <button class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>" title="<?php echo $i ?>" onclick="b(this)" id="clearButton<?= $i ?>" style="background-color:#c93d2f">Effacer le contenu</button>


       </div>

       <?php

        $title_projet = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$i]);
        $description_projet = AsciiConverter::asciiToString($dynamicVariables['description_projet'][$i]);

        ?>
       <input id="textInput2<?= $i ?>" value="<?php echo $title_projet ?>" type="text" onkeyup="a(this)" contenteditable="true" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__' ?>">




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
       <div onkeyup="a(this)" contenteditable="true" class="<?php echo $index_update . $id_sha1_projet_dynamic_1_ . '__ textInput' ?>" id="textInput<?= $i ?>" spellcheck="false"><?php echo $description_projet; ?></div>
       <div class="display_flex1">
         <div onclick="remove_all(this)" class="<?php echo $index_remove . $id_sha1_projet_dynamic_1_ ?>">
           <img width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />

         </div>
         <a href="<?= 'blog.php/'.$id_sha1_projet_dynamic_1_?>">
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
        <label for="choix" >Choisissez un intervalle :</label>
        <select name="choix" class="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="my_date(this)" title="1" >
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
    <input  title="2" class="<?= $id_sha1_projet_dynamic_1_ ?>" onchange="my_date(this)" style="padding: 15px;" type="date" name="date" min="<?php echo date('Y-m-d'); ?>">

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
     
      console.log(_this.value) ; 

      var ok = new Information("config/my_date.php"); // création de la classe 
       var element = afficherValeursFormattees2(_this.className, __);
       
       ok.add("heure_debut_projet",_this.value); // ajout de l'information pour lenvoi 
 
       ok.add("id_sha1_projet",_this.className); // ajout de l'information pour lenvoi 
       ok.add("title",_this.title); // ajout de l'information pour lenvoi 

 
       console.log(ok.info()); // demande l'information dans le tableau
       ok.push(); // envoie l'information au code pkp 


     }

     function visivility(_this) {




       var ok = new Information("config/add_child.php"); // création de la classe 
       var element = afficherValeursFormattees2(_this.className, __);




  
var  visivility ="" ;

 


 
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
   </script>
