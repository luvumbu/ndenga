<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugs Bunny Crazy Castle</title>
    <style>
        canvas {
            border: 2px solid black;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<canvas id="gameCanvas" width="300" height="200"></canvas>

<script>
    const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");

    const TILE_SIZE = 20;
    const ROWS = 10;
    const COLS = 15;

    const COLORS = {
        player: "gray",      // Bugs Bunny
        enemy: "red",        // Ennemis
        wall: "black",       // Murs
        ground: "white",     // Sol
        carrot: "orange"     // Carottes
    };

    // Niveau de base (0 = sol, 1 = mur, 2 = joueur, 3 = ennemi, 4 = carotte)
    const level = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 4, 0, 1, 0, 0, 0, 1, 3, 0, 4, 0, 1],
        [1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1],
        [1, 2, 0, 1, 0, 0, 0, 1, 4, 0, 0, 3, 1, 0, 1],
        [1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 4, 1],
        [1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1],
        [1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 3, 1, 1, 0, 1],
        [1, 4, 0, 0, 0, 0, 4, 0, 0, 0, 0, 1, 0, 0, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ];

    let playerPos = { x: 1, y: 3 };

    function drawGame() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (let row = 0; row < ROWS; row++) {
            for (let col = 0; col < COLS; col++) {
                let tile = level[row][col];
                let color = COLORS.ground;
                if (tile === 1) color = COLORS.wall;
                if (tile === 2) color = COLORS.player;
                if (tile === 3) color = COLORS.enemy;
                if (tile === 4) color = COLORS.carrot;

                ctx.fillStyle = color;
                ctx.fillRect(col * TILE_SIZE, row * TILE_SIZE, TILE_SIZE, TILE_SIZE);
                ctx.strokeStyle = "black";
                ctx.strokeRect(col * TILE_SIZE, row * TILE_SIZE, TILE_SIZE, TILE_SIZE);
            }
        }
    }

    document.addEventListener("keydown", (event) => {
        let newX = playerPos.x;
        let newY = playerPos.y;
        if (event.key === "ArrowUp") newY--;
        if (event.key === "ArrowDown") newY++;
        if (event.key === "ArrowLeft") newX--;
        if (event.key === "ArrowRight") newX++;

        if (level[newY][newX] !== 1) {
            level[playerPos.y][playerPos.x] = 0;
            playerPos.x = newX;
            playerPos.y = newY;
            level[playerPos.y][playerPos.x] = 2;
        }
        drawGame();
    });

    drawGame();
</script>

</body>
</html>
