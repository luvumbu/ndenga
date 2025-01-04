 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }

        .card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h2 {
            font-size: 1.5rem;
            color: #333333;
            margin-bottom: 0.5rem;
        }

        .card-content p {
            font-size: 0.9rem;
            color: #555555;
            margin-bottom: 1rem;
        }

        .card-content .meta {
            font-size: 0.8rem;
            color: #888888;
            margin-bottom: 1rem;
        }

        .card-content button {
            background-color: #4caf50;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            text-align: center;
        }

        .card-content button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
        <div class="card-content">
            <h2>Titre de l'article</h2>
            <p>Voici une brève description de l'article qui est attrayante et informative.</p>
            <div class="meta">Publié le : 2024-12-15</div>
            <div class="meta">Catégorie : Technologie</div>
            <button>Lire l'article</button>
        </div>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Placeholder Image">
        <div class="card-content">
            <h2>Un autre titre</h2>
            <p>Ce texte résume l'article en quelques phrases concises et intéressantes.</p>
            <div class="meta">Publié le : 2024-11-20</div>
            <div class="meta">Catégorie : Art</div>
            <button>Lire l'article</button>
        </div>
    </div>
 
