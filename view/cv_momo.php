<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Mohamed Adam Abdallah</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
            font-size: 14px;
        }
        .container {
            width: 80%;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #1e3a8a;
            font-family: 'Ubuntu', sans-serif;
            font-size: 2em;
        }
        h2 {
            color: #1e3a8a;
            font-size: 1.6em;
            text-align: center;
        }
        .section-title {
            background-color: #e6f7ff;
            padding: 10px;
            margin-bottom: 12px;
            border-radius: 5px;
            font-weight: 500;
            font-size: 1.1em;
            color: #1e3a8a;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 8px;
        }
        li strong {
            color: #2d3748;
        }
        .experience, .formation, .permis, .loisir {
            margin-bottom: 15px;
        }
        .experience li, .formation li, .permis li, .loisir li {
            font-size: 1em;
            line-height: 1.6;
        }
        .footer {
            font-size: 0.85em;
            color: #666;
            text-align: center;
            margin-top: 20px;
        }

        /* Styles d'impression */
        @media print {
            body {
                font-size: 10px; /* Réduction de la taille de police pour l'impression */
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                margin: 0;
                box-shadow: none;
                padding: 10px;
            }
            h1, h2 {
                font-size: 1.5em; /* Réduire la taille des titres */
            }
            .section-title {
                font-size: 1em; /* Réduire la taille des titres des sections */
            }
            ul li {
                font-size: 0.9em; /* Réduire la taille du texte des listes */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ÉLECTRICIEN N2</h1>
    <h2>Mohamed Adam Abdallah</h2>
    <h2>Nacelle A</h2>

    <!-- Section: Coordonnées -->
    <div class="section-title">COORDONNÉES</div>
    <ul>
        <li><strong>Adresse :</strong> 16 A rue de Lannoy, 59800 Lille</li>
        <li><strong>Téléphone :</strong> 0758655307</li>
        <li><strong>Email :</strong> mohamedcodok@gmail.com</li>
    </ul>

    <!-- Section: Expériences Professionnelles -->
    <div class="section-title">EXPÉRIENCES PROFESSIONNELLES</div>
    <ul class="experience">
        <li><strong>27/04/2023 - 28/04/2023 : G.D.S ELEC</strong>
            <ul>
                <li>Installation du tableau électrique et raccordement.</li>
                <li>Installation du système de communication.</li>
                <li>Mission de 2 jours.</li>
            </ul>
        </li>
        <li><strong>06/03/2023 - 31/03/2023 : AUXIPRO ELEC</strong>
            <ul>
                <li>Pose d'appareillages, raccordement au tableau.</li>
                <li>Interventions en dépannage.</li>
                <li>Passage et tirage de câbles.</li>
                <li>Mission de 1 mois.</li>
            </ul>
        </li>
        <li><strong>10/06/2023 - 20/11/2024 : BL Énergie</strong>
            <ul>
                <li>Lecture des plans et schémas.</li>
                <li>Pose et équipement des équipements électriques.</li>
                <li>Tirage de câbles courant fort et faible.</li>
                <li>Réalisation des saignées.</li>
                <li>Implantation et pose des équipements électriques dans les voiles et planchers béton.</li>
                <li>Connexion des points de centre.</li>
            </ul>
        </li>
    </ul>

    <!-- Section: Formations -->
    <div class="section-title">FORMATIONS</div>
    <ul class="formation">
        <li><strong>03 février 2023 :</strong> Titre Professionnel Électricien d'Équipement de Bâtiment</li>
        <li><strong>Décembre 2022 - 19 mai 2023 :</strong> Habilitation électrique (B1V/BR/H0V)</li>
    </ul>

    <!-- Section: Permis de conduire -->
    <div class="section-title">PERMIS DE CONDUIRE</div>
    <ul class="permis">
        <li>Permis B</li>
    </ul>

    <!-- Section: Loisirs -->
    <div class="section-title">LOISIRS</div>
    <ul class="loisir">
        <li>Football</li>
        <li>Cinéma</li>
    </ul>
</div>

<div class="footer">
    <p>Mohamed Adam Abdallah - CV 2024</p>
</div>

</body>
</html>
