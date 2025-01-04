<?php 
/*
ajoute information pour parse_sjon
*/

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM $dbname WHERE id_sha1_user ='$id_sha1_user_projet_model_blog2'   ";

$databaseHandler->getListOfTables_Child($dbname);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

$id_sha1_user_array = [
    "id_user" => $databaseHandler->tableList_info2[0],
    "date_user" => $databaseHandler->tableList_info2[1],
    "id_sha1_user" => $databaseHandler->tableList_info2[2],
    "id_parent_user" => $databaseHandler->tableList_info2[3],
    "description_user" => $databaseHandler->tableList_info2[4],
    "title_user" => $databaseHandler->tableList_info2[5],
    "img_user" => $databaseHandler->tableList_info2[6],
    "nom_user" => $databaseHandler->tableList_info2[7],
    "prenom_user" => $databaseHandler->tableList_info2[8],
 
    "email_user" => $databaseHandler->tableList_info2[10],
    "activation_user" => $databaseHandler->tableList_info2[11],
    "date_inscription_user" => $databaseHandler->tableList_info2[12]
];



 

 
?>