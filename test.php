<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation AsciiConverter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2 {
            color: #2c3e50;
        }
        h1 {
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #3498db;
            margin-top: 20px;
        }
        h3 {
            color: #2980b9;
        }
        code {
            background-color: #ecf0f1;
            padding: 2px 5px;
            border-radius: 3px;
            color: #c0392b;
        }
        pre {
            background-color: #2c3e50;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            color: #ecf0f1;
        }
        .section {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        .note {
            background-color: #e8f6ff;
            border-left: 4px solid #3498db;
            padding: 10px;
            margin: 20px 0;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <h1>Documentation de la classe <code>AsciiConverter</code></h1>

    <div class="section">
        <h2>Introduction</h2>
        <p>
            La classe <code>AsciiConverter</code> permet de convertir une chaîne de caractères en une séquence de valeurs ASCII et vice versa. Elle contient deux méthodes statiques :
        </p>
        <ul>
            <li><code>asciiToString</code> : Convertit une chaîne de valeurs ASCII en une chaîne de caractères.</li>
            <li><code>stringToAscii</code> : Convertit une chaîne de caractères en une séquence de valeurs ASCII.</li>
        </ul>
        <div class="note">
            <strong>Note :</strong> Cette classe est utile pour manipuler des caractères et leurs valeurs ASCII dans des projets PHP.
        </div>
    </div>

    <div class="section">
        <h2>Méthodes</h2>

        <h3><code>asciiToString($asciiString)</code></h3>
        <p>
            Cette méthode prend une chaîne de valeurs ASCII séparées par des virgules et retourne la chaîne de caractères correspondante.
        </p>
        <h4>Paramètres</h4>
        <ul>
            <li><code>$asciiString</code> : Une chaîne de valeurs ASCII séparées par des virgules (ex: <code>"72, 101, 108, 108, 111"</code>).</li>
        </ul>
        <h4>Retour</h4>
        <p>
            Retourne une chaîne de caractères (ex: <code>"Hello"</code>).
        </p>
        <h4>Exemple</h4>
        <pre><code>
$asciiString = "72, 101, 108, 108, 111";
echo AsciiConverter::asciiToString($asciiString); // Affiche "Hello"
        </code></pre>

        <h3><code>stringToAscii($string)</code></h3>
        <p>
            Cette méthode prend une chaîne de caractères et retourne une séquence de valeurs ASCII correspondantes, séparées par des virgules.
        </p>
        <h4>Paramètres</h4>
        <ul>
            <li><code>$string</code> : Une chaîne de caractères (ex: <code>"Hello"</code>).</li>
        </ul>
        <h4>Retour</h4>
        <p>
            Retourne une chaîne de valeurs ASCII séparées par des virgules (ex: <code>"72,101,108,108,111"</code>).
        </p>
        <h4>Exemple</h4>
        <pre><code>
$string = "Hello";
echo AsciiConverter::stringToAscii($string); // Affiche "72,101,108,108,111"
        </code></pre>
    </div>

    <div class="section">
        <h2>Exemple complet</h2>
        <p>
            Voici un exemple complet d'utilisation de la classe <code>AsciiConverter</code> :
        </p>
        <pre><code>
&lt;?php

class AsciiConverter
{
    public static function asciiToString($asciiString)
    {
        $asciiArray = array_map('trim', explode(',', $asciiString));
        $string = '';
        foreach ($asciiArray as $ascii) {
            if (is_numeric($ascii)) {
                $string .= chr((int)$ascii);
            }
        }
        return $string;
    }

    public static function stringToAscii($string)
    {
        $asciiArray = [];
        for ($i = 0; $i < strlen($string); $i++) {
            $asciiArray[] = ord($string[$i]);
        }
        return implode(',', $asciiArray);
    }
}

// Exemple d'utilisation
$asciiString = "72, 101, 108, 108, 111";
$string = "Hello";

echo AsciiConverter::asciiToString($asciiString); // Affiche "Hello"
echo "&lt;br&gt;";
echo AsciiConverter::stringToAscii($string); // Affiche "72,101,108,108,111"
        </code></pre>
    </div>

    <div class="section">
        <h2>Conclusion</h2>
        <p>
            La classe <code>AsciiConverter</code> est un outil simple et efficace pour convertir des chaînes de caractères en valeurs ASCII et inversement. Elle peut être utilisée dans des projets nécessitant des manipulations de caractères et de codes ASCII.
        </p>
        <div class="note">
            <strong>Astuce :</strong> Utilise cette classe pour encoder ou décoder des messages en ASCII dans vos applications PHP.
        </div>
    </div>

</body>
</html>