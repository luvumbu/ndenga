<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Poster un message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

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
</head>

<div id="demo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis voluptatibus itaque, excepturi beatae aliquid iure quisquam tempora aut omnis repellat autem.
Illo magnam itaque quis commodi, neque laudantium perspiciatis? Ab.</div>
    <div class="container">

        <div id="messages">
            <h3>Messages :</h3>
            <div class="message">
                <p class="author">Alice :</p>
                <p>J'adore ce blog ! 😊</p>
            </div>
            <div class="message">
                <p class="author">Bob :</p>
                <p>Super article, merci pour le partage.</p>
            </div>
        </div>



        <h2>Poster votre message</h2>
        <textarea id="messageInput" placeholder="Écrivez votre message..."></textarea>
        <button onclick="posterMessage()">Envoyer</button>
    </div>


    <script>
        function posterMessage() {
            let messageText = document.getElementById("messageInput").value;
            if (messageText.trim() === "") {
                alert("Veuillez écrire un message avant d'envoyer.");
                return;
            }

            let messageDiv = document.createElement("div");
            messageDiv.classList.add("message");
            messageDiv.innerHTML = `<p class="author">Vous :</p><p>${messageText}</p>`;
            document.getElementById("messages").appendChild(messageDiv);

            document.getElementById("messageInput").value = "";
        }



    </script>
</body>

</html>