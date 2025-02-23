<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations des Communes</title>
</head>
<body>

    <h1>Informations des Communes</h1>
    <label for="codePostal">Entrez un code postal :</label>
    <input type="text" id="codePostal" placeholder="Ex: 78000">
    <button onclick="fetchCommune()">Rechercher</button>

    <div id="result"></div>

    <script>
        function fetchCommune() {
            const codePostal = document.getElementById("codePostal").value.trim();
            if (!codePostal) {
                alert("Veuillez entrer un code postal valide.");
                return;
            }

            // Utilisation de la bonne structure d'URL
            const url = `https://geo.api.gouv.fr/communes?codePostal=${codePostal}&fields=nom,code,departement,region,population,surface,centre,codesPostaux`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const resultDiv = document.getElementById("result");
                    resultDiv.innerHTML = "";

                    if (data.length === 0) {
                        resultDiv.innerHTML = "<p>Aucune commune trouvée.</p>";
                        return;
                    }

                    data.forEach(commune => {
                        const communeInfo = `
                            <h2>${commune.nom} (${commune.code})</h2>
                            <p><strong>Département :</strong> ${commune.departement.nom} (${commune.departement.code})</p>
                            <p><strong>Région :</strong> ${commune.region.nom} (${commune.region.code})</p>
                            <p><strong>Population :</strong> ${commune.population} habitants</p>
                            <p><strong>Superficie :</strong> ${commune.surface} km²</p>
                            <p><strong>Coordonnées :</strong> Lat ${commune.centre.coordinates[1]}, Lon ${commune.centre.coordinates[0]}</p>
                            <p><strong>Codes postaux :</strong> ${commune.codesPostaux.join(", ")}</p>
                            <hr>
                        `;
                        resultDiv.innerHTML += communeInfo;
                    });
                })
                .catch(error => {
                    console.error("Erreur lors de la récupération :", error);
                    document.getElementById("result").innerHTML = "<p>Erreur lors de la récupération des données.</p>";
                });
        }
    </script>

    
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

</body>
</html>
