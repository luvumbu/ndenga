<style>
/* Styles généraux */
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

body {
    font-family: "Press Start 2P", cursive;
    font-size: 1.2em;
    margin: 0;
    padding: 0;
    background: #ffcc00; /* Fond jaune éclatant */
    color: #333;
}

/* Conteneur principal */
.body_div {
    width: 90%;
    margin: auto;
    padding: 20px;
    background: #fff200; /* Jaune clair pour le conteneur */
    border: 5px solid #e6b800; /* Bordure dorée */
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* Titre principal */
.class_0 {
    text-align: center;
    font-size: 3.5em;
    font-weight: bold;
    color: #f39c12; /* Jaune orangé pour un contraste dynamique */
    margin-bottom: 20px;
    text-transform: uppercase;
    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
}

/* Liens */
.lien_page, .lien_page2 {
    display: inline-block;
    text-align: center;
    background: #f1c40f; /* Jaune vif pour les boutons */
    padding: 12px 25px;
    margin: 20px 10px;
    width: auto;
    color: white;
    font-weight: bold;
    text-decoration: none;
    border-radius: 10px;
    border: 2px solid #e67e22; /* Bordure orange pour un contraste */
    transition: background 0.3s, transform 0.2s;
}

.lien_page2 {
    background: #e67e22; /* Jaune orangé pour l'autre type de bouton */
}

.lien_page:hover, .lien_page2:hover {
    background: #f39c12; /* Jaune doré au survol */
    transform: scale(1.1);
}

/* Section flex */
.class_2 {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background: #fff700; /* Jaune encore plus vif */
    color: #333;
    width: 100%;
    padding: 25px 0;
    border-top: 3px solid #f39c12;
    border-bottom: 3px solid #f39c12;
}

.class_2 a {
    color: #e67e22; /* Contraste avec le jaune vif */
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.class_2 div {
    padding: 15px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}

.class_2 div:hover {
    background: #f39c12; /* Jaune doré au survol */
    color: black;
    border-radius: 10px;
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
    background: #f39c12; /* Jaune doré pour la piste de la scrollbar */
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #e67e22; /* Jaune orangé pour le pouce de la scrollbar */
    border-radius: 10px;
}

/* Effet Smooth scrolling */
html {
    scroll-behavior: smooth;
}
</style>
