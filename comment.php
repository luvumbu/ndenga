<?php


/*
 * Exemple d'utilisation des variables dynamiques
 * Ce script montre comment utiliser la classe `DatabaseHandler` pour manipuler des données
 * d'une table spécifique dans une base de données en générant des variables dynamiques.
 */




// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($username, $dbname);

// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$username` WHERE 1";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($username);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
/*
// Exemple : affichage d'une variable dynamique spécifique
var_dump($dynamicVariables['id_sha1_user']);
var_dump($dynamicVariables['title_user']);
var_dump($dynamicVariables['description_user']);
*/





// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.

/*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */
?>





<style>
    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    textarea {
        width: 100%;
        height: 80px;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    .message {
        background: #e9ecef;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .author {
        font-weight: bold;
    }
</style>




<?php






if (isset($_SESSION["index"])) {
?>

    <div id="demo" title="<?= $id_sha1_projet  ?>" onclick="voir(this)">

        <div class="demo">
            Voir cconversation
        </div>

    </div>


    <h2>Poster votre message</h2>
    <textarea id="messageInput" placeholder="Écrivez votre message..."></textarea>
    <button onclick="addComment(this)" title="<?= $id_sha1_projet  ?>">Envoyer</button>
<?php
}
?>



<script>
    function addComment(_this) {





        messageInput = document.getElementById("messageInput").value;






        var ok = new Information("../config/addComment_.php"); // création de la classe 
        ok.add("id_sha1_comment_projet", _this.title); // ajout de l'information pour lenvoi 
        ok.add("text_comment_projet", messageInput); // ajout d'une deuxieme information denvoi  
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 



        _this.style.display = "none";




        const myTimeout = setTimeout(demo, 1500);

        function demo() {


            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML =
                    this.responseText;
            }
            xhttp.open("GET", "../comment_data.php");
            xhttp.send();



            const myTimeout2 = setTimeout(demo2, 1000);

        }


        function demo2() {
            _this.style.display = "block";
        }



    }

    function voir(_this) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("demo").innerHTML =
                this.responseText;
        }
        xhttp.open("GET", "../comment_data.php");
        xhttp.send();
    }
</script>



<script>
    class Information {
        constructor(link) {
            this.link = link;
            this.identite = new FormData();
            this.req = new XMLHttpRequest();
            this.identite_tab = [];
        }
        info() {
            return this.identite_tab;
        }
        add(info, text) {
            this.identite_tab.push([info, text]);
        }
        push() {
            for (var i = 0; i < this.identite_tab.length; i++) {
                console.log(this.identite_tab[i][1]);
                this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);
            }
            this.req.open("POST", this.link);
            this.req.send(this.identite);
            console.log(this.req);
        }
    }
</script>
<style>
    .demo {
        padding: 15px;
        background-color: #007bff;
        color: white;
        text-align: center;
    }
</style>

</html>