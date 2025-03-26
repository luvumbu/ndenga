<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chute libre - 100m</title>
    <style>
        body { margin: 0; overflow: hidden; }
        canvas { display: block; background: #f0f0f0; }
    </style>
</head>
<body>
    <canvas id="gameCanvas"></canvas>
    <script>
        const canvas = document.getElementById("gameCanvas");
        const ctx = canvas.getContext("2d");

        // Ajustement de l'échelle : 1 pixel = 10 cm (100m = 1000px)
        canvas.width = 600;
        canvas.height = 1000;  // 100m = 1000px (échelle 1:10)
        const scale = 10;      // 1m = 10 pixels

        // Paramètres physiques
        const gravity = 9.81;  // Accélération (m/s²)
        let ballY = 0;         // Position initiale (haut du canvas)
        let velocity = 0;       // Vitesse initiale
        let time = 0;           // Temps écoulé
        const dt = 0.05;       // Pas de temps (pour un calcul fluide)

        // Taille du ballon (adaptée à l'échelle)
        const ballRadius = 15;

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Physique : mouvement accéléré
            velocity += gravity * dt;
            ballY += velocity * dt * scale;

            // Dessiner le sol (100m = 1000px)
            ctx.fillStyle = "#4CAF50";
            ctx.fillRect(0, canvas.height - 5, canvas.width, 5);

            // Dessiner le ballon (bleu pour mieux voir)
            ctx.beginPath();
            ctx.arc(canvas.width / 2, ballY, ballRadius, 0, Math.PI * 2);
            ctx.fillStyle = "blue";
            ctx.fill();
            ctx.stroke();

            // Afficher les données
            ctx.fillStyle = "black";
            ctx.font = "16px Arial";
            ctx.fillText(`Hauteur: ${((canvas.height - ballY) / scale).toFixed(2)} m`, 20, 30);
            ctx.fillText(`Vitesse: ${velocity.toFixed(2)} m/s`, 20, 60);
            ctx.fillText(`Temps: ${time.toFixed(2)} s`, 20, 90);

            // Arrêt quand le ballon touche le sol
            if (ballY + ballRadius < canvas.height - 5) {
                time += dt;
                requestAnimationFrame(animate);
            } else {
                ctx.fillText("Impact au sol après 4.52 secondes (théorique)", 20, 120);
                ctx.fillText(`Vitesse finale: ${velocity.toFixed(2)} m/s (≈ ${(velocity * 3.6).toFixed(2)} km/h)`, 20, 150);
            }
        }

        // Démarrer
        animate();
    </script>
</body>
</html>