<?php 
$nb_blocs = 5;  // Définir le nombre de blocs d'édition
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditeur de Blog</title>
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
</head>
<body>

    <div class="editor-container">
        <?php for ($i = 1; $i <= $nb_blocs; $i++): ?>
        <div class="toolbar">
            <label for="bg-color-picker-<?php echo $i; ?>">Choisissez une couleur d'arrière-plan pour le bloc <?php echo $i; ?>:</label>
            <input type="color" id="bg-color-picker-<?php echo $i; ?>">
            <label for="text-color-picker-<?php echo $i; ?>">Choisissez une couleur de texte:</label>
            <input type="color" id="text-color-picker-<?php echo $i; ?>">
            <button id="bold-btn-<?php echo $i; ?>">Gras</button>
            <button id="italic-btn-<?php echo $i; ?>">Italique</button>
            <button id="underline-btn-<?php echo $i; ?>">Souligner</button>
            <label for="font-size-<?php echo $i; ?>">Taille de la police:</label>
            <select id="font-size-<?php echo $i; ?>">
                <option value="12px">12px</option>
                <option value="16px">16px</option>
                <option value="20px">20px</option>
                <option value="24px">24px</option>
            </select>
            <label for="font-family-<?php echo $i; ?>">Police:</label>
            <select id="font-family-<?php echo $i; ?>">
                <option value="Arial">Arial</option>
                <option value="Courier New">Courier New</option>
                <option value="Georgia">Georgia</option>
                <option value="Times New Roman">Times New Roman</option>
            </select>
            <label for="align-<?php echo $i; ?>">Alignement:</label>
            <select id="align-<?php echo $i; ?>">
                <option value="left">Gauche</option>
                <option value="center">Centre</option>
                <option value="right">Droite</option>
            </select>
            <input type="color" id="highlight-<?php echo $i; ?>" title="Surligner">
            <button id="bullets-<?php echo $i; ?>">Liste à puces</button>
            <button id="numbered-<?php echo $i; ?>">Liste numérotée</button>

            <!-- Ajouter un lien -->
            <label for="link-url-<?php echo $i; ?>">URL du lien:</label>
            <input type="text" id="link-url-<?php echo $i; ?>" placeholder="Entrez l'URL">
            <button id="insert-link-<?php echo $i; ?>">Insérer un lien</button>

            <!-- Ajouter une image -->
            <label for="image-url-<?php echo $i; ?>">URL de l'image:</label>
            <input type="text" id="image-url-<?php echo $i; ?>" placeholder="Entrez l'URL de l'image">
            <button id="insert-image-<?php echo $i; ?>">Insérer une image</button>
        </div>
        <div contenteditable="true" class="blog-content" id="blog-content-<?php echo $i; ?>">
            <p>Écrivez ici votre contenu de blog...</p>
        </div>
        <?php endfor; ?>
    </div>

    <script>
        <?php for ($i = 1; $i <= $nb_blocs; $i++): ?>
        // Changer la couleur de fond
        document.getElementById("bg-color-picker-<?php echo $i; ?>").addEventListener("input", function() {
            let color = this.value;
            let blockId = "blog-content-<?php echo $i; ?>";
            document.getElementById(blockId).style.backgroundColor = color;
            console.log("Bloc ID:", blockId, "Couleur de fond changée:", color);
        });

        // Changer la couleur du texte
        document.getElementById("text-color-picker-<?php echo $i; ?>").addEventListener("input", function() {
            let color = this.value;
            let blockId = "blog-content-<?php echo $i; ?>";
            document.getElementById(blockId).style.color = color;
            console.log("Bloc ID:", blockId, "Couleur du texte changée:", color);
        });

        // Appliquer le gras
        document.getElementById("bold-btn-<?php echo $i; ?>").addEventListener("click", function() {
            document.execCommand('bold');
            console.log("Bloc ID:", "blog-content-<?php echo $i; ?>", "Gras appliqué");
        });

        // Appliquer l'italique
        document.getElementById("italic-btn-<?php echo $i; ?>").addEventListener("click", function() {
            document.execCommand('italic');
            console.log("Bloc ID:", "blog-content-<?php echo $i; ?>", "Italique appliqué");
        });

        // Appliquer le soulignement
        document.getElementById("underline-btn-<?php echo $i; ?>").addEventListener("click", function() {
            document.execCommand('underline');
            console.log("Bloc ID:", "blog-content-<?php echo $i; ?>", "Souligné appliqué");
        });

        // Changer la taille de la police
        document.getElementById("font-size-<?php echo $i; ?>").addEventListener("change", function() {
            let size = this.value;
            let blockId = "blog-content-<?php echo $i; ?>";
            document.getElementById(blockId).style.fontSize = size;
            console.log("Bloc ID:", blockId, "Taille du texte changée:", size);
        });

        // Changer la police
        document.getElementById("font-family-<?php echo $i; ?>").addEventListener("change", function() {
            let fontFamily = this.value;
            let blockId = "blog-content-<?php echo $i; ?>";
            document.getElementById(blockId).style.fontFamily = fontFamily;
            console.log("Bloc ID:", blockId, "Police changée:", fontFamily);
        });

        // Changer l'alignement du texte
        document.getElementById("align-<?php echo $i; ?>").addEventListener("change", function() {
            let align = this.value;
            let blockId = "blog-content-<?php echo $i; ?>";
            document.getElementById(blockId).style.textAlign = align;
            console.log("Bloc ID:", blockId, "Alignement changé:", align);
        });

        // Surligner
        document.getElementById("highlight-<?php echo $i; ?>").addEventListener("input", function() {
            let color = this.value;
            let blockId = "blog-content-<?php echo $i; ?>";
            document.getElementById(blockId).style.backgroundColor = color;
            console.log("Bloc ID:", blockId, "Surlignage changé:", color);
        });

        // Liste à puces
        document.getElementById("bullets-<?php echo $i; ?>").addEventListener("click", function() {
            document.execCommand('insertUnorderedList');
            console.log("Bloc ID:", "blog-content-<?php echo $i; ?>", "Liste à puces appliquée");
        });

        // Liste numérotée
        document.getElementById("numbered-<?php echo $i; ?>").addEventListener("click", function() {
            document.execCommand('insertOrderedList');
            console.log("Bloc ID:", "blog-content-<?php echo $i; ?>", "Liste numérotée appliquée");
        });

        // Insérer un lien
        document.getElementById("insert-link-<?php echo $i; ?>").addEventListener("click", function() {
            let url = document.getElementById("link-url-<?php echo $i; ?>").value;
            let selectedText = window.getSelection().toString();
            if (selectedText) {
                document.execCommand('createLink', false, url);
            } else {
                alert("Veuillez sélectionner du texte pour insérer un lien.");
            }
            console.log("Lien inséré:", url);
        });

        // Insérer une image
        document.getElementById("insert-image-<?php echo $i; ?>").addEventListener("click", function() {
            let imageUrl = document.getElementById("image-url-<?php echo $i; ?>").value;
            if (imageUrl) {
                document.execCommand('insertImage', false, imageUrl);
            } else {
                alert("Veuillez entrer une URL d'image.");
            }
            console.log("Image insérée:", imageUrl);
        });
        <?php endfor; ?>
    </script>

</body>
</html>
