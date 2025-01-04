<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de vérification de connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50;
            /* Fond sombre */
            color: #ecf0f1;
            /* Texte clair */
            margin: 0;
            padding: 20px;
        }

        .form-container {
            background-color: #34495e;
            /* Fond de formulaire sombre */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 300px;
            margin: 0 auto;
        }

        .form-container h2 {
            text-align: center;
            color: #ecf0f1;
            /* Couleur du texte du titre */
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            color: #bdc3c7;
            /* Texte des labels plus clair */
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #7f8c8d;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .form-container input:focus {
            border-color: #3498db;
            /* Couleur de bordure au focus */
            outline: none;
        }

        .submit-btn {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #2980b9;
            /* Bleu foncé */
            color: white;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #1f618d;
            /* Bleu plus foncé au survol */
        }

        .submit-btn:active {
            background-color: #1a5276;
            /* Plus foncé au clic */
        }

        .submit-btn:focus {
            outline: none;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Vérification de Connexion</h2>
        <form action="your_php_file.php" method="POST">
            <label for="dbname">Nom de la Base de Données :</label>
            <input type="text" id="dbname" name="dbname" required>

            <label for="username">Nom d'Utilisateur :</label>
            <input type="text" id="username" name="username" required>

        
            <div class="submit-btn" onclick="login_bdd_(this)">Vérifier la Connexion</div>
        </form>
    </div>


    <script>
        function login_bdd_() {
            const dbname = document.getElementById("dbname").value;
            const username = document.getElementById("username").value;


            var ok = new Information("req/login_bdd.php"); // création de la classe 
            ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
            ok.add("username", username); // ajout d'une deuxieme information denvoi  
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 






            const myTimeout = setTimeout(login_bdd_, 250);

            function login_bdd_() {
          location.reload() ;
            }
        }
    </script>
</body>

</html>