<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéo - Les Simpson</title>
    <style>
        body {
            background-color: #ffcc00;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #0055a4;
        }
        video {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Regarde ta vidéo des Simpson !</h1>
        <video controls>
            <source src="video.mp4" type="video/mp4">
            Ton navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div>
</body>
</html>
