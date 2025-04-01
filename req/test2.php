<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image réduite à X couleurs</title>
    <style>
        body {
            text-align: center;
            margin: 20px;
            font-family: Arial, sans-serif;
        }
        canvas {
            border: 1px solid black;
            margin-top: 10px;
        }
        .controls {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Image réduite à <span id="colorCount">100</span> couleurs</h1>
    <input type="file" id="upload" accept="image/*">
    <div class="controls">
        <label for="colorRange">Nombre de couleurs :</label>
        <input type="range" id="colorRange" min="2" max="1000" value="100">
    </div>
    <canvas id="myCanvas"></canvas>

    <script>
        const canvas = document.getElementById('myCanvas');
        const ctx = canvas.getContext('2d');
        const colorRange = document.getElementById('colorRange');
        const colorCountText = document.getElementById('colorCount');
        let img = null;  // Stockage de l'image pour retraitement

        // Chargement de l'image depuis l'input file
        document.getElementById('upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img = new Image();
                    img.src = e.target.result;
                    img.onload = function() {
                        processImage(parseInt(colorRange.value));
                    };
                };
                reader.readAsDataURL(file);
            }
        });

        // Mise à jour dynamique du nombre de couleurs
        colorRange.addEventListener('input', function() {
            if (img) {
                colorCountText.textContent = this.value;
                processImage(parseInt(this.value));
            }
        });

        function processImage(numColors) {
            // Adapter la taille du canvas à l'image
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

            // Récupérer les données de l'image
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;

            // Réduire à numColors couleurs
            const colors = getLimitedColors(data, numColors);

            // Appliquer les nouvelles couleurs à l'image
            for (let i = 0; i < data.length; i += 4) {
                const r = data[i];
                const g = data[i + 1];
                const b = data[i + 2];
                const a = data[i + 3];

                const closestColor = findClosestColor(r, g, b, colors);
                data[i] = closestColor.r;
                data[i + 1] = closestColor.g;
                data[i + 2] = closestColor.b;
                data[i + 3] = a;
            }

            // Remettre l'image transformée sur le canvas
            ctx.putImageData(imageData, 0, 0);
        }

        // Fonction pour obtenir numColors couleurs dominantes
        function getLimitedColors(data, numColors) {
            const colorSet = new Set();

            for (let i = 0; i < data.length; i += 4) {
                const r = data[i];
                const g = data[i + 1];
                const b = data[i + 2];
                const color = rgbToHex(r, g, b);
                colorSet.add(color);
                if (colorSet.size >= numColors) {
                    break;
                }
            }

            return Array.from(colorSet).map(hex => hexToRgb(hex));
        }

        // Trouver la couleur la plus proche
        function findClosestColor(r, g, b, colors) {
            let closestColor = colors[0];
            let closestDist = Infinity;

            colors.forEach(color => {
                const dist = colorDistance(r, g, b, color.r, color.g, color.b);
                if (dist < closestDist) {
                    closestDist = dist;
                    closestColor = color;
                }
            });

            return closestColor;
        }

        // Calculer la distance entre deux couleurs
        function colorDistance(r1, g1, b1, r2, g2, b2) {
            return Math.sqrt((r1 - r2) ** 2 + (g1 - g2) ** 2 + (b1 - b2) ** 2);
        }

        // Convertir RGB en Hex
        function rgbToHex(r, g, b) {
            return `#${((1 << 24) | (r << 16) | (g << 8) | b).toString(16).slice(1).toUpperCase()}`;
        }

        // Convertir Hex en RGB
        function hexToRgb(hex) {
            const r = parseInt(hex.slice(1, 3), 16);
            const g = parseInt(hex.slice(3, 5), 16);
            const b = parseInt(hex.slice(5, 7), 16);
            return { r, g, b };
        }
    </script>
</body>
</html>
