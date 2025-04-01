 
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    body {
        font-family: "Press Start 2P", cursive;
        font-size: 1.2em;
        margin: 0;
        padding: 0;
        background: linear-gradient(90deg, #000428, #004e92);
        color: #f8f8f8;
        text-transform: uppercase;
    }

    /* Conteneur principal */
    .body_div {
        width: 90%;
        margin: auto;
        padding: 20px;
        background: #222;
        border: 5px solid #00ffff;
        border-radius: 10px;
        box-shadow: 0 0 20px #00ffff;
        text-align: center;
    }

    /* Titre principal */
    .class_0 {
        text-align: center;
        font-size: 2.5em;
        padding: 20px;
        color: #ffcc00;
        text-shadow: 4px 4px 0px #000, 8px 8px 0px rgba(255, 255, 255, 0.2);
        border-bottom: 5px solid #ffcc00;
    }

    /* Liens façon boutons d’arcade */
    .lien_page,
    .lien_page2 {
        display: inline-block;
        text-align: center;
        background: #ff0000;
        padding: 15px 25px;
        margin: 30px 10px 0;
        width: 180px;
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        border-radius: 8px;
        border: 4px solid #000;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .lien_page2 {
        background: #0088ff;
    }

    .lien_page:hover,
    .lien_page2:hover {
        transform: scale(1.1);
        box-shadow: 0 0 10px #fff;
    }

    /* Section flex façon HUD */
    .class_2 {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background: #111;
        color: white;
        width: 100%;
        padding: 20px 0;
        border-top: 5px solid #ffcc00;
        border-bottom: 5px solid #ffcc00;
    }

    .class_2 a {
        color: #00ffff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .class_2 div {
        padding: 15px;
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
    }

    .class_2 div:hover {
        background: #ffcc00;
        color: black;
        border-radius: 5px;
    }

    /* Autres classes */
    .class_1 {
        padding: 20px;
    }

    .class_4 {
        padding: 25px;
    }

    /* Scrollbar */
    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        background: #000;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #ffcc00;
        border-radius: 10px;
    }

    /* Effet Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
 
</style>