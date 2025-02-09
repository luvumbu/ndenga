<?php
 
 $divHierarchy_array = [
    // 🏆 Niveau Zéro - L'élément ultime englobant tout
    "root-div",         // Niveau 0 - Racine de l'application (div)

    // 🌍 Grandes divisions contenant des div
    "wrapper-div",      // Niveau 1 - Div englobante principale (wrapper-div)
    "container-div",    // Niveau 2 - Conteneur principal (container-div)
    "section-div",      // Niveau 3 - Section d'une page (section-div)
    "row-div",          // Niveau 4 - Ligne contenant plusieurs colonnes (row-div)
    "column-div",       // Niveau 5 - Colonne dans une ligne (column-div)
    
    // 📦 Blocs spécifiques (toujours des div)
    "content-box",      // Niveau 6 - Conteneur de contenu (content-box)
    "card-div",         // Niveau 7 - Carte de contenu (card-div)
    "box-div",          // Niveau 8 - Petit bloc de contenu (box-div)
    "group-div",        // Niveau 9 - Groupe d’éléments liés (group-div)
    "sub-group-div",    // Niveau 10 - Sous-groupe de contenu (sub-group-div)
    "element-div",      // Niveau 11 - Élément spécifique encadré (element-div)

    // 🎨 Éléments interactifs
    "button",           // Niveau 12 - Bouton `<button>` (button)
    "input",            // Niveau 13 - Champ de saisie `<input>` (input)
    "textarea",         // Niveau 14 - Zone de texte `<textarea>` (textarea)
    "select",           // Niveau 15 - Liste déroulante `<select>` (select)
    "option",           // Niveau 16 - Élément d’une liste déroulante `<option>` (option)
    "label",            // Niveau 17 - Étiquette pour un champ `<label>` (label)
    "checkbox",         // Niveau 18 - Case à cocher `<input type='checkbox'>` (checkbox)
    "radio",            // Niveau 19 - Bouton radio `<input type='radio'>` (radio)

    // 🔗 Navigation et liens
    "nav-div",          // Niveau 20 - Menu de navigation (nav-div)
    "menu-div",         // Niveau 21 - Conteneur d’un menu (menu-div)
    "menu-item",        // Niveau 22 - Élément de menu `<li>` ou `<div>` (menu-item)
    "link",             // Niveau 23 - Lien `<a>` (link)
    "anchor",           // Niveau 24 - Ancres `<a>` (anchor)

    // 📑 Contenu textuel
    "title",            // Niveau 25 - Titre `<h1>` à `<h6>` (title)
    "paragraph",        // Niveau 26 - Texte `<p>` (paragraph)
    "span",             // Niveau 27 - Élément de texte inline `<span>` (span)
    "strong",           // Niveau 28 - Texte en gras `<strong>` (strong)
    "emphasis",         // Niveau 29 - Texte en italique `<em>` (emphasis)

    // 📷 Médias et éléments spéciaux
    "image",            // Niveau 30 - Image `<img>` (image)
    "video",            // Niveau 31 - Vidéo `<video>` (video)
    "audio",            // Niveau 32 - Son `<audio>` (audio)
    "icon",             // Niveau 33 - Icône SVG ou police d'icônes (icon)

    // 📂 Tableaux et organisation
    "table",            // Niveau 34 - Tableau `<table>` (table)
    "thead",            // Niveau 35 - En-tête de tableau `<thead>` (thead)
    "tbody",            // Niveau 36 - Corps du tableau `<tbody>` (tbody)
    "tr",               // Niveau 37 - Ligne de tableau `<tr>` (tr)
    "th",               // Niveau 38 - Cellule d’en-tête `<th>` (th)
    "td",               // Niveau 39 - Cellule de données `<td>` (td)

    // 🎯 Autres éléments spécifiques
    "blockquote",       // Niveau 40 - Citation `<blockquote>` (blockquote)
    "code",             // Niveau 41 - Bloc de code `<code>` (code)
    "pre",              // Niveau 42 - Préformatage `<pre>` (pre)
];

$divHierarchy_0  = $divHierarchy_array[0];  // Niveau 0  - Div (root-div)
$divHierarchy_1  = $divHierarchy_array[1];  // Niveau 1  - Div (wrapper-div)
$divHierarchy_2  = $divHierarchy_array[2];  // Niveau 2  - Div (container-div)
$divHierarchy_3  = $divHierarchy_array[3];  // Niveau 3  - Div (section-div)
$divHierarchy_4  = $divHierarchy_array[4];  // Niveau 4  - Div (row-div)
$divHierarchy_5  = $divHierarchy_array[5];  // Niveau 5  - Div (column-div)
$divHierarchy_6  = $divHierarchy_array[6];  // Niveau 6  - Div (content-box)
$divHierarchy_7  = $divHierarchy_array[7];  // Niveau 7  - Div (card-div)
$divHierarchy_8  = $divHierarchy_array[8];  // Niveau 8  - Div (box-div)
$divHierarchy_9  = $divHierarchy_array[9];  // Niveau 9  - Div (group-div)
$divHierarchy_10 = $divHierarchy_array[10]; // Niveau 10 - Div (sub-group-div)
$divHierarchy_11 = $divHierarchy_array[11]; // Niveau 11 - Div (element-div)
$divHierarchy_12 = $divHierarchy_array[12]; // Niveau 12 - Div (button)
$divHierarchy_13 = $divHierarchy_array[13]; // Niveau 13 - Div (input)
$divHierarchy_14 = $divHierarchy_array[14]; // Niveau 14 - Div (textarea)
$divHierarchy_15 = $divHierarchy_array[15]; // Niveau 15 - Div (select)
$divHierarchy_16 = $divHierarchy_array[16]; // Niveau 16 - Div (option)
$divHierarchy_17 = $divHierarchy_array[17]; // Niveau 17 - Div (label)
$divHierarchy_18 = $divHierarchy_array[18]; // Niveau 18 - Div (checkbox)
$divHierarchy_19 = $divHierarchy_array[19]; // Niveau 19 - Div (radio)
$divHierarchy_20 = $divHierarchy_array[20]; // Niveau 20 - Div (nav-div)
$divHierarchy_21 = $divHierarchy_array[21]; // Niveau 21 - Div (menu-div)
$divHierarchy_22 = $divHierarchy_array[22]; // Niveau 22 - Div (menu-item)
$divHierarchy_23 = $divHierarchy_array[23]; // Niveau 23 - Div (link)
$divHierarchy_24 = $divHierarchy_array[24]; // Niveau 24 - Div (anchor)
$divHierarchy_25 = $divHierarchy_array[25]; // Niveau 25 - Div (title)
$divHierarchy_26 = $divHierarchy_array[26]; // Niveau 26 - Div (paragraph)
$divHierarchy_27 = $divHierarchy_array[27]; // Niveau 27 - Div (span)
$divHierarchy_28 = $divHierarchy_array[28]; // Niveau 28 - Div (strong)
$divHierarchy_29 = $divHierarchy_array[29]; // Niveau 29 - Div (emphasis)
$divHierarchy_30 = $divHierarchy_array[30]; // Niveau 30 - Div (image)
$divHierarchy_31 = $divHierarchy_array[31]; // Niveau 31 - Div (video)
$divHierarchy_32 = $divHierarchy_array[32]; // Niveau 32 - Div (audio)
$divHierarchy_33 = $divHierarchy_array[33]; // Niveau 33 - Div (icon)
$divHierarchy_34 = $divHierarchy_array[34]; // Niveau 34 - Div (table)
$divHierarchy_35 = $divHierarchy_array[35]; // Niveau 35 - Div (thead)
$divHierarchy_36 = $divHierarchy_array[36]; // Niveau 36 - Div (tbody)
$divHierarchy_37 = $divHierarchy_array[37]; // Niveau 37 - Div (tr)
$divHierarchy_38 = $divHierarchy_array[38]; // Niveau 38 - Div (th)
$divHierarchy_39 = $divHierarchy_array[39]; // Niveau 39 - Div (td)
$divHierarchy_40 = $divHierarchy_array[40]; // Niveau 40 - Div (blockquote)
$divHierarchy_41 = $divHierarchy_array[41]; // Niveau 41 - Div (code)
$divHierarchy_42 = $divHierarchy_array[42]; // Niveau 42 - Div (pre)

$liste_css = array();
 


for ($i_div=0; $i_div < count($divHierarchy_array); $i_div++) { 


    array_push($liste_css,"");
}

/*

$css_page = "";


$css_page .= "<style>";




for ($i__ = 0; $i__ < count($liste_css); $i__++) {

    $css_page .= "." . $divHierarchy_array[$i__];
    $css_page .= "{";
    $css_page .= $liste_css[$i__];
    $css_page .= "}";
 
}






$css_page .= "</style>";

*/
?>