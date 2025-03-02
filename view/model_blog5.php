<?php 
$id_sha1_projet =$projet_3[0]['id_sha1_projet'][$b];
 

//var_dump($id_sha1_projet);
 
$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE id_sha1_parent_projet ='$id_sha1_projet'   ";

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
    
    

    $projet_4_ =  [
        "id_projet" =>    $dynamicVariables['id_projet'],
        "activation_projet" =>    $dynamicVariables['activation_projet'],
        "id_general" =>    $dynamicVariables['id_general'],
        "id_user_projet" =>    $dynamicVariables['id_sha1_projet'],
        "id_sha1_user_projet" =>    $dynamicVariables['id_sha1_user_projet'],
        "id_sha1_projet" =>    $dynamicVariables['id_sha1_projet'],
        "id_sha1_parent_projet" =>    $dynamicVariables['id_sha1_parent_projet'],
        "id_sha1_parent_projet2" =>    $dynamicVariables['id_sha1_parent_projet2'],
        "cryptage_projet" =>    $dynamicVariables['cryptage_projet'],
        "input_cryptage_projet" =>    $dynamicVariables['input_cryptage_projet'],
        "name_projet" =>    $dynamicVariables['name_projet'],
        "name_extention_projet" =>    $dynamicVariables['name_extention_projet'],
        "statue_projet" =>    $dynamicVariables['statue_projet'],
        "title_projet" => $title_projet,
        "description_projet" =>$description_projet,
        "password_projet" =>    $dynamicVariables['password_projet'],
        "visibility_1_projet" =>    $dynamicVariables['visibility_1_projet'],
        "visibility_2_projet" =>    $dynamicVariables['visibility_2_projet'],
        "screen_shoot_projet" =>    $dynamicVariables['screen_shoot_projet'],
        "img_projet_src1" =>    $dynamicVariables['img_projet_src1'],
        "img_projet_src2" =>    $dynamicVariables['img_projet_src2'],
        "img_projet_visibility" =>    $dynamicVariables['img_projet_visibility'],
        "group_projet" =>    $dynamicVariables['group_projet'],
        "heure_debut_projet" =>    $dynamicVariables['heure_debut_projet'],
        "date_debut_projet" =>    $dynamicVariables['date_debut_projet'],
        "dure_projet" =>    $dynamicVariables['dure_projet'],
        "publication_date_j_projet" =>    $dynamicVariables['publication_date_j_projet'],
        "publication_date_h_projet" =>    $dynamicVariables['publication_date_h_projet'],
        "shop_projet" =>    $dynamicVariables['shop_projet'],
        "date_inscription_projet" =>    $dynamicVariables['date_inscription_projet']
    ];


 
 
 
}
 



 
 
 
 array_push($projet_4,$projet_4_) ;

 


 
 

?>