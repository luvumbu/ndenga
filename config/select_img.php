<?php
require_once "require_once.php" ;
 


$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$img_projet_src1 = $_POST["img_projet_src1"] ; 
$img_projet_src = $_POST["img_projet_src1"] ; 

$databaseHandler = new DatabaseHandler($dbname, $username);
 
 

$img_projet_src1 = "../src/img/".$_SESSION["index"][3]."/".$img_projet_src1 ;

$databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src1` = '$img_projet_src1' WHERE `id_sha1_projet` = '$id_sha1_projet' ");

 
//../src/img/1740105192/1740340695.webp
//require_once 'all_pages_script.php' ; 
 



$_SESSION["id_sha1_projet"] = $id_sha1_projet ;
 
require_once 'all_pages_script.php' ; 
?>


      
 
 