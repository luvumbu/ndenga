<?php

require_once "require_once.php";

$name_style_pages =  $_POST["name_style_pages"];
$header_style_pages =  $_POST["header_style_pages"];
$total_style_pages =  $_POST["total_style_pages"];
$total_style_text_pages =  $_POST["total_style_text_pages"];
$total_style_parent_pages =  $_POST["total_style_parent_pages"];
$id_sha1_style_page = $_POST["id_sha1_style_page"] ; 

$id_sha1_user_projet = $_SESSION["index"][3] ; 
 
 

$name_style_pages = extraireAlphabetique($name_style_pages);
$total_style_pages = AsciiConverter::stringToAscii($total_style_pages); 
$header_style_pages = AsciiConverter::stringToAscii($header_style_pages); 
$total_style_parent_pages =AsciiConverter::stringToAscii($total_style_parent_pages); 
$total_style_text_pages =AsciiConverter::stringToAscii($total_style_text_pages); 

 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
 
$databaseHandler->action_sql('UPDATE  `style_pages` SET `name_style_pages` = "'.$name_style_pages.'" ,`header_style_pages` = "'.$header_style_pages.'" , `total_style_pages` = "'.$total_style_pages.'" , `total_style_text_pages` = "'.$total_style_text_pages.'" , `total_style_parent_pages` = "'.$total_style_parent_pages.'"   WHERE  `id_sha1_style_page` ="'.$id_sha1_style_page.'" ');


require_once "all_pages_script_style.php" ; 
 
