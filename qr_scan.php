<?php

session_start();
header("Access-Control-Allow-Origin: *");
require_once "require_once_all_web.php";

 
 

//require_once 'function/add_ip.php';
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Afficher le nom du fichier actuel
// Utilisation de la méthode split_basename pour séparer par "_"
$separation_url = '__';
$url->split_basename($separation_url);
$id_sha1_projet = $url->get_basename();
 

if(isset($_SESSION["index"])){
   $info_1_qr_scan =  $_SESSION["index"]["3"] ; 
}
else {
    $info_1_qr_scan =  "visiteur"; 

}


 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
$time = time().'_'.rand(10,99);
$timestamp_comment_projet = date("Y-m-d H:i:s");

 
 
$info_2_qr_scan = $ip=$_SERVER['REMOTE_ADDR'];
 
 
$databaseHandler->action_sql("INSERT INTO `qr_scan` (info_1_qr_scan,info_2_qr_scan) VALUES ('$info_1_qr_scan','$info_2_qr_scan')");
 
 





?>


<?php
header("Location: ../blog.php/".$id_sha1_projet);
exit();



 