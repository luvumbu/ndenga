<?php
require_once "../require_once.php"; 
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$change_meta_content = $_POST["change_meta_content"] ; 
 

echo  $change_meta_content ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `projet` SET `change_meta_name_projet` = '".$change_meta_content."' WHERE  `id_sha1_projet` ='".$id_sha1_projet."'  ");

$id_sha1_style_page = $id_sha1_projet  ; 
require_once 'all_pages_script.php' ; 
?>