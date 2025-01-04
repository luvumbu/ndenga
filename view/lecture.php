<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
require_once '../Class/AsciiConverter.php';
require_once '../Class/Give_url.php';

$url = new Give_url();
$URL = $url->get_basename();

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_projet ='$URL'";

$databaseHandler->getListOfTables_Child("projet");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

$description_projet__ = $dynamicVariables['description_projet'];


$id_sha1_projet__ = $dynamicVariables['id_sha1_projet'];

$title_projet__ = $dynamicVariables['title_projet'];

$img_projet_src1__ = $dynamicVariables['img_projet_src1'];






require_once '../function/add_ip.php';










$databaseHandler_ = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet ='$URL'";

$databaseHandler_->getListOfTables_Child("projet");
$databaseHandler_->getDataFromTable2X($req_sql);
$databaseHandler_->get_dynamicVariables();

$description_projet__child = $dynamicVariables['description_projet'];


$id_sha1_projet__child = $dynamicVariables['id_sha1_projet'];

$title_projet__child = $dynamicVariables['title_projet'];

$img_projet_src1__child = $dynamicVariables['img_projet_src1'];






$kkount = count($id_sha1_projet__child);


?>

<head>

    <title> <?php echo AsciiConverter::asciiToString($title_projet__[0]); ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        textarea {
            width: 100%;
            height: 150px;
            margin: 10px 0;
            padding: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #cleanedText {
            margin: 20px 0;
            padding: 10px;
            background: #f5f5f5;
            border: 1px solid #ddd;
        }

        .settings {
            margin: 15px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .settings label {
            margin-right: 10px;
        }

        select,
        input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>



    <h1><?php echo AsciiConverter::asciiToString($title_projet__[0]); ?></h1>


    <div class="img_grand">
        <img src="<?= '../' . $img_projet_src1__[0]  ?>" alt="">
    </div>
    <textarea style="display: none;" id="textToRead" placeholder="Collez votre texte HTML ici...">
        <?php echo AsciiConverter::asciiToString($description_projet__[0]); ?>
    </textarea>

    <div class="settings">
        <label>Voix : </label>
        <select id="voiceSelect"></select>

        <label>Vitesse : </label>
        <input type="range" id="rate" min="0.5" max="2" value="1.4" step="0.1">
        <span id="rateValue">1.4</span>

        <label>Hauteur : </label>
        <input type="range" id="pitch" min="0.5" max="2" value="1" step="0.1">
        <span id="pitchValue">1</span>
    </div>

    <div id="cleanedText"></div>

    <div id="controls">
        <button onclick="speak()">Lire</button>
        <button onclick="pause()">Pause</button>
        <button onclick="stop()">Stop</button>
    </div>

    <script>
        const synth = window.speechSynthesis;
        let utterance = null;
        const voiceSelect = document.getElementById('voiceSelect');
        const rateInput = document.getElementById('rate');
        const pitchInput = document.getElementById('pitch');
        const rateValue = document.getElementById('rateValue');
        const pitchValue = document.getElementById('pitchValue');

        function stripHtml(html) {
            let temp = document.createElement('div');
            temp.innerHTML = html;

            let text = temp.textContent || temp.innerText;
            text = text.replace(/&nbsp;/g, ' ');
            text = text.replace(/&amp;/g, '&');
            text = text.replace(/&lt;/g, '<');
            text = text.replace(/&gt;/g, '>');
            text = text.replace(/&quot;/g, '"');
            text = text.replace(/\s+/g, ' ').trim();

            return text;
        }

        function cleanAndShow() {
            const input = document.getElementById('textToRead').value;
            const cleanedText = stripHtml(input);
            document.getElementById('cleanedText').textContent = cleanedText;
        }

        // Charger les voix disponibles
        function loadVoices() {

            const voices = synth.getVoices();
            voiceSelect.innerHTML = '';

            // Filtrer pour n'avoir que les voix françaises
            const frenchVoices = voices.filter(voice =>
                voice.lang.startsWith('fr')
            );

            frenchVoices.forEach(voice => {
                const option = document.createElement('option');
                option.value = voice.name;
                option.textContent = `${voice.name} (${voice.lang})`;
                // Sélectionner par défaut une voix masculine si disponible
                if (voice.name.toLowerCase().includes('thomas') ||
                    voice.name.toLowerCase().includes('male') ||
                    voice.name.toLowerCase().includes('homme')) {
                    option.selected = true;
                }
                voiceSelect.appendChild(option);
            });
        }

        // Initialisation au chargement
        const initTimeout = setTimeout(initializeText, 250);

        function initializeText() {
            cleanAndShow();
        }

        // Charger les voix
        loadVoices();
        if (speechSynthesis.onvoiceschanged !== undefined) {
            speechSynthesis.onvoiceschanged = loadVoices;
        }

        // Mise à jour des valeurs affichées
        rateInput.oninput = () => rateValue.textContent = rateInput.value;
        pitchInput.oninput = () => pitchValue.textContent = pitchInput.value;

        function speak() {

            const cleanedDiv = document.getElementById('cleanedText');
            const text = cleanedDiv.textContent || stripHtml(document.getElementById('textToRead').value);

            stop();

            utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'fr-FR';

            const voices = synth.getVoices();
            const selectedVoice = voices.find(voice => voice.name === voiceSelect.value);
            if (selectedVoice) utterance.voice = selectedVoice;

            utterance.rate = parseFloat(rateInput.value);
            utterance.pitch = parseFloat(pitchInput.value);

            synth.speak(utterance);
        }

        function pause() {
            if (synth.speaking) {
                if (synth.paused) {
                    synth.resume();
                } else {
                    synth.pause();
                }
            }
        }

        function stop() {
            synth.cancel();
        }
    </script>

    <a href="../../blog.php/<?= $URL ?>">

    </a>


    <div class="liste_projet" style="margin-top: 75px;">
        <?php

        for ($x = 0; $x < $kkount; $x++) {

        ?>






            <a href="<?= $id_sha1_projet__child[$x]  ?>">


                <div class="liste_projet_img">
                    <p><?php echo AsciiConverter::asciiToString($title_projet__child[$x]); ?> </p>


                    <?php
                    if ($img_projet_src1__child[$x] != "") {
                    ?>
                        <img src="<?= '../' . $img_projet_src1__child[$x] ?>" alt="">

                    <?php
                    } else {
                    ?>
                        <img src="../../src/img/1735162964.jpeg" alt="" srcset="">
                    <?php
                    }


                    ?>
                </div>
            </a>

        <?php
        }


        ?>
    </div>
</body>


<style>
    .img_grand {
        max-width: 80%;
        margin: auto;

    }

    .img_grand img {
        width: 100%;
    }

    h1 {
        text-align: center;
    }

    .liste_projet_img {
        width: 100px;
        margin: auto;
    }

    .liste_projet_img img {
        width: 100%;

    }

    .liste_projet_img {

        width: 300px;
        text-align: center;
    }

    .liste_projet {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    
    }
    .liste_projet div {
        margin: 25px;
    }
</style>

<div style="margin-top: 150px;"></div>

<a href="../../" >
<img width="48" height="48" src="https://img.icons8.com/color/48/all.png" alt="all"/>
</a>
</html>
