<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture d'écran avec JavaScript</title>
</head>
<body>
    <div id="content" style="width: 300px; height: 200px; background-color: lightblue;">
        <h2>Exemple de contenu à capturer</h2>
    </div>

    <button id="captureButton">Capturer l'écran</button>
    <br>
    <a id="downloadLink" style="display:none;">Télécharger l'image</a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <script>
        document.getElementById('captureButton').addEventListener('click', function() {
            html2canvas(document.getElementById('content')).then(function(canvas) {
                // Convertir le canvas en image
                var image = canvas.toDataURL('image/png');

                // Créer un élément image pour afficher la capture
                var imgElement = document.createElement('img');
                imgElement.src = image;
                document.body.appendChild(imgElement);

                // Préparer le lien pour télécharger l'image
                var downloadLink = document.getElementById('downloadLink');
                downloadLink.href = image;
                downloadLink.download = 'capture.png'; // Nom du fichier
                downloadLink.style.display = 'inline'; // Afficher le lien de téléchargement
                downloadLink.textContent = 'Télécharger l\'image';
            });
        });
    </script>
</body>
</html>
