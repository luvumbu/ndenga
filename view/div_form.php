 
 
 
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
        .blog-content {
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
 
<?php 

 


?>
    <div class="editor-container">
      
        <div class="toolbar">
            <label for="bg-color-picker-<?php echo $id_sha1_projet_dynamic_1_; ?>">Choisissez une couleur d'arrière-plan pour le bloc <?php echo $id_sha1_projet_dynamic_1_; ?>:</label>
            <input type="color" id="bg-color-picker-<?php echo $id_sha1_projet_dynamic_1_; ?>">
            <label for="text-color-picker-<?php echo $id_sha1_projet_dynamic_1_; ?>">Choisissez une couleur de texte:</label>
            <input type="color" id="text-color-picker-<?php echo $id_sha1_projet_dynamic_1_; ?>">
            <button id="bold-btn-<?php echo $id_sha1_projet_dynamic_1_; ?>">Gras</button>
            <button id="italic-btn-<?php echo $id_sha1_projet_dynamic_1_; ?>">Italique</button>
            <button id="underline-btn-<?php echo $id_sha1_projet_dynamic_1_; ?>">Souligner</button>
            <label for="font-size-<?php echo $id_sha1_projet_dynamic_1_; ?>">Taille de la police:</label>
            <select id="font-size-<?php echo $id_sha1_projet_dynamic_1_; ?>">
                <option value="12px">12px</option>
                <option value="16px">16px</option>
                <option value="20px">20px</option>
                <option value="24px">24px</option>
            </select>
            <label for="font-family-<?php echo $id_sha1_projet_dynamic_1_; ?>">Police:</label>
            <select id="font-family-<?php echo $id_sha1_projet_dynamic_1_; ?>">
                <option value="Arial">Arial</option>
                <option value="Courier New">Courier New</option>
                <option value="Georgia">Georgia</option>
                <option value="Times New Roman">Times New Roman</option>
            </select>
            <label for="align-<?php echo $id_sha1_projet_dynamic_1_; ?>">Alignement:</label>
            <select id="align-<?php echo $id_sha1_projet_dynamic_1_; ?>">
                <option value="left">Gauche</option>
                <option value="center">Centre</option>
                <option value="right">Droite</option>
            </select>
            <input type="color" id="highlight-<?php echo $id_sha1_projet_dynamic_1_; ?>" title="Surligner">
            <button id="bullets-<?php echo $id_sha1_projet_dynamic_1_; ?>">Liste à puces</button>
            <button id="numbered-<?php echo $id_sha1_projet_dynamic_1_; ?>">Liste numérotée</button>

            <!-- Ajouter un lien -->
            <label for="link-url-<?php echo $id_sha1_projet_dynamic_1_; ?>">URL du lien:</label>
            <input type="text" id="link-url-<?php echo $id_sha1_projet_dynamic_1_; ?>" placeholder="Entrez l'URL">
            <button id="insert-link-<?php echo $id_sha1_projet_dynamic_1_; ?>">Insérer un lien</button>

            <!-- Ajouter une image -->
            <label for="image-url-<?php echo $id_sha1_projet_dynamic_1_; ?>">URL de l'image:</label>
            <input type="text" id="image-url-<?php echo $id_sha1_projet_dynamic_1_; ?>" placeholder="Entrez l'URL de l'image">
            <button id="insert-image-<?php echo $id_sha1_projet_dynamic_1_; ?>">Insérer une image</button>
        </div>
        <div onkeyup="all_blok()" contenteditable="true" class="blog-content" id="blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>">
   <?php 




echo AsciiConverter::asciiToString($description_projet_dynamic_1[0]); // Affiche "Hello"

   ?>
        </div>
     
    </div>

    <div id="blog-content-2<?php echo $id_sha1_projet_dynamic_1_; ?>" title="<?php echo $id_sha1_projet_dynamic_1_; ?>">

    </div>

    <script>
 
        // Changer la couleur de fond


        function all_blok() {
       
       
 var info = document.getElementById("blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>").innerHTML  ; 


 var info_2 = document.getElementById("blog-content-2<?php echo $id_sha1_projet_dynamic_1_; ?>").title  ; 

       
     var id_ =    <?php echo $id_sha1_projet_dynamic_1_; ?> ; 
   
 
            var ok = new Information("config/all_blok.php"); // création de la classe 
     
     
      ok.add("description_projet",info); // ajout de l'information pour lenvoi 
      ok.add("id_sha1_projet", info_2); // ajout de l'information pour lenvoi 
 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
       
       
       
       
       
       
       
       
       
       
        }
        document.getElementById("bg-color-picker-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("input", function() {
            let color = this.value;
            let blockId = "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>";
            document.getElementById(blockId).style.backgroundColor = color;
            
            all_blok() ; 
            console.log("Bloc ID:", blockId, "Couleur de fond changée:", color);
        });

        // Changer la couleur du texte
        document.getElementById("text-color-picker-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("input", function() {
            let color = this.value;
            let blockId = "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>";
            document.getElementById(blockId).style.color = color;
            
            all_blok() ; 
            console.log("Bloc ID:", blockId, "Couleur du texte changée:", color);
        });

        // Appliquer le gras
        document.getElementById("bold-btn-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            document.execCommand('bold');
            
            all_blok() ; 
            console.log("Bloc ID:", "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>", "Gras appliqué");
        });

        // Appliquer l'italique
        document.getElementById("italic-btn-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            document.execCommand('italic');
            
            all_blok() ; 
            console.log("Bloc ID:", "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>", "Italique appliqué");
        });

        // Appliquer le soulignement
        document.getElementById("underline-btn-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            document.execCommand('underline');
            
            all_blok() ; 
            console.log("Bloc ID:", "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>", "Souligné appliqué");
        });

        // Changer la taille de la police
        document.getElementById("font-size-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("change", function() {
            let size = this.value;
            let blockId = "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>";
            document.getElementById(blockId).style.fontSize = size;
            
            all_blok() ; 
            console.log("Bloc ID:", blockId, "Taille du texte changée:", size);
        });

        // Changer la police
        document.getElementById("font-family-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("change", function() {
            let fontFamily = this.value;
            let blockId = "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>";
            document.getElementById(blockId).style.fontFamily = fontFamily;
            
            all_blok() ; 
            console.log("Bloc ID:", blockId, "Police changée:", fontFamily);
        });

        // Changer l'alignement du texte
        document.getElementById("align-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("change", function() {
            let align = this.value;
            let blockId = "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>";
            document.getElementById(blockId).style.textAlign = align;
            
            all_blok() ; 
            console.log("Bloc ID:", blockId, "Alignement changé:", align);
        });

        // Surligner
        document.getElementById("highlight-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("input", function() {
            let color = this.value;
            let blockId = "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>";
            document.getElementById(blockId).style.backgroundColor = color;
            
            all_blok() ; 
            console.log("Bloc ID:", blockId, "Surlignage changé:", color);
        });

        // Liste à puces
        document.getElementById("bullets-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            document.execCommand('insertUnorderedList');
            
            all_blok() ; 
            console.log("Bloc ID:", "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>", "Liste à puces appliquée");
        });

        // Liste numérotée
        document.getElementById("numbered-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            document.execCommand('insertOrderedList');
            
            all_blok() ; 
            console.log("Bloc ID:", "blog-content-<?php echo $id_sha1_projet_dynamic_1_; ?>", "Liste numérotée appliquée");
        });

        // Insérer un lien
        document.getElementById("insert-link-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            let url = document.getElementById("link-url-<?php echo $id_sha1_projet_dynamic_1_; ?>").value;
            let selectedText = window.getSelection().toString();
            if (selectedText) {
                document.execCommand('createLink', false, url);
            } else {
                alert("Veuillez sélectionner du texte pour insérer un lien.");
            }
            console.log("Lien inséré:", url);
        });

        // Insérer une image
        document.getElementById("insert-image-<?php echo $id_sha1_projet_dynamic_1_; ?>").addEventListener("click", function() {
            let imageUrl = document.getElementById("image-url-<?php echo $id_sha1_projet_dynamic_1_; ?>").value;
            if (imageUrl) {
                document.execCommand('insertImage', false, imageUrl);
            } else {
                alert("Veuillez entrer une URL d'image.");
            }
            console.log("Image insérée:", imageUrl);
        });
      
    </script>

</body>
</html>
