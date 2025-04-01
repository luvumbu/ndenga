<style>
/* Styles généraux */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

body {
    font-family: "Poppins", sans-serif;
    font-size: 1.1em;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #4caf50, #81c784);
    color: #333;
}

/* Conteneur principal */
.body_div {
    width: 80%;
    margin: auto;
    padding: 25px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

/* Titre principal */
.class_0 {
    text-align: center;
    font-size: 3.5em;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Liens */
.lien_page, .lien_page2 {
    display: inline-block;
    text-align: center;
    background: #00796b;
    padding: 12px 25px;
    margin: 20px 10px;
    width: auto;
    color: white;
    font-weight: bold;
    text-decoration: none;
    border-radius: 8px;
    border: 2px solid #004d40;
    transition: background 0.3s, transform 0.2s;
}

.lien_page2 {
    background: #004d40;
}

.lien_page:hover, .lien_page2:hover {
    background: #004d40;
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
    border-top: 3px solid #00796b;
    border-bottom: 3px solid #00796b;
}

.class_2 a {
    color: #00796b;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s;
}

.class_2 div {
    padding: 15px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}

.class_2 div:hover {
    background: #00796b;
    color: white;
    border-radius: 8px;
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
    background: #f5f5f5;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #00796b;
    border-radius: 10px;
}

/* Effet Smooth scrolling */
html {
    scroll-behavior: smooth;
}
</style>
