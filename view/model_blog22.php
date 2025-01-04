<?php 

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet ='$id_sha1_projet'   ";

$databaseHandler->getListOfTables_Child("projet");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

?>