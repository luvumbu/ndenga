<?php
require_once '../Class/DatabaseHandler.php'; 
require_once '../Class/dbCheck.php'; 
require_once '../Class/FileHandler.php'; 

$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_user");
$databaseHandler->set_column_names("date_user");

$databaseHandler->set_column_names("id_sha1_user");
$databaseHandler->set_column_names("id_parent_user");
$databaseHandler->set_column_names("description_user");
$databaseHandler->set_column_names("title_user");
$databaseHandler->set_column_names("img_user");
$databaseHandler->set_column_names("nom_user");
$databaseHandler->set_column_names("prenom_user");
$databaseHandler->set_column_names("password_user");
$databaseHandler->set_column_names("email_user");
$databaseHandler->set_column_names("activation_user");
$databaseHandler->set_column_names("date_inscription_user");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table($dbname);
$mainTableName = $dbname ; 
$mainTableName2 = $dbname ;
 require 'auto_exe.php' ; 
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_projet");
$databaseHandler->set_column_names("activation_projet");

$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("id_user_projet");
$databaseHandler->set_column_names("id_sha1_user_projet");
$databaseHandler->set_column_names("id_sha1_projet");
$databaseHandler->set_column_names("color_projet");
$databaseHandler->set_column_names("google_title_projet");
$databaseHandler->set_column_names("level_urgence_projet");


$databaseHandler->set_column_names("change_meta_name_projet");
$databaseHandler->set_column_names("change_meta_content_projet");





$databaseHandler->set_column_names("id_sha1_parent_projet");
$databaseHandler->set_column_names("id_sha1_parent_projet2");
$databaseHandler->set_column_names("cryptage_projet");
$databaseHandler->set_column_names("html_mode_projet_1");
$databaseHandler->set_column_names("html_mode_projet_2");
$databaseHandler->set_column_names("style_pages_projet");
$databaseHandler->set_column_names("name_pages_projet");



$databaseHandler->set_column_names("input_cryptage_projet");
$databaseHandler->set_column_names("name_projet"); 
$databaseHandler->set_column_names("name_extention_projet"); 
$databaseHandler->set_column_names("statue_projet"); 
$databaseHandler->set_column_names("title_projet"); 
$databaseHandler->set_column_names("description_projet"); 
$databaseHandler->set_column_names("password_projet");
$databaseHandler->set_column_names("visibility_1_projet");
$databaseHandler->set_column_names("visibility_2_projet");
$databaseHandler->set_column_names("screen_shoot_projet");

$databaseHandler->set_column_names("img_projet_src1");



$databaseHandler->set_column_names("total_style_pages");
$databaseHandler->set_column_names("total_style_parent_pages");
$databaseHandler->set_column_names("total_style_text_pages");









$databaseHandler->set_column_names("img_projet_src2");
$databaseHandler->set_column_names("img_projet_visibility");
$databaseHandler->set_column_names("group_projet");
$databaseHandler->set_column_names("heure_debut_projet");
$databaseHandler->set_column_names("date_debut_projet");
$databaseHandler->set_column_names("dure_projet");
$databaseHandler->set_column_names("publication_date_j_projet");
$databaseHandler->set_column_names("publication_date_h_projet");
$databaseHandler->set_column_names("shop_projet");
$databaseHandler->set_column_names("date_inscription_projet");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");








$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("projet");
$mainTableName = "projet" ; 
$mainTableName2 = $mainTableName  ;
//require 'auto_exe.php' ; 
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_projet_img_auto");
$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("id_sha1_projet_img");
$databaseHandler->set_column_names("id_projet_img");
$databaseHandler->set_column_names("id_user_projet_img");
$databaseHandler->set_column_names("img_projet_src_img");
$databaseHandler->set_column_names("date_inscription_projet_img");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("projet_img");
$mainTableName = "projet_img" ; 


$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_style_page_auto");
$databaseHandler->set_column_names("id_general");

$databaseHandler->set_column_names("flex_box_1_style_pages");
$databaseHandler->set_column_names("flex_box_2_style_pages");
$databaseHandler->set_column_names("flex_box_3_style_pages");
$databaseHandler->set_column_names("flex_box_4_style_pages");


$databaseHandler->set_column_names("flex_box_5_style_pages");
$databaseHandler->set_column_names("flex_box_6_style_pages");

$databaseHandler->set_column_names("flex_box_7_style_pages");


$databaseHandler->set_column_names("name_style_pages");
$databaseHandler->set_column_names("header_style_pages");
$databaseHandler->set_column_names("total_style_pages");
$databaseHandler->set_column_names("total_style_parent_pages");
$databaseHandler->set_column_names("total_style_text_pages");





$databaseHandler->set_column_names("id_sha1_style_page");
$databaseHandler->set_column_names("id_style_page");
$databaseHandler->set_column_names("id_user_style_page");
$databaseHandler->set_column_names("date_inscription_style_page");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");


$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("style_pages");
$mainTableName = "style_pages" ; 
$mainTableName2 = $mainTableName  ;
//require 'auto_exe.php' ; 
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_visit_user");
$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("id_projet_visit_user");
$databaseHandler->set_column_names("ip1_visit_user");
$databaseHandler->set_column_names("ip2_visit_user");
$databaseHandler->set_column_names("ip3_visit_user");
$databaseHandler->set_column_names("ip4_visit_user");
$databaseHandler->set_column_names("ip5_visit_user");
$databaseHandler->set_column_names("ip6_visit_user");
$databaseHandler->set_column_names("ip7_visit_user");
$databaseHandler->set_column_names("ip8_visit_user");
$databaseHandler->set_column_names("ip9_visit_user");
$databaseHandler->set_column_names("x_visit_user");
$databaseHandler->set_column_names("y_visit_user");
$databaseHandler->set_column_names("click_visit_user");
$databaseHandler->set_column_names("screen_shoot_visit_user");
$databaseHandler->set_column_names("timestamp_visit_user");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("visit_user");
$mainTableName = "visit_user" ; 
$mainTableName2 = $mainTableName  ;
//require 'auto_exe.php' ;
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_option_projet");
$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("start_option_projet");
$databaseHandler->set_column_names("sha1_option_projet");
$databaseHandler->set_column_names("ip1_option_projet");
$databaseHandler->set_column_names("ip2_option_projet");
$databaseHandler->set_column_names("ip3_option_projet");
$databaseHandler->set_column_names("ip4_option_projet");
$databaseHandler->set_column_names("ip5_option_projet");
$databaseHandler->set_column_names("ip6_option_projet");
$databaseHandler->set_column_names("ip7_option_projet");
$databaseHandler->set_column_names("ip8_option_projet");
$databaseHandler->set_column_names("ip9_option_projet");
$databaseHandler->set_column_names("timestamp_option_projet");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("option_projet");
$mainTableName = "option_projet" ; 


 

$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_qr_scan");
$databaseHandler->set_column_names("info_1_qr_scan");

$databaseHandler->set_column_names("info_2_qr_scan");
$databaseHandler->set_column_names("info_3_qr_scan");
$databaseHandler->set_column_names("info_4_qr_scan");
$databaseHandler->set_column_names("info_5_qr_scan");
$databaseHandler->set_column_names("info_6_qr_scan");
$databaseHandler->set_column_names("info_7_qr_scan");
$databaseHandler->set_column_names("current_time_qr_scan");




 
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
 
$databaseHandler->add_table("qr_scan");
 





























 
$mainTableName2 = $mainTableName  ;
//require 'auto_exe.php' ;
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_comment_projet");
$databaseHandler->set_column_names("id_general");

$databaseHandler->set_column_names("id_parent_general");
$databaseHandler->set_column_names("id_sha1_comment_projet");
$databaseHandler->set_column_names("id_user_sha1_comment_projet");

$databaseHandler->set_column_names("start_comment_projet");
$databaseHandler->set_column_names("text_comment_projet");
$databaseHandler->set_column_names("name_comment_projet");
$databaseHandler->set_column_names("sha1_comment_projet");
$databaseHandler->set_column_names("ip1_comment_projet");
$databaseHandler->set_column_names("ip2_comment_projet");
$databaseHandler->set_column_names("ip3_comment_projet");
$databaseHandler->set_column_names("ip4_comment_projet");
$databaseHandler->set_column_names("ip5_comment_projet");
$databaseHandler->set_column_names("ip6_comment_projet");
$databaseHandler->set_column_names("ip7_comment_projet");
$databaseHandler->set_column_names("ip8_comment_projet");
$databaseHandler->set_column_names("ip9_comment_projet");
$databaseHandler->set_column_names("timestamp_comment_projet");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table("comment_projet");
$mainTableName = "comment_projet" ; 
$mainTableName2 = $mainTableName  ;
//require 'auto_exe.php' ;
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_social_media");
$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("id_user_social_media");
$databaseHandler->set_column_names("id_sha1_social_media");
$databaseHandler->set_column_names("name_social_media"); 
$databaseHandler->set_column_names("statue_social_media"); 
$databaseHandler->set_column_names("title_social_media"); 
$databaseHandler->set_column_names("description_social_media"); 
$databaseHandler->set_column_names("password_social_media");
$databaseHandler->set_column_names("visibility_1_social_media");
$databaseHandler->set_column_names("visibility_2_social_media");
$databaseHandler->set_column_names("img_projet_src_social_media");
$databaseHandler->set_column_names("img_projet_visibility_social_media");
$databaseHandler->set_column_names("date_inscription_social_media");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('social_media');
$mainTableName = "social_media" ; 
$mainTableName2 = $mainTableName  ;


/*










*/

//require 'auto_exe.php' ;
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_commentaires");
$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("id_user_commentaires");
$databaseHandler->set_column_names("id_sha1_commentaires");
$databaseHandler->set_column_names("id_sha1_projet_commentaires");
$databaseHandler->set_column_names("name_commentaires"); 
$databaseHandler->set_column_names("statue_commentaires"); 
$databaseHandler->set_column_names("title_commentaires"); 
$databaseHandler->set_column_names("description_commentaires"); 
$databaseHandler->set_column_names("password_commentaires");
$databaseHandler->set_column_names("visibility_1_commentaires");
$databaseHandler->set_column_names("visibility_2_commentaires");
$databaseHandler->set_column_names("img_projet_src_commentaires");
$databaseHandler->set_column_names("img_projet_visibility_commentaires");
$databaseHandler->set_column_names("date_inscription_commentaires");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('commentaires');
$mainTableName = "commentaires" ; 
$mainTableName2 = $mainTableName  ;









//require 'auto_exe.php' ;
$databaseHandler = new DatabaseHandler($dbname,$username); 
$databaseHandler->set_column_names("id_group");
$databaseHandler->set_column_names("id_general");
$databaseHandler->set_column_names("id_user_group");
$databaseHandler->set_column_names("id_sha1_group");
$databaseHandler->set_column_names("name_group"); 
$databaseHandler->set_column_names("statue_group"); 
$databaseHandler->set_column_names("title_group"); 
$databaseHandler->set_column_names("description_group"); 
$databaseHandler->set_column_names("password_group");
$databaseHandler->set_column_names("visibility_1_group");
$databaseHandler->set_column_names("visibility_2_group");
$databaseHandler->set_column_names("img_projet_src_group");
$databaseHandler->set_column_names("img_projet_visibility_group");
$databaseHandler->set_column_names("date_inscription_group");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('group_projet');
$mainTableName = "group_projet" ; 
$mainTableName2 = $mainTableName;
//require 'auto_exe.php' ;
$req_sqlxx = 'SELECT * FROM `'.$dbname.'` WHERE `nom_user`="'.$dbname.'"  AND `password_user` ="'.$username.'" ';
$databaseHandlerxx = new DatabaseHandler($dbname, $username);
$databaseHandlerxx->getDataFromTable($req_sqlxx, "nom_user");
?>