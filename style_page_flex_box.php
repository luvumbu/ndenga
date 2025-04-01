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
 
var_dump($id_sha1_projet) ; 
 
$_SESSION["style_pages"] = $id_sha1_projet ; 

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM style_pages WHERE `id_sha1_style_page` ='$id_sha1_projet'  ";

$databaseHandler->getListOfTables_Child("style_pages");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
$name_style_pages_ = $dynamicVariables['name_style_pages'];
$id_user_style_page_ = $dynamicVariables['id_user_style_page'][0];
 


 



if(count($name_style_pages_)>0){



  if($id_user_style_page_==$_SESSION["index"][3]){
     include_once 'style_page_flex_box_page.php';
  }

}
 



?>
 
 <script>
  class Information {
    constructor(link) {
        this.link = link;
        this.identite = new FormData();
        this.req = new XMLHttpRequest();
        this.identite_tab = [
        ];
    }
    info() {
        return this.identite_tab; 
    }
    add(info, text){
        this.identite_tab.push([info, text]); 
    }
    push(){
        for(var i = 0 ; i < this.identite_tab.length ; i++){
            console.log(this.identite_tab[i][1]);
            this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
        }		
        this.req.open("POST",this.link);
        this.req.send(this.identite);
        console.log(this.req);	 
    }
}
 </script>