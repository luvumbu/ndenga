<?php 

function nettoyerTexteHtml($texte) {
    // Supprimer toutes les balises HTML
    $textePropre = strip_tags($texte);

    // Supprimer les espaces inutiles
    $textePropre = trim($textePropre);

    return $textePropre;
}


?>