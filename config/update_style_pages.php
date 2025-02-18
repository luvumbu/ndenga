<?php

require_once "require_once.php" ; 
 
echo "UPdate"  ; 

$name_style_pages =  $_POST["name_style_pages"] ;  // ok

$name_style_pages = extraireAlphabetique($name_style_pages);


$total_style_pages =  $_POST["total_style_pages"] ; 


$id_sha1_style_page = $_POST["id_sha1_style_page"] ;  // ok 

$header_style_pages = $_POST["header_style_pages"] ; // ok

$header_style_pages =AsciiConverter::stringToAscii($header_style_pages);
$total_style_pages =AsciiConverter::stringToAscii($total_style_pages);
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 

$databaseHandler->action_sql( "UPDATE  `style_pages` SET `name_style_pages` = '$name_style_pages',`total_style_pages` = '$total_style_pages' ,`header_style_pages` = '$header_style_pages'   WHERE  `id_sha1_style_page` ='$id_sha1_style_page'  ");



require_once "all_pages_script_style.php" ; 
 
?>