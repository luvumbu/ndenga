<style>
/* Styles généraux */
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

body {
    font-family: "Press Start 2P", cursive;
    font-size: 1.2em;
    margin: 0;
    padding: 0;
    background: #f3e000;
    color: #333;
}

/* Conteneur principal */
.body_div {
    width: 90%;
    margin: auto;
    padding: 20px;
    background: #ffffff;
    border: 5px solid #f1c40f;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

/* Titre principal */
.class_0 {
    text-align: center;
    font-size: 3.5em;
    font-weight: bold;
    color: #e67e22;
    margin-bottom: 20px;
    text-transform: uppercase;
    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
}

/* Liens */
.lien_page, .lien_page2 {
    display: inline-block;
    text-align: center;
    background: #f39c12;
    padding: 12px 25px;
    margin: 20px 10px;
    width: auto;
    color: white;
    font-weight: bold;
    text-decoration: none;
    border-radius: 10px;
    border: 2px solid #e67e22;
    transition: background 0.3s, transform 0.2s;
}

.lien_page2 {
    background: #e67e22;
}

.lien_page:hover, .lien_page2:hover {
    background: #f39c12;
    transform: scale(1.1);
}

/* Section flex */
.class_2 {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background: #ffffff;
    color: #333;
    width: 100%;
    padding: 25px 0;
    border-top: 3px solid #f39c12;
    border-bottom: 3px solid #f39c12;
}

.class_2 a {
    color: #e67e22;
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
    background: #f39c12;
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
    background: #f1c40f;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #e67e22;
    border-radius: 10px;
}

/* Effet Smooth scrolling */
html {
    scroll-behavior: smooth;
}
</style>
