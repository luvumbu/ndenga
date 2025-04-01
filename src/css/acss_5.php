<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

/* Styles généraux */
body {
    font-family: 'Press Start 2P', cursive;
    font-size: 1em;
    margin: 0;
    padding: 0;
    background: #111; /* Noir profond pour le style FF7 */
    color: #FFD700; /* Jaune doré */
}

/* Conteneur principal */
.body_div {
    width: 100%;
    margin: 0;
    padding: 20px;
}

/* Titre principal */
.class_0 {
    text-align: center;
    font-size: 2.5em;
    padding: 50px;
    color: #FFD700; /* Jaune doré */
    text-shadow: 0px 0px 8px #FFD700;
    border: 3px solid #FFD700;
    background: rgba(0, 0, 0, 0.8);
    display: inline-block;
    margin: 20px auto;
}

/* Liens */
.lien_page, .lien_page2 {
    display: inline-block;
    text-align: center;
    background-color: #FFD700; /* Jaune doré */
    padding: 15px 20px;
    margin: 50px 10px 0;
    width: 180px;
    color: black;
    font-weight: bold;
    text-decoration: none;
    border: 3px solid #FFD700;
    border-radius: 5px;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    box-shadow: 0px 0px 5px #FFD700;
}

.lien_page2 {
    background-color: #e5a100; /* Jaune plus intense */
}

.lien_page:hover, .lien_page2:hover {
    background: #ffcc00; /* Jaune lumineux */
    color: black;
    transform: scale(1.1);
    box-shadow: 0px 0px 15px #FFD700;
}

/* Section flex */
.class_2 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #222;
    color: #FFD700; /* Jaune doré pour les textes */
    width: 100%;
    padding: 15px 0;
    border-top: 3px solid #FFD700;
    border-bottom: 3px solid #FFD700;
}

.class_2 a {
    color: #FFD700;
    text-decoration: none;
    transition: color 0.3s;
}

.class_2 div {
    padding: 15px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}

.class_2 div:hover {
    background-color: #FFD700;
    color: black;
    border-radius: 5px;
}

/* Autres classes */
.class_1 {
    padding: 17px;
}

.class_4 {
    padding: 23px;
}

/* Scrollbar style FF7 */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #222;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #FFD700; /* Jaune doré pour la barre */
    border-radius: 10px;
    box-shadow: 0px 0px 10px #FFD700;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

</style>