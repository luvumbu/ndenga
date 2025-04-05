<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";



if (!isset($_SESSION["index"])) {


  /* This will give an error. Note the output
 * above, which is before the header() call */
  header('Location: ../index.php');
  exit;
}





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

$_SESSION["id_sha1_projet"] = $id_sha1_projet;
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  include_once "blog_css.php";





  ?>
  <title><?= $google_title_projet ?></title>
  <?php
  $img_projet_src1 =  $row_projet[0]["img_projet_src1"];


 
  ?>
  <link rel="icon" type="image/x-icon" href="<?= $img_projet_src1 ?>">
</head>


<body>
  <script src="../class/Js.js"></script>


  <?php
  $title_projet = AsciiConverter::asciiToString($row_projet_0[0]["title_projet"]);
  $title_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[0]["title_projet"])));
  $title_projet = str_replace("&gt;", ">",  $title_projet);
  $title_projet = str_replace("&nbsp;", "",  $title_projet);
  $description_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[0]["description_projet"])));
  $description_projet = str_replace("&gt;", ">",  $description_projet);
  $description_projet = str_replace("&nbsp;", "",  $description_projet);

  ?>





  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      max-width: 90%;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
  </head>

  <body>
    <header>




      <div class="display_flex elements">
        <?php

        if (count($row_projet_0) > 4) {
          $i_ = 1;
        } else {
          $i_ = 0;
        }


        for ($i = $i_; $i < count($row_projet_0); $i++) {



          if($i==8){
            break ;
          }

          if ($row_projet_0[$i]["activation_projet"] == "") {





            $title_projet = AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"]);
            $title_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"])));
            $title_projet = str_replace("&gt;", ">",  $title_projet);
            $title_projet = str_replace("&nbsp;", "",  $title_projet);
            $description_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["description_projet"])));
            $description_projet = str_replace("&gt;", ">",  $description_projet);
            $description_projet = str_replace("&nbsp;", "",  $description_projet);



            $id_projet = $row_projet_0[$i]["id_projet"];

        ?>

            <a href="<?= '#' . $id_projet ?>"><?= $title_projet  ?></a>


            <div>

            </div>


        <?php
          }
        }

        ?>

      </div>
    </header>




    <main>

      <?php
      $i = 0;

      $title_projet = AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"]);
      $title_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"])));
      $title_projet = str_replace("&gt;", ">",  $title_projet);
      $title_projet = str_replace("&nbsp;", "",  $title_projet);
      $description_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["description_projet"])));
      $description_projet = str_replace("&gt;", ">",  $description_projet);
      $description_projet = str_replace("&nbsp;", "",  $description_projet);

      $id_sha1_parent_projet = $row_projet_0[$i]["id_sha1_parent_projet"];


      ?>

      <style>
        .title_projet_1 {
          margin-top: 75px;
          text-align: center;
          font-size: 2em;
          margin-bottom: 75px;

        }
      </style>





      <div style="margin-top: 100px;"></div>

      <article>

        <?php

        for ($i = 0; $i < count($row_projet_0); $i++) {




          $title_projet = AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"]);
          $title_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"])));
          $title_projet = str_replace("&gt;", ">",  $title_projet);
          $title_projet = str_replace("&nbsp;", "",  $title_projet);
          $description_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["description_projet"])));
          $description_projet = str_replace("&gt;", ">",  $description_projet);
          $description_projet = str_replace("&nbsp;", "",  $description_projet);

          $id_projet = $row_projet_0[$i]["id_projet"];

          $img_projet_src1 = $row_projet_0[$i]["img_projet_src1"];





          echo "<div class='title_'  >";
          echo $title_projet;
          echo "</div>";

        ?>




          <?php 

          if($img_projet_src1 !=""){
?>
          <a href="<?= $img_projet_src1 ?>">
            <div class="class_img">
              <img src="<?= $img_projet_src1 ?>" alt="" srcset="">

            </div>
          </a>
<?php 
          }


     

          echo "<div class='description_projet_' id='" . $id_projet . "' >";
          echo $description_projet;
          echo "</div>";


     







          $filename = 'all_pages/' . $row_projet_0[$i]["id_sha1_projet"] . ".php";

          if (file_exists($filename)) {



            include  $filename;



            echo "<div class='parent_card_img'>";
            for ($ii = 1; $ii < count($row_projet); $ii++) {










              $title_projet = AsciiConverter::asciiToString($row_projet[$ii]["title_projet"]);
              $title_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet[$ii]["title_projet"])));
              $title_projet = str_replace("&gt;", ">",  $title_projet);
              $title_projet = str_replace("&nbsp;", "",  $title_projet);
              $description_projet = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($row_projet[$ii]["description_projet"])));
              $description_projet = str_replace("&gt;", ">",  $description_projet);
              $description_projet = str_replace("&nbsp;", "",  $description_projet);

              $date_debut_projet =  $row_projet[$ii]["date_debut_projet"];






          ?>

              <div class="card_img">




                <?php

                if ($row_projet[$ii]["img_projet_src1"] != "") {
                ?>

                  <div>
                    <img src="<?= $row_projet[$ii]["img_projet_src1"] ?>" alt="" srcset="">
                  </div>
                <?php
                }


                ?>
                <div>
                  <h1><?= $title_projet  ?></h1>
                </div>
                <a href="<?= $row_projet[$ii]["id_sha1_projet"] ?>">
                  <div class="voir_projet">Voir projet</div>
                </a>


                <div>

                  <?= $description_projet ?>

                </div>
              </div>

            <?php
            }

            echo "</div>";

            ?>




        <?php
          }
        }
        ?>



        <?php




        $id_sha1_user_projet =   $row_projet_0[0]["id_sha1_user_projet"];
        $id_sha1_projet =        $row_projet_0[0]["id_sha1_projet"];
        $id_sha1_parent_projet = $row_projet_0[0]["id_sha1_parent_projet"];



        $row_projet_class = $id_sha1_projet . "__" . $id_sha1_parent_projet . "__ element_add";


   
        ?>


      </article>

      <?php
      include_once "add_element_al_user.php";
      include_once "calendrier.php";
      include_once "comment.php";

      ?>
      <?php
      if ($id_sha1_parent_projet != "") {
      ?>
        <a href="<?= $id_sha1_parent_projet ?>">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/parent-guardian.png" alt="parent-guardian" />
        </a>
      <?php
      }

      ?>
      <a href="../index.php">
        <img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1" />
      </a>

      <?php



      ?>


    </main>


    <style>
      .element_add {
        width: 300px;
        padding: 50px;
        margin: auto;
        border: 1px solid rgba(0, 0, 0, 0.3);
        text-align: center;
        margin-bottom: 75px;
      }
    </style>

    <script>
      function row_projet_class(_this) {
        var element = afficherValeursFormattees2(_this.className, "__");
        alert(element[0]);
      }
    </script>

  </body>

</html>