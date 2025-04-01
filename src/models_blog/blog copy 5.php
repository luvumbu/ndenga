
<!DOCTYPE html>
<html lang="en">
 
 
  
 
<?php
session_start();
?>

<?php 
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";

?>

<?php
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

 

$style_pages_projet_0 = $row_projet[0]["style_pages_projet"] ;
$row_projet_0  = $row_projet;
$div_page = $row_projet[0];
$div_page_all = $row_projet;
$div_page_child_1_name = array();

for ($i = 0; $i < count($row_projet); $i++) {
  $div_page_child_1_value[$i] = $row_projet[$i];
  $div_page_child_1_name[$i] = $row_projet[$i]["id_sha1_projet"];
}

$style_pages_projet_array = array();
$row_projet_style_value = array() ; 



?>


<head>
<meta charset="UTF-8">
  <?= AsciiConverter::asciiToString($row_projet_0[0]["change_meta_content_projet"]) ?>
  <title><?= AsciiConverter::asciiToString($row_projet_0[0]["title_projet"]) ?></title>

</head>

<body>

  <div class="body_div">
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




    $os = array();


    if (in_array("Irix", $os)) {
      echo "Got Irix";
    }


 

    $div_ = "<div  class='class_1_".$style_pages_projet_0."' >";
    for ($i = 1; $i < count($row_projet_0); $i++) {

      if (!in_array($row_projet_0[$i]["style_pages_projet"], $style_pages_projet_array)) {

        if ($row_projet_0[$i]["style_pages_projet"] != "") {
          array_push($style_pages_projet_array, $row_projet_0[$i]["style_pages_projet"]);
        }
      }



      array_push($entre_0, $apple_1->div_page_child_value[$i]["id_sha1_projet"]);
      $div_ .= "<a href='#" . $row_projet_0[$i]["id_sha1_projet"] . "'>";
      $div_ .= "<div   class='class_1_".$row_projet_0[$i]["style_pages_projet"]."'>";

 
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
      $div_ .= '<img alt="' . removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[0]["title_projet"])) . '" src="' . $row_projet_0[0]["img_projet_src1"] . '" alt="" srcset="">';
    }

    $div_ .= "</div>";


    $div_ .= "<div class='class_1'>";

    if ($row_projet_0[0]["html_mode_projet_2"] == "1") {

      $div_ .= removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[0]["description_projet"]));
    } else {
      $div_ .= AsciiConverter::asciiToString($row_projet_0[0]["description_projet"]);
    }





    $div_ .= "</div>";




 






 require "all_style/1742215263_959.php" ; 

for ($i_style=0; $i_style < count($style_pages_projet_array); $i_style++) { 
   require "all_style/".$style_pages_projet_array[$i_style].".php" ; 
   array_push($row_projet_style_value,$row_projet_style) ; 
}
 



 

   echo "<style>" ; 
for ($i_style=0; $i_style < count($row_projet_style_value); $i_style++) { 
 

  
  echo "\n";

  echo ".class_1_".$row_projet_style_value[$i_style]["id_sha1_style_page"]."\n";
  echo "{\n";
echo AsciiConverter::asciiToString($row_projet_style_value[$i_style]["total_style_pages"]) ; 
echo "\n";

  echo "}" ;

  echo "\n";

  echo ".class_2_".$row_projet_style_value[$i_style]["id_sha1_style_page"]."\n";
  echo "{\n";
echo AsciiConverter::asciiToString($row_projet_style_value[$i_style]["total_style_text_pages"]) ; 
echo "\n";

  echo "}" ;


 

}
echo "</style>" ; 
 
echo $div_;



    /*
  var_dump($apple_1->div_page_child_value()[$i]["id_sha1_projet"]) ; 
  var_dump($apple_1->div_page_child_value()[$i]["id_sha1_parent_projet"]) ; 
*/

    $div_verif_1 = "";




    for ($i = 1; $i < count($row_projet_0); $i++) {


      echo "<div id='" . $row_projet_0[$i]["id_sha1_projet"] . "'>";

      echo "<div>";
      echo removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"]));
      echo "</div>";


      if ($row_projet_0[$i]["img_projet_src1"] != "") {
        echo  "<div>";
        echo '<img alt="' . removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["title_projet"])) . '" src="' . $row_projet_0[$i]["img_projet_src1"] . '" alt="" srcset="">';
        echo "</div>";
      }

      echo "</div>";
      echo "<div>";
      echo removeHtmlTags(AsciiConverter::asciiToString($row_projet_0[$i]["description_projet"]));
      echo "</div>";

      echo "<div>";

      echo "<a  href='" . $row_projet_0[$i]["id_sha1_projet"] . "'>";
      echo "lien de la page ";
      echo "</a>";

      echo "</div>";
    }









    if ($row_projet_0[0]["id_sha1_parent_projet"] != "") {
      echo "<div>";

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


<style>
  body{
    margin: 0;
    padding: 0;
  }
  a{
    text-decoration: none;
  }
</style>


    <div style="margin-bottom: 150px;"></div>
  </div>