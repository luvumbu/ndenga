<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";

function renderMathML($mathml)
{
  // Utiliser DOMDocument pour parser le contenu et le convertir
  $doc = new DOMDocument();
  $doc->loadXML($mathml);
  // Créer un string contenant le MathML
  return $doc->saveXML($doc->documentElement);
}

function removeHtmlTags($input)
{
  return strip_tags($input);
}

//require_once 'function/add_ip.php';
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
// Utilisation de la méthode split_basename pour séparer par "_"
$separation_url = '__';
$url->split_basename($separation_url);
$id_sha1_projet = $url->get_basename();
$all_pages = "all_pages/" . $id_sha1_projet . ".php";
require_once   $all_pages;

$google_title_projet = AsciiConverter::asciiToString($row_projet[0]["google_title_projet"]);
$change_meta_name_projet = AsciiConverter::asciiToString($row_projet[0]["change_meta_name_projet"]);
$change_meta_content_projet = AsciiConverter::asciiToString($row_projet[0]["change_meta_content_projet"]);
$row_projet_0  = $row_projet;
$div_page = $row_projet[0];
$div_page_all = $row_projet;
$div_page_child_1_name = array();

for ($i = 0; $i < count($row_projet); $i++) {
  $div_page_child_1_value[$i] = $row_projet[$i];
  $div_page_child_1_name[$i] = $row_projet[$i]["id_sha1_projet"];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $google_title_projet ?></title>


  <style>
    /* Scrollbar */
    ::-webkit-scrollbar {
      width: 12px;
    }

    ::-webkit-scrollbar-track {
      background: #3a2f2f;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background: #d4af37;
      border-radius: 10px;
    }

    /* Effet Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    .lien_page2 {
      background-color: #d4af37;
      width: 300px;
      text-align: center;
      margin-top: 25px;
      margin-top: 50px;
      padding: 20px;
      color: white;
    }

    .lien_page2 a {
      color: white;
    }

    .class_2 {
      display: flex;
      justify-content: space-around;

      border-left: 0;
      border-right: 0;
      background-color: #1d2939;
      color: white;
      font-family: "Emblema One", system-ui;


    }

    .class_4 {


      margin-bottom: 50px;
      text-align: center;
      padding: 20px;
      margin-top: 25px;
      margin-top: 50px;

      font-family: "Emblema One", system-ui;
      font-weight: 400;
      font-style: normal;



    }

    .class_2 a {
      color: white;
    }

    .class_2 div {
      padding: 15px;
    }

    .class_2 div:hover {
      background-color: black;
      color: #ffff;
    }

    a {

      text-decoration: none;
    }

    .class_5 {
      text-align: justify;
      width: 80%;
      margin: auto;
    }

    .class_0 {
      padding: 100px;
      text-align: center;
      font-size: 2.3em;
      font-family: "Emblema One", system-ui;

    }

    .src_img {
      margin: auto;
      width: 400px;
      margin-bottom: 50px;
    }

    .src_img img {
      width: 100%;
    }

    .lien_page {

      color: white;
      width: 80%;
      text-align: center;
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 20px;
      margin-left: 25px;
      margin: auto;

    }

    .lien_page a {

      color: white;
      background-color: #1d2939;

      float: left;
      padding: 15px;

    }

    
    textarea {
        width: 100%;
        height: 80px;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: auto;
        padding: 20px;
    }

    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        float: center;
        width: 40%;
        margin: auto;
        margin-top: 25px;
    }

    button:hover {
        background-color: #218838;
    }

    .comment-section {
        margin-top: 20px;

    }

    .comment {
        background: white;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
        border-left: 4px solid #28a745;
    }

    .comment-section_2:hover {
        cursor: pointer;
        background-color: #218838;

    }

    .comment-section_2 {
        background-color: #28a745;
        width: 60%;
        margin: auto;
        padding: 15px;
        color: white;
    }

    .addComment {
        width: 80%;
        margin: auto;
        margin-top: 151px;
        max-height: 300px;
        overflow-y: scroll;
    }

    .author {
        font-weight: bold;
    }
  </style>
</head>

<body>
  <script src="../class/Js.js"></script>
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
  <script>
    function addComment(this_) {

      text_comment_projet = document.getElementById("text_comment_projet").value;
      id_sha1_comment_projet = this_.className;

      this_.style.display = "none";




      var ok = new Information("../config/addComment_.php"); // création de la classe 

      ok.add("id_sha1_comment_projet", id_sha1_comment_projet); // ajout de l'information pour lenvoi 
      ok.add("text_comment_projet", text_comment_projet); // ajout de l'information pour lenvoi 



      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
      document.getElementById("text_comment_projet").value = "";



      const myTimeout = setTimeout(myGreeting, 600);

      function myGreeting() {
        this_.style.display = "block";

        location.reload(); 


      }





    }
  </script>
  <?php

  $body_page = $div_page_child_1_value[0];
  $title_projet_body =  AsciiConverter::asciiToString($body_page["title_projet"]); // Affiche "Hello"
  $description_projet_body =  AsciiConverter::asciiToString($body_page["description_projet"]); // Affiche "Hello"
  // Vérifier que `$div_page_child_1_name` est défini avant d'instancier `Div_page`
  $apple_1 = new Div_page($div_page_child_1_name);
  $apple_2 = new Div_page($apple_1->div_page_child_name());
  // var_dump($apple_2 ->div_page_child_name()) ; 
  $apple_3 = new Div_page($apple_2->div_page_child_name());
  // var_dump($apple_3 ->div_page_child_name()) ; 
  $apple_4 = new Div_page($apple_3->div_page_child_name());
  // var_dump($apple_4 ->div_page_child_name()) ; 
  $apple_5 = new Div_page($apple_4->div_page_child_name());
  // var_dump($apple_5 ->div_page_child_name()) ; 
  $apple_6 = new Div_page($apple_5->div_page_child_name());
  // var_dump($apple_6->div_page_child_name()) ;  
  $apple_7 = new Div_page($apple_6->div_page_child_name());
  // var_dump($apple_7->div_page_child_name()) ;  
  //var_dump(  $apple_1->div_page_child_value()) ; //
  $entre_0 = array();

  $div_ = "<div class='class_2'>";
  for ($i = 1; $i < count($row_projet_0); $i++) {
    array_push($entre_0, $apple_1->div_page_child_value[$i]["id_sha1_projet"]);
    $div_ .= "<a href='#" . $row_projet_0[$i]["id_sha1_projet"] . "'>";
    $div_ .= "<div class='class_3'>";
    $div_ .= removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"]));
    $div_ .= "</div>";
    $div_ .= "</a>";
  }
  $div_ .= "</div>";
  $div_ .= "<div class='class_0'>";

  if ($row_projet_0[0]["html_mode_projet_1"] == "1") {
    $div_ .= removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[0]["title_projet"]));
  } else {
    $div_ .= AsciiConverter::asciiToString($row_projet_0[0]["title_projet"]);
  }
  $div_ .= "</div>";
  $div_ .= "<div class='src_img'>";

  if ($row_projet_0[0]["img_projet_src1"] != "") {
    $div_ .= '<img src="' . $row_projet_0[0]["img_projet_src1"] . '" alt="" srcset="">';
  }

  $div_ .= "</div>";
  $div_ .= "<div class='class_1'>";

  if ($row_projet_0[0]["html_mode_projet_2"] == "1") {

    $des = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[0]["description_projet"])));
    $des = str_replace("&gt;", ">",  $des);
    $des = str_replace("&nbsp;", "",  $des);
    $div_ .=  $des;
  } else {
    $div_ .= AsciiConverter::asciiToString($row_projet_0[0]["description_projet"]);
  }

  $div_ .= "</div>";

  $entre_1 = array();
  $div_page_child_name_array = array();
  /*
  var_dump($apple_1->div_page_child_value()[$i]["id_sha1_projet"]) ; 
  var_dump($apple_1->div_page_child_value()[$i]["id_sha1_parent_projet"]) ; 
*/

  for ($i = 1; $i < count($row_projet_0); $i++) {


    $div_  .= "<div id='" . $row_projet_0[$i]["id_sha1_projet"] . "'>";

    $div_  .= "<div class='class_4'>";
    $div_  .= removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"]));

    $div_ .=  "</div>";


    if ($row_projet_0[$i]["img_projet_src1"] != "") {
      $div_ .=   "<div class='src_img'>";
      $div_ .=  '<img src="' . $row_projet_0[$i]["img_projet_src1"] . '" alt="" srcset="">';
      $div_ .=  "</div>";
    }

    $div_ .=  "</div>";
    $div_ .=  "<div class='class_5'>";
    //
    $desx = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["description_projet"])));
    $desx = str_replace("&gt;", ">",  $desx);
    $desx = str_replace("&nbsp;", "",  $desx);

    $div_ .=  $desx;








    $div_ .= "</div>";

    $div_ .= "<div class='lien_page'>";

    $div_ .= "<a  href='" . $row_projet_0[$i]["id_sha1_projet"] . "'>";
    $div_ .= "lien de la page ";
    $div_ .= "</a>";

    $div_ .= "</div>";
  }



?>

<?php


  if ($row_projet_0[0]["visibility_1_projet"] == "1") {
    echo $div_;
    require_once "comms_html.php";
  } else {
  ?>
    <img style="width: 100%;" src="https://www.emaginance.com/wp-content/uploads/2018/05/404-not-found-error.jpg" alt="" srcset="">
  <?php
  }

  ?>

<div class="addComment">
    <h2>Ajoutez un commentaire</h2>
    <textarea id="text_comment_projet" placeholder="Écrivez votre commentaire..."></textarea>
    <div class="comment-section_2">
      <div class="<?= $id_sha1_projet ?>" onclick="addComment(this)">Publier</div>
    </div>
    <div class="comment-section" id="commentSection"></div>
  </div>



  <?php







  if ($row_projet_0[0]["id_sha1_parent_projet"] != "") {
    echo "???????????????????";
    echo "<div class='lien_page2'>";
    echo "<a  href='" . $row_projet_0[0]["id_sha1_parent_projet"] . "'>";
    echo "Page principal";
    echo "</a>";
    echo "</div>";
  } else {

  ?>

    <a href="../index.php" style="margin-top: 50;">
      <img width="50" height="50" src="https://img.icons8.com/ios/50/settings.png" alt="settings" />
    </a>
  <?php
  }
  ?>



  <div style="margin-bottom: 150px;"></div>

  <?php

  //require_once "acss_".rand(1,6).".php" ; 
  ?>










  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Emblema+One&family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Emblema+One&family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Emblema+One&family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Emblema+One&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Dancing+Script:wght@400..700&family=Emblema+One&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathJax - Intégrales et Décimales</title>
    <script type="text/javascript" async
      src="https://polyfill.io/v3/polyfill.min.js?features=es6">
    </script>
    <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.2/es5/tex-mml-chtml.js">
    </script>
  </head>





  
