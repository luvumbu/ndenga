 
 
 
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
        button, input[type="color"], select {
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
    .red{
        padding: 10px;
        background-color: red;
        width: 50px;
        height: 50px;
        margin-top: 25px;
        margin-bottom: 25px;


    }
   </style>
      

        <div  title="<?php echo $id_sha1_projet_dynamic_1_; ?>" onkeyup="all_blok(this)" contenteditable="true" class="blog-content_1" id="blog-content--<?php echo $id_sha1_projet_dynamic_1_; ?>">
   <?php 
echo AsciiConverter::asciiToString( $title_projet_dynamic_1_); // Affiche "Hello"
   ?>
        </div>

        <?php

if ($html_mode_projet_1_dynamic_1_!= "on") {
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

        <div  title="<?php echo $id_sha1_projet_dynamic_1_; ?>" onkeyup="all_blok(this)" contenteditable="true" class="blog-content_2" id="blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>">
   <?php 
echo AsciiConverter::asciiToString($description_projet_dynamic_1_); // Affiche "Hello"
   ?>
        </div>
     
        <div class="red" onclick="red_box(this)" title="<?php echo $id_sha1_projet_dynamic_1_; ?>" ></div>

    <div id="blog-content-2<?php echo $id_sha1_projet_dynamic_1_; ?>" title="<?php echo $id_sha1_projet_dynamic_1_; ?>">

    </div>

    <script>
 
        // Changer la couleur de fond

function red_box(_this) {
    


   document.getElementById("blog-content-"+_this.title).innerHTML =""  ; 



          
 var info = document.getElementById("blog-content-"+_this.title).innerHTML  ; 
 


var info_2 = document.getElementById("blog-content-2"+_this.title).title  ; 
 





const myTimeout = setTimeout(xx, 250);

function xx() {

   var ok = new Information("config/all_blok.php"); // création de la classe 
    
    
    ok.add("description_projet",info); // ajout de l'information pour lenvoi 
    ok.add("id_sha1_projet", info_2); // ajout de l'information pour lenvoi 




    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
     
     
}




}
        function all_blok(_this) {


 
       
 var info = document.getElementById("blog-content-"+_this.title).innerHTML  ; 
 var info_ = document.getElementById("blog-content--"+_this.title).innerHTML  ; 

 var info_2 = document.getElementById("blog-content-2"+_this.title).title  ; 
  





 const myTimeout = setTimeout(xx, 1000);

function xx() {
 
    var ok = new Information("config/all_blok.php"); // création de la classe 
     
     
     ok.add("description_projet",info); // ajout de l'information pour lenvoi 
     ok.add("title_projet",info_); // ajout de l'information pour lenvoi 

     ok.add("id_sha1_projet", info_2); // ajout de l'information pour lenvoi 




     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 
      
      
}
 
}

</script>
 
 
   
 
       
       
       
       
       
       
       
       
     
 

</body>
</html>
