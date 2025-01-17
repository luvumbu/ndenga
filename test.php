<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog avec Section Commentaires</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .comment-section {
            margin-top: 30px;
        }
        .comment-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }
        .comment-form input, .comment-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .comment-form button {
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .comment-form button:hover {
            background-color: #45a049;
        }
        .comments {
            margin-top: 20px;
        }
        .comment {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .comment h4 {
            margin: 0;
            color: #4CAF50;
        }
        .comment p {
            margin: 5px 0 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur mon blog</h1>
    </header>
    <main>
        <article>
            <h2>Article Exemple</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vivamus lacinia odio vitae vestibulum vestibulum. 
                Cras venenatis euismod malesuada. 
            </p>
        </article>

        <section class="comment-section">
            <h3>Commentaires</h3>
            <div class="comments" id="comments">
                <!-- Les commentaires s'afficheront ici -->
            </div>
            <form class="comment-form" id="commentForm">
                <input type="text" id="name" placeholder="Votre nom" required>
                <textarea id="message" rows="5" placeholder="Votre commentaire" required></textarea>
                <button type="submit">Ajouter un commentaire</button>
            </form>
        </section>
    </main>

    <script>
        const commentForm = document.getElementById('commentForm');
        const commentsDiv = document.getElementById('comments');

        commentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const message = document.getElementById('message').value.trim();

            if (name && message) {
                // Créer un nouvel élément de commentaire
                const comment = document.createElement('div');
                comment.classList.add('comment');
                comment.innerHTML = `
                    <h4>${name}</h4>
                    <p>${message}</p>
                `;

                // Ajouter le commentaire à la liste des commentaires
                commentsDiv.appendChild(comment);

                // Réinitialiser le formulaire
                commentForm.reset();
            } else {
                alert('Veuillez remplir tous les champs.');
            }
        });
    </script>
</body>
</html>
