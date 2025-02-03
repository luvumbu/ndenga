<?php
// Création d'un tableau avec deux chaînes de caractères
$monTableau = array("Bonjour", "Monde");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau et Boutons avec Lecture Vocale</title>
</head>
<body>

<?php
// Création d'un bouton pour chaque élément du tableau
foreach ($monTableau as $index => $valeur) {
    echo '<button onclick="lireVocal(\'' . $valeur . '\')">Lire: ' . $valeur . '</button><br>';
}
?>

<script>
// Fonction pour lire vocalement la valeur passée en argument
function lireVocal(texte) {
    const syntheseVocale = new SpeechSynthesisUtterance(texte);
    syntheseVocale.lang = 'fr-FR'; // Langue française
    speechSynthesis.speak(syntheseVocale);
}
</script>

</body>
</html>
