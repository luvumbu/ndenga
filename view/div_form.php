 <style>
     body {
         font-family: Arial, sans-serif;
     }

     .editor-container {
         width: 80%;
         margin: 0 auto;
         padding: 20px;
         background-color: #f4f4f4;
         border-radius: 8px;
     }

     .toolbar {
         margin-bottom: 10px;
     }

     button,
     input[type="color"],
     select {
         padding: 10px;
         margin-right: 10px;
         cursor: pointer;
     }

     .blog-content_1 {
         min-height: 25px;
         border: 1px solid #ccc;
         padding: 10px;
         background-color: #fff;
     }

     .blog-content_2 {
         min-height: 300px;
         border: 1px solid #ccc;
         padding: 10px;
         background-color: #fff;
     }

     .blog-content[contenteditable="true"]:empty:before {
         content: "Écrivez ici votre contenu...";
         color: #999;
     }
 </style>




 <style>
     .red {
         padding: 10px;
         background-color: red;
         width: 50px;
         height: 50px;
         margin-top: 25px;
         margin-bottom: 25px;


     }
 </style>


 <div title="<?php echo $id_sha1_projet_dynamic_1_; ?>" onkeyup="all_blok(this)" contenteditable="true" class="blog-content_1" id="title_projet_<?php echo $id_sha1_projet_dynamic_1_; ?>">
     <?php

        if ($html_mode_projet_1_dynamic_1_ != "on") {

            echo AsciiConverter::asciiToString($title_projet_dynamic_1_); // Affiche "Hello"

        } else {
            $texteNettoye = nettoyerTexteHtml(AsciiConverter::asciiToString($title_projet_dynamic_1_));

            echo $texteNettoye;
        }

        ?>
 </div>



 <?php

    if ($html_mode_projet_1_dynamic_1_ != "on") {
    ?>



     <div class="display_flex_1">
         <div onclick="html_mode_projet_dynamic_1(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
             <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
             <br />
             <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
             <img id="<?php echo 'html_2_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20" src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

         </div>
         <div>
             <div class="margin_top_50" onclick="red_box_1(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png" alt="clear-symbol--v1" /></div>

         </div>

     </div>
 <?php
    } else {
    ?>
     <div class="display_flex_1">
         <div onclick="html_mode_projet_dynamic_1(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
             <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
             <br />
             <img id="<?php echo 'html_1_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
             <img id="<?php echo 'html_2_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

         </div>
         <div>
             <div class="margin_top_50" onclick="red_box_1(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png" alt="clear-symbol--v1" /></div>

         </div>

     </div>

 <?php
    }

    ?>

 <div title="<?php echo $id_sha1_projet_dynamic_1_; ?>" onkeyup="all_blok(this)" contenteditable="true" class="blog-content_2" id="description_projet_<?php echo $id_sha1_projet_dynamic_1_; ?>">



     <?php

        if ($html_mode_projet_2_dynamic_1_ != "on") {

            echo AsciiConverter::asciiToString($description_projet_dynamic_1_); // Affiche "Hello"


        } else {
            $texteNettoye = nettoyerTexteHtml(AsciiConverter::asciiToString($description_projet_dynamic_1_));
            echo $texteNettoye;
        }
        ?>

 </div>



 <?php



    if ($html_mode_projet_2_dynamic_1_ != "on") {
    ?>



     <div class="display_flex_1">
         <div onclick="html_mode_projet_dynamic_2(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
             <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
             <br />
             <img id="<?php echo 'html_11_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
             <img id="<?php echo 'html_22_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20" src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

         </div>
         <div>
             <div class="margin_top_50" onclick="red_box_1(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png" alt="clear-symbol--v1" /></div>

         </div>

     </div>
 <?php
    } else {
    ?>
     <div class="display_flex_1">
         <div onclick="html_mode_projet_dynamic_2(this)" class="<?php echo $id_sha1_projet_dynamic_1_ ?>">
             <img width="50" height="50" src="https://img.icons8.com/ios/50/html.png" alt="delete-forever--v1" />
             <br />
             <img id="<?php echo 'html_11_' . $id_sha1_projet_dynamic_1_ ?>" width="20" height="20" src="https://img.icons8.com/material-sharp/20/switch-on.png" alt="switch-on" />
             <img id="<?php echo 'html_22_' . $id_sha1_projet_dynamic_1_ ?>" style="opacity: 0.2;" width="20" height="20" src="https://img.icons8.com/ios/20/switch-off--v1.png" alt="switch-off--v1" />

         </div>
         <div>
             <div class="margin_top_50" onclick="red_box_2(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>"><img width="50" height="50" src="https://img.icons8.com/material-sharp/50/clear-symbol--v1.png" alt="clear-symbol--v1" /></div>

         </div>

     </div>

 <?php
    }

    ?>


 <div id="blog-content-2<?php echo $id_sha1_projet_dynamic_1_; ?>" title="<?php echo $id_sha1_projet_dynamic_1_; ?>">

 </div>







 <script>
     // Changer la couleur de fond

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

     function all_blok(_this) {




         var title_projet = document.getElementById("title_projet_" + _this.title).innerHTML;
         var description_projet = document.getElementById("description_projet_" + _this.title).innerHTML;


         var info_2 = document.getElementById("blog-content-2" + _this.title).title;

         const myTimeout = setTimeout(xx, 250);

         function xx() {

             var ok = new Information("config/all_blok.php"); // création de la classe 


             ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 
             ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
             ok.add("autre", title_projet); // ajout de l'information pour lenvoi 
             ok.add("id_sha1_projet", info_2); // ajout de l'information pour lenvoi
             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 


         }

     }








     function html_mode_projet_dynamic_2(_this) {


         var element = afficherValeursFormattees2(_this.className, " ");







         var opacite = document.getElementById("html_11_" + element[0]).style.opacity;

         console.log(opacite);




         if (opacite == 0.2) {

             html_mode_projet = "on";
             document.getElementById("html_11_" + element[0]).style.opacity = 1;
             document.getElementById("html_22_" + element[0]).style.opacity = 0.2;

         } else {
             document.getElementById("html_11_" + element[0]).style.opacity = 0.2;
             document.getElementById("html_22_" + element[0]).style.opacity = 1;
             html_mode_projet = "";

         }




         var ok = new Information("config/html_mode_projet_2.php"); // création de la classe 



         ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
         ok.add("html_mode_projet_1", html_mode_projet); // ajout de l'information pour lenvoi 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp  






     }
 </script>











 <style>
     .display_flex_1 {
         display: flex;
         justify-content: space-around;
     }

     .margin_top_50 {
         margin-top: 20px;
         margin-bottom: 50px;

     }
 </style>






 </body>

 </html>