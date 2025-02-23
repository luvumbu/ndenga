
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$codePostal = "59280";
$url = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Désactive la vérification SSL si besoin

$response = curl_exec($ch);
curl_close($ch);

if ($response === false) {
    die("Erreur lors de la récupération des données.");
}

$data = json_decode($response, true);

foreach ($data as $commune) {
    echo "Nom: " . $commune['nom'] . "<br>";
}
?>
</body>
</html>