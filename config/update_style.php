<?php
require_once "require_once.php" ;

$id_sha1_style_page =$_SESSION["style_pages"] ; 

 

 
$flex_box_1_style_pages = AsciiConverter::stringToAscii($_POST["flex_box_1_style_pages"] ); 
$flex_box_2_style_pages = AsciiConverter::stringToAscii($_POST["flex_box_2_style_pages"] ); 
$flex_box_3_style_pages = AsciiConverter::stringToAscii($_POST["flex_box_3_style_pages"] ); 
$flex_box_4_style_pages = AsciiConverter::stringToAscii($_POST["flex_box_4_style_pages"] ); 
$flex_box_5_style_pages = AsciiConverter::stringToAscii($_POST["flex_box_5_style_pages"] ); 

 
 
 
 

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `style_pages` SET `flex_box_1_style_pages` = "'.$flex_box_1_style_pages.'"   WHERE  `id_sha1_style_page` ="'.$id_sha1_style_page.'" ');
$databaseHandler->action_sql('UPDATE  `style_pages` SET `flex_box_2_style_pages` = "'.$flex_box_2_style_pages.'"   WHERE  `id_sha1_style_page` ="'.$id_sha1_style_page.'" ');
$databaseHandler->action_sql('UPDATE  `style_pages` SET `flex_box_3_style_pages` = "'.$flex_box_3_style_pages.'"   WHERE  `id_sha1_style_page` ="'.$id_sha1_style_page.'" ');

$databaseHandler->action_sql('UPDATE  `style_pages` SET `flex_box_4_style_pages` = "'.$flex_box_4_style_pages.'"   WHERE  `id_sha1_style_page` ="'.$id_sha1_style_page.'" ');
$databaseHandler->action_sql('UPDATE  `style_pages` SET `flex_box_5_style_pages` = "'.$flex_box_5_style_pages.'"   WHERE  `id_sha1_style_page` ="'.$id_sha1_style_page.'" ');
 











require_once "all_pages_script_style.php" ; 
 

?>