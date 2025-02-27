<?php 
require_once "require_once.php" ;
 

 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
$name_comment_projet = $_POST["commentText_1"] ; 

$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$text_comment_projet = $_POST["commentText_1"] ; 
$commentText_2 = $_POST["commentText_2"] ; 

$name_comment_projet = $_POST["commentText_1"] ; 
$text_comment_projet = $_POST["commentText_2"] ; 
 

$id_user_sha1_comment_projet = $_POST["id_user_sha1_comment_projet"] ;
$time = time().'_'.rand(10,99);
$timestamp_comment_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `comment_projet` (id_user_sha1_comment_projet,id_sha1_comment_projet,name_comment_projet,text_comment_projet) VALUES ('$id_user_sha1_comment_projet','$time','$name_comment_projet','$text_comment_projet')");
 



require_once 'all_pages_script.php' ; 

 
?>