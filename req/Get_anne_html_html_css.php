<style>
    
:root {
    --background-color: #f9f9f9; /* Fond gris clair */
    --text-color: #333; /* Texte gris foncé */
    --highlight-color: #007acc; /* Bleu doux pour les éléments principaux */
    --label-color: #555; /* Couleur des étiquettes */
    --container-background: #ffffff; /* Fond des conteneurs */
    --border-color: #ddd; /* Bordure légère */
}
 



.event-name {
    font-size: 1.5em;
    font-weight: 600;
    color: var(--highlight-color);
    margin-bottom: 10px;
   text-shadow: 1px 1px black;

}

.time {
    display: inline-block;
    margin: 0 5px;
    padding: 8px;
    background-color: var(--container-background);
    border-radius: 4px;
    width: 100px;
    border: 1px solid var(--border-color);
 
}

.label {
    display: block;
    font-size: 0.8em;
    color: var(--label-color);
    margin-top: 4px;
    
}

.status {
    color: var(--highlight-color);
    font-size: 1em;
    margin-top: 10px;
    font-weight: 500;
    
}
 

.countdown-container {
    margin-bottom: 20px;
    text-align: center;
    font-size: 1.2em;
    background-color: var(--container-background);
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    border: 1px solid var(--border-color);
    width: 100%;
    max-width: 700px; /* Largeur augmentée */
    color: var(--text-color);
    margin: auto;

    
  
}
</style>


<?php 

 

echo '<style>
.countdown-container {
 
    background-color: '.$_SESSION["color_projet"].';
 
}</style>' ;



?>







 