<link rel="stylesheet" href="view/div_form.css">
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
 <script src="view/div_form.js"></script>
 </body>
 </html>