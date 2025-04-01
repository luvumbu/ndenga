<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Kidd in Miracle World</title>
    <style>
body {
    background-color: #000;
    color: #fff;
    font-family: 'Arial', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        linear-gradient(to right, #000 7%, transparent 7%, transparent 93%, #000 93%),
        linear-gradient(to bottom, #000 7%, transparent 7%, transparent 93%, #000 93%),
        repeating-linear-gradient(to right, 
            #d40000, #d40000 15%, 
            #000 15%, #000 30%),
        repeating-linear-gradient(to bottom, 
            #d40000, #d40000 15%, 
            #000 15%, #000 30%);
    background-size: 100% 100%, 100% 100%, 60px 60px, 60px 60px;
    opacity: 0.35;
    z-index: 0;
}

.content {
    background-color: rgba(0, 0, 0, 0.85);
    padding: 3rem 4.5rem;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.9);
    position: relative;
    z-index: 1;
    border: 4px solid #252525;
}

.title {
    font-size: 4rem;
    font-weight: bold;
    margin-bottom: 0.75rem;
    color: #f8e018;
    text-shadow: 5px 5px 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;
    letter-spacing: 3px;
}

.subtitle {
    font-size: 3rem;
    margin-top: 0;
    margin-bottom: 3rem;
    color: #fff;
    text-shadow: 4px 4px 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;
    letter-spacing: 2px;
}

.sega-logo {
    font-size: 3.5rem;
    font-weight: bold;
    color: #ff0000;
    margin-top: 3rem;
    text-shadow: 4px 4px 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;
    letter-spacing: 4px;
}
    </style>
</head>
<body>
    <div class="pattern"></div>
    <div class="content">
        <div class="title">Alex Kidd in</div>
        <div class="subtitle">Miracle World</div>
        <div class="sega-logo">SEGA</div>
    </div>
</body>
</html>