<?php 

//var_dump($finalArray) ; 




?>


<style>
    /* Style général pour uniformiser l'apparence */
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f9f9f9;
  color: #333;
}

/* Style pour l'ID utilisateur */
.id-user {
  font-weight: bold;
  color: #2c3e50;
  background-color: #ecf0f1;
  padding: 10px;
  border: 1px solid #bdc3c7;
  border-radius: 5px;
  margin-bottom: 10px;
}

/* Style pour la date utilisateur */
.date-user {
  font-style: italic;
  color: #34495e;
  margin: 5px 0;
}

/* Style pour l'ID SHA1 utilisateur */
.id-sha1-user {
  color: #e74c3c;
  text-transform: uppercase;
  font-size: 14px;
}

/* Style pour l'ID parent utilisateur */
.id-parent-user {
  color: #8e44ad;
  border-left: 3px solid #9b59b6;
  padding-left: 10px;
}

/* Style pour la description utilisateur */
.description-user {
  font-size: 16px;
  line-height: 1.5;
  color: #2c3e50;
  margin: 10px 0;
}

/* Style pour le titre utilisateur */
.title-user {
  font-weight: bold;
  font-size: 18px;
  color: #2980b9;
  margin-bottom: 10px;
}

/* Style pour l'image utilisateur */
.img-user {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 2px solid #3498db;
  object-fit: cover;
  margin-bottom: 10px;
}

/* Style pour le nom utilisateur */
.nom-user {
  font-size: 20px;
  color: #27ae60;
  text-transform: capitalize;
}

/* Style pour le prénom utilisateur */
.prenom-user {
  font-size: 20px;
  color: #16a085;
  text-transform: capitalize;
}

/* Style pour le mot de passe utilisateur */
.password-user {
  background-color: #f39c12;
  color: white;
  padding: 5px 10px;
  border-radius: 3px;
  font-family: monospace;
}

/* Style pour l'e-mail utilisateur */
.email-user {
  color: #2980b9;
  text-decoration: underline;
  font-style: italic;
}

/* Style pour l'activation utilisateur */
.activation-user {
  background-color: #2ecc71;
  color: white;
  padding: 5px 15px;
  text-align: center;
  border-radius: 5px;
  display: inline-block;
}

/* Style pour la date d'inscription utilisateur */
.date-inscription-user {
  font-size: 14px;
  color: #95a5a6;
  text-align: right;
  margin-top: 10px;
}

</style>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utilisateur - Détails</title>
  <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
  <div class="user-card">
    <div class="id-user">ID Utilisateur : 12345</div>
    <div class="date-user">Date de création : 2025-01-01</div>
    <div class="id-sha1-user">SHA1 : a94a8fe5ccb19ba61c4c0873d391e987982fbbd3</div>
    <div class="id-parent-user">ID Parent : 67890</div>
    <div class="description-user">
      Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.
    </div>
    <div class="title-user">Titre : Développeur Full Stack</div>
    <div class="img-user">
      <img src="user-profile.jpg" alt="Photo de l'utilisateur">
    </div>
    <div class="nom-user">Nom : Dupont</div>
    <div class="prenom-user">Prénom : Jean</div>
    <div class="password-user">Mot de passe : ********</div>
    <div class="email-user">Email : jean.dupont@example.com</div>
    <div class="activation-user">Statut : Activé</div>
    <div class="date-inscription-user">Date d'inscription : 2025-01-01</div>
  </div>
</body>
</html>
