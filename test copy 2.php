

        <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur la chaîne YouTube</title>
</head>
<body>
    <h2>Rechercher une chaîne YouTube</h2>
    <input type="text" id="channelUsername" placeholder="Entrez le nom de la chaîne (ex: @VisionIA-FR)">
    <button onclick="getChannelInfo()">Rechercher</button>

    <h3>Résultats :</h3>
    <p><strong>ID de la chaîne :</strong> <span id="channelId"></span></p>
    <p><strong>Nom de la chaîne :</strong> <span id="channelTitle"></span></p>
    <p><strong>Description :</strong> <span id="channelDescription"></span></p>
    <p><strong>URL personnalisée :</strong> <span id="channelUrl"></span></p>
    <p><strong>Image de profil :</strong> <img id="channelProfileImage" src="" alt="Image de profil" width="100"></p>
    <p><strong>Bannière :</strong> <img id="channelBannerImage" src="" alt="Bannière" width="300"></p>
    <p><strong>Nombre d'abonnés :</strong> <span id="subscriberCount"></span></p>
    <p><strong>Nombre de vues :</strong> <span id="viewCount"></span></p>
    <p><strong>Nombre de vidéos :</strong> <span id="videoCount"></span></p>

    <script>
        const apiKey = 'AIzaSyBvpUBqgTT4D0wX1I2TlSx5SxscmOQCMR8'; // 🔴 Remplace par ta clé API YouTube

        function getChannelInfo() {
            const username = document.getElementById('channelUsername').value.trim();
            if (!username) {
                alert("Entrez un nom de chaîne valide !");
                return;
            }

            // 🔍 Étape 1 : Trouver l'ID de la chaîne à partir du nom
            const searchUrl = `https://www.googleapis.com/youtube/v3/search?part=id&type=channel&q=${username}&key=${apiKey}`;

            fetch(searchUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.items.length > 0) {
                        const channelId = data.items[0].id.channelId;
                        document.getElementById('channelId').textContent = channelId;

                        // 🔍 Étape 2 : Récupérer les infos de la chaîne
                        getChannelStats(channelId);
                    } else {
                        alert("Aucune chaîne trouvée !");
                    }
                })
                .catch(error => console.error("Erreur lors de la recherche :", error));
        }

        function getChannelStats(channelId) {
            const statsUrl = `https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,brandingSettings&id=${channelId}&key=${apiKey}`;

            fetch(statsUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.items.length > 0) {
                        const channel = data.items[0];
                        const channelInfo = channel.snippet;
                        const stats = channel.statistics;
                        const branding = channel.brandingSettings;

                        // Mettre à jour l'interface utilisateur avec les données de la chaîne
                        document.getElementById('channelTitle').textContent = channelInfo.title;
                        document.getElementById('channelDescription').textContent = channelInfo.description;
                        document.getElementById('channelUrl').textContent = channelInfo.customUrl || 'Non défini';
                        document.getElementById('subscriberCount').textContent = stats.subscriberCount + " abonnés";
                        document.getElementById('viewCount').textContent = stats.viewCount + " vues";
                        document.getElementById('videoCount').textContent = stats.videoCount + " vidéos";

                        // Mettre à jour l'image de profil
                        document.getElementById('channelProfileImage').src = channelInfo.thumbnails.default.url;

                        // Mettre à jour la bannière (si disponible)
                        if (branding.image && branding.image.bannerImageUrl) {
                            document.getElementById('channelBannerImage').src = branding.image.bannerImageUrl;
                        } else {
                            document.getElementById('channelBannerImage').style.display = 'none';
                        }
                    } else {
                        alert("Impossible de récupérer les statistiques de la chaîne !");
                    }
                })
                .catch(error => console.error("Erreur lors de la récupération des statistiques :", error));
        }
    </script>
</body>
</html>
