<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation Carrés Aléatoires</title>
    <style>
        body {
            margin: 0;
            background-color: black;
            overflow: hidden;
            color: white;
            font-family: Arial, sans-serif;
        }
        .square {
            position: absolute;
            width: 15px;
            height: 15px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }
        #info {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 5px;
        }
        .color-sample {
            width: 30px;
            height: 30px;
            display: inline-block;
            margin: 5px;
            border: 1px solid white;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div id="info">
        <p id="counter">Carrés affichés: 0</p>
        <p id="colorTask"></p>
        <div id="colorSamples"></div>
    </div>
    <script>
        const colors = ["#64748B", "#94A3B8", "#A3E635", "#6B7280", "#8B5CF6", "#14B8A6", "#EAB308", "#7C3AED"];
        let squares = [];
        let targetColor = null;
        let removedCount = 0;
        
        function createSquare() {
            const square = document.createElement("div");
            square.classList.add("square");
            const color = colors[Math.floor(Math.random() * colors.length)];
            square.style.backgroundColor = color;
            square.style.left = `${Math.random() * window.innerWidth}px`;
            square.style.top = `${Math.random() * window.innerHeight}px`;
            square.style.opacity = Math.random() * 0.5 + 0.5; // Opacité aléatoire entre 0.5 et 1
            square.dataset.color = color;
            square.addEventListener("mouseenter", () => {
                if (color === targetColor) {
                    square.remove();
                    removedCount++;
                    checkGoal();
                }
            });
            document.body.appendChild(square);
            squares.push(square);
            updateCounter();
        }
        
        function updateCounter() {
            document.getElementById("counter").innerText = `Carrés affichés: ${squares.length}`;
        }
        
        function checkGoal() {
            if (removedCount >= 10) {
                alert("Bravo ! Vous avez supprimé 10 carrés de la couleur demandée.");
                resetGame();
            }
        }
        
        function resetGame() {
            removedCount = 0;
            targetColor = colors[Math.floor(Math.random() * colors.length)];
            document.getElementById("colorTask").innerText = `Supprimez 10 carrés de couleur: ${targetColor}`;
            displayColorSamples();
        }
        
        function displayColorSamples() {
            const container = document.getElementById("colorSamples");
            container.innerHTML = "";
            colors.forEach(color => {
                const sample = document.createElement("div");
                sample.classList.add("color-sample");
                sample.style.backgroundColor = color;
                container.appendChild(sample);
            });
        }
        
        setInterval(() => {
            createSquare();
            squares = squares.filter(sq => document.body.contains(sq));
            updateCounter();
        }, 50);
        
        resetGame();
    </script>
</body>
</html>
