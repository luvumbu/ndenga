<?php 

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet ='$id_sha1_projet'  AND visibility_1_projet !='' AND activation_projet =''  ";
$databaseHandler->getListOfTables_Child("projet");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables(); 





if($databaseHandler->tableList_info2[0]!=null) {

    $title_projet=array();
 
    $kount = count($databaseHandler->tableList_info2[13]) ;
    for($a = 0 ; $a <$kount ; $a++) {
        array_push($title_projet,AsciiConverter::asciiToString($databaseHandler->tableList_info2[13][$a])) ;
    
    }
    
    
    $description_projet=array();
     
    $kount = count($databaseHandler->tableList_info2[13]) ;
    for($a = 0 ; $a <$kount ; $a++) {
        array_push($description_projet,AsciiConverter::asciiToString($databaseHandler->tableList_info2[14][$a])) ;
    
    }
     


 
    $title_projet=array(); 
    $kount = count($databaseHandler->tableList_info2[13]) ;
    for($a = 0 ; $a <$kount ; $a++) {
        array_push($title_projet,AsciiConverter::asciiToString($databaseHandler->tableList_info2[13][$a])) ;
    }
    
    $description_projet=array();
    $kount = count($databaseHandler->tableList_info2[13]) ;
    for($a = 0 ; $a <$kount ; $a++) {
        array_push($description_projet,AsciiConverter::asciiToString($databaseHandler->tableList_info2[14][$a])) ;
    }
    
    
    $projet_2 =  [
        "id_projet" => $databaseHandler->tableList_info2[0],
        "activation_projet" => $databaseHandler->tableList_info2[1],
        "id_general" => $databaseHandler->tableList_info2[2],
        "id_user_projet" => $databaseHandler->tableList_info2[3],
        "id_sha1_user_projet" => $databaseHandler->tableList_info2[4],
        "id_sha1_projet" => $databaseHandler->tableList_info2[5],
        "id_sha1_parent_projet" => $databaseHandler->tableList_info2[6],
        "id_sha1_parent_projet2" => $databaseHandler->tableList_info2[7],
        "cryptage_projet" => $databaseHandler->tableList_info2[8],
        "input_cryptage_projet" => $databaseHandler->tableList_info2[9],
        "name_projet" => $databaseHandler->tableList_info2[10],
        "name_extention_projet" => $databaseHandler->tableList_info2[11],
        "statue_projet" => $databaseHandler->tableList_info2[12],
        "title_projet" => $title_projet,
        "description_projet" =>$description_projet,
        "password_projet" => $databaseHandler->tableList_info2[15],
        "visibility_1_projet" => $databaseHandler->tableList_info2[16],
        "visibility_2_projet" => $databaseHandler->tableList_info2[17],
        "screen_shoot_projet" => $databaseHandler->tableList_info2[18],
        "img_projet_src1" => $databaseHandler->tableList_info2[19],
        "img_projet_src2" => $databaseHandler->tableList_info2[20],
        "img_projet_visibility" => $databaseHandler->tableList_info2[21],
        "group_projet" => $databaseHandler->tableList_info2[22],
        "heure_debut_projet" => $databaseHandler->tableList_info2[23],
        "date_debut_projet" => $databaseHandler->tableList_info2[24],
        "dure_projet" => $databaseHandler->tableList_info2[25],
        "publication_date_j_projet" => $databaseHandler->tableList_info2[26],
        "publication_date_h_projet" => $databaseHandler->tableList_info2[27],
        "shop_projet" => $databaseHandler->tableList_info2[28],
        "date_inscription_projet" => $databaseHandler->tableList_info2[29]
    ];




 
 
}
 
 


?>