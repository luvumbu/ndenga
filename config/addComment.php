<?php 
 echo "test  ok " ; 

require_once "require_once.php" ;
 

 echo "test  ok " ; 
 echo "test  ok " ;  echo "test  ok " ; 
 

 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
$time = time().'_'.rand(10,99);
$timestamp_comment_projet = date("Y-m-d H:i:s");


$text_comment_projet = $_POST["text_comment_projet"] ;
$name_comment_projet = $_POST["name_comment_projet"] ; 
$id_sha1_comment_projet = $_POST["id_sha1_comment_projet"] ; 


$databaseHandler->action_sql("INSERT INTO `comment_projet` (text_comment_projet,name_comment_projet) VALUES ('$text_comment_projet','$name_comment_projet')");
 



require_once 'all_pages_script.php' ; 

 
?>