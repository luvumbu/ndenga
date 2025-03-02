<?php
require_once "require_once.php" ;




 
$_SESSION["id_sha1_projet"] = $_POST["id_sha1_projet"] ;  
$_SESSION["home"] ="" ; 
 
  


 
$id_sha1_projet =  $_POST["id_sha1_projet"]; 
 




echo $id_sha1_projet  ; 
 

$databaseHandler = new DatabaseHandler($dbname, $username);
 

 
    $databaseHandler->action_sql('UPDATE  `projet` SET `date_debut_projet` = ""   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');





 
$_SESSION["id_sha1_projet"] = $id_sha1_projet ;

  /*
$_SESSION["home"] = "";
require_once 'all_pages_script.php' ; 
*/

?>