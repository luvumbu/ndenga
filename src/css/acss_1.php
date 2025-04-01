<style>
  
/* Styles généraux */
@import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');

body {
    font-family: "Uncial Antiqua", cursive;
    font-size: 1.2em;
    margin: 0;
    padding: 0;
    background: url('https://images.unsplash.com/photo-1516117172878-fd2c41f4a759') no-repeat center center/cover;
    color: #f4e1c6;
}

/* Conteneur principal */
.body_div {
    width: 90%;
    margin: auto;
    padding: 20px;
    background: url('https://www.transparenttextures.com/patterns/aged-paper.png');
    border: 5px solid #5c4033;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}

/* Titre principal */
.class_0 {
    text-align: center;
    font-size: 3em;
    font-weight: bold;
    padding: 30px;
    color: #d4af37;
    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
    border-bottom: 3px solid #8b5a2b;
}

/* Liens */
.lien_page, .lien_page2 {
    display: inline-block;
    text-align: center;
    background: #8b4513;
    padding: 12px 20px;
    margin: 30px 10px 0;
    width: 150px;
    color: white;
    font-weight: bold;
    text-decoration: none;
    border-radius: 8px;
    border: 2px solid #5c4033;
    transition: background 0.3s, transform 0.2s;
}

.lien_page2 {
    background: #5c4033;
}

.lien_page:hover, .lien_page2:hover {
    background: #a0522d;
    transform: scale(1.1);
}

/* Section flex */
.class_2 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: #3a2f2f;
    color: white;
    width: 100%;
    padding: 15px 0;
    border-top: 3px solid #8b5a2b;
    border-bottom: 3px solid #8b5a2b;
}

.class_2 a {
    color: #f4d03f;
    text-decoration: none;
    transition: color 0.3s;
}

.class_2 div {
    padding: 15px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}

.class_2 div:hover {
    background: #d4af37;
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
    background: #3a2f2f;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #d4af37;
    border-radius: 10px;
}

/* Effet Smooth scrolling */
html {
    scroll-behavior: smooth;
}


</style>
 