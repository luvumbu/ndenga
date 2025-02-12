<?php
require_once "../require_once.php"; 
 


 
 
 
$title_user = $_POST["title_user"]; 
$description_user = $_POST["description_user"]; 
 
 
$id_sha1_user = $_SESSION["index"][3] ;
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `'.$dbname.'` SET `title_user` = "'.$title_user.'" ,`description_user` = "'.$description_user.'"   WHERE  `id_sha1_user` ="' . $id_sha1_user. '" ');
 
?>