<?php


$path_general1 = "../function/";
$path_general_json = "../function_json/";
$src_general1 = "../Class/";
$src_general2 = "Class/";
$path_bool;

$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getTables($nomBaseDeDonnees);
$databaseHandler->getListOfTables_Child($mainTableName);
$mainTableName = $tables[$a];
$add_file_general0 = "<?php \n";
$add_file_general0 .= <<<'PHP'
require_once "general_start.php";
if(isset($_POST["option0_1"])){ $option0_1 =$_POST["option0_1"]; }
if(isset($_POST["option0_2"])){ $option0_2 =$_POST["option0_2"]; }
if(isset($_POST["option1_1"])){ $option1_1 =$_POST["option1_1"]; }
if(isset($_POST["option1_2"])){ $option1_2 =$_POST["option1_2"]; }
if(isset($_POST["option2_1"])){ $option2_1 =$_POST["option2_1"]; }
if(isset($_POST["option2_2"])){ $option2_2 =$_POST["option2_2"]; }
if(isset($_POST["option3_1"])){ $option3_1 =$_POST["option3_1"]; }
if(isset($_POST["option3_2"])){ $option3_2 =$_POST["option3_2"]; }


if(isset($_POST["option0_1"])){ $_SESSION["option0_1"] =$_POST["option0_1"]; }
if(isset($_POST["option0_2"])){ $_SESSION["option0_2"] =$_POST["option0_2"]; }
if(isset($_POST["option1_1"])){ $_SESSION["option1_1"] =$_POST["option1_1"]; }
if(isset($_POST["option1_2"])){ $_SESSION["option1_2"] =$_POST["option1_2"]; }
if(isset($_POST["option2_1"])){ $_SESSION["option2_1"] =$_POST["option2_1"]; }
if(isset($_POST["option2_2"])){ $_SESSION["option2_2"] =$_POST["option2_2"]; }
if(isset($_POST["option3_1"])){ $_SESSION["option3_1"] =$_POST["option3_1"]; }
if(isset($_POST["option3_2"])){ $_SESSION["option3_2"] =$_POST["option3_2"]; }
 



$servername = "localhost";
$option0_2 = $_POST["option0_2"];
if(isset($_POST["option00"])){
$src_general1 = "../Class/";
$path_bool = 0;
}
else {
$src_general1 = "Class/";
$path_bool = 1;
}
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$databaseHandler = new DatabaseHandler($dbname, $username);
PHP;

$add_file_general1 = $add_file_general0;
$add_file_general1 .= <<<'PHP'
$url = new Give_url();
$url->split_basename('__');
$count_url = count($url->get_elements());
switch ($option0_1) {
case 'add_1':
$option1_2 = htmlspecialchars($option1_2, ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
$databaseHandler->action_sql("INSERT INTO `$option0_2` ($option1_1) VALUES ('$option1_2')");
break;
case 'add_2':
$option1_2 = htmlspecialchars($option1_2, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$option2_2 = htmlspecialchars($option2_2, ENT_QUOTES | ENT_HTML5, 'UTF-8');    
$databaseHandler->action_sql("INSERT INTO `$option0_2` ($option1_1,$option2_1) VALUES ('$option1_2','$option2_2')");
break;
case 'add_3':   
$option1_2 = htmlspecialchars($option1_2, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$option2_2 = htmlspecialchars($option2_2, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$option3_2 = htmlspecialchars($option3_2, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$databaseHandler->action_sql("INSERT INTO `$option0_2` ($option1_1,$option2_1,$option3_1) VALUES ('$option1_2','$option2_2','$option3_2')");
break;
case 'remove_1':
$databaseHandler->action_sql("DELETE FROM  `$option0_2` WHERE   `$option1_1` = '$option1_2'");
break;
case 'update_1':
$option2_2 = htmlspecialchars($option2_2, ENT_QUOTES | ENT_HTML5, 'UTF-8');
 $databaseHandler->action_sql("UPDATE  `$option0_2` SET `$option2_1` = '$option2_2'   WHERE  `$option1_1` ='$option1_2'");
break;
}
switch ($count_url) {
case '3':
$url_info = $url->get_elements();
$option0_1 = $url_info[0];
$option1_1 = $url_info[1];
$option1_2 = $url_info[2];
$nom_table = $dbname;
$req_sql = "SELECT * FROM `$nom_table` WHERE $option1_1 = $option1_2";
$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
break;
case '5':
$url_info = $url->get_elements();
$option0_1 = $url_info[0];
$option1_1 = $url_info[1];
$option1_2 = $url_info[2];
$option2_1 = $url_info[3];
$option2_2 = $url_info[4];
$nom_table = $dbname;
$req_sql = "SELECT * FROM `$nom_table` WHERE $option1_1 = '$option1_2' AND $option2_1 = '$option2_2'";
$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
break;
}
?>
PHP;

$filePath =  $path_general1 . "/general.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $add_file_general1, $source_file_array);
$fileHandler->processFile();
$add_file_general2 = <<<'PHP'
<?php 
require_once "general_start.php";
$servername = "localhost";
$src_general1 = "Class/" ;
require_once $src_general1."dbCheck.php";
require_once $src_general1."Give_url.php";
require_once $src_general1."DatabaseHandler.php";
require_once $src_general1."AsciiConverter.php";
$databaseHandler = new DatabaseHandler($dbname, $username);
$option0_1 =$_SESSION["option0_1"];
$option0_2 =$_SESSION["option0_2"];
$option1_1 =$_SESSION["option1_1"];
$option1_2 =$_SESSION["option1_2"];
$option2_1 =$_SESSION["option2_1"];
$option2_2 =$_SESSION["option2_2"];
$option3_1 =$_SESSION["option3_1"];
$option3_2 =$_SESSION["option3_2"];
switch ($option0_1) {
case "1":
$nom_table = $dbname;
$req_sql = "SELECT * FROM `$option0_2` WHERE $option1_1 = '$option1_2'";
$databaseHandler->getListOfTables_Child($option0_2);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
break;
case "2":
$nom_table = $dbname;
$req_sql = "SELECT * FROM `$nom_table` WHERE $option1_1 = '$option1_2' AND $option2_1 = '$option2_2'";
$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
break;
}
?>
PHP;

$filePath =  $path_general1 . "/general_end.php";
$source_file_array = [];
$fileHandler = new FileHandler($filePath, $add_file_general2, $source_file_array);
$fileHandler->processFile();
?>
