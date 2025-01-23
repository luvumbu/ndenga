<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canvas Ghost</title>
</head>
<body>
    <canvas id="ghostCanvas" width="300" height="300" style="border:1px solid #000;"></canvas>
    <script>
        const canvas = document.getElementById('ghostCanvas');
        const ctx = canvas.getContext('2d');

        // Dessin du corps
        ctx.fillStyle = '#e0e0e0'; // Gris clair pour le remplissage
        ctx.beginPath();
        ctx.arc(150, 130, 50, Math.PI, 0); // Partie arrondie supérieure
        ctx.lineTo(200, 220); // Ligne droite droite
        ctx.lineTo(175, 200); // Vague 1
        ctx.lineTo(150, 220); // Vague 2
        ctx.lineTo(125, 200); // Vague 3
        ctx.lineTo(100, 220); // Vague 4
        ctx.lineTo(100, 130); // Ligne droite gauche
        ctx.closePath();
        ctx.fill();
        ctx.stroke();

        // Dessin des yeux
        ctx.fillStyle = '#000'; // Noir pour les yeux
        ctx.beginPath();
        ctx.arc(135, 120, 5, 0, Math.PI * 2); // Oeil gauche
        ctx.fill();
        ctx.beginPath();
        ctx.arc(165, 120, 5, 0, Math.PI * 2); // Oeil droit
        ctx.fill();

        // Bras gauche
        ctx.strokeStyle = '#000'; // Noir pour les bras
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.moveTo(100, 150); // Début du bras gauche
        ctx.lineTo(70, 130); // Milieu
        ctx.lineTo(90, 120); // Fin
        ctx.stroke();

        // Bras droit
        ctx.beginPath();
        ctx.moveTo(200, 150); // Début du bras droit
        ctx.lineTo(230, 130); // Milieu
        ctx.lineTo(210, 120); // Fin
        ctx.stroke();
    </script>
</body>
</html>
