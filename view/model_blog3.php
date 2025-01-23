<?php 
/*
ajoute information pour parse_sjon
*/


 
$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM $dbname WHERE id_sha1_user ='$id_sha1_user_projet_info'   ";

$databaseHandler->getListOfTables_Child($dbname);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();

$id_sha1_user_array = [
    "id_user" =>    $dynamicVariables['id_user'] , 
    "date_user" =>    $dynamicVariables['date_user'] , 
    "id_sha1_user" =>    $dynamicVariables['id_sha1_user'] , 
    "id_parent_user" =>    $dynamicVariables['id_parent_user'] , 
    "description_user" =>    $dynamicVariables['description_user'] , 
    "title_user" =>    $dynamicVariables['title_user'] , 
    "img_user" =>    $dynamicVariables['img_user'] , 
    "nom_user" =>    $dynamicVariables['nom_user'] , 
    "prenom_user" =>    $dynamicVariables['prenom_user'] , 
 
    "email_user" =>    $dynamicVariables['email_user'] ,
    "activation_user" =>    $dynamicVariables['activation_user'] ,
    "date_inscription_user" =>    $dynamicVariables['date_inscription_user'] 
];

 
 
 
?>