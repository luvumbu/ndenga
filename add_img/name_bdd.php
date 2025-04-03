moi<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 




 
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
require_once '../Class/redimensionnerImageLargeurMax.php';

 

$databaseHandler = new DatabaseHandler($dbname, $username);
$name_extention_projet = $_SESSION["name_extention_projet"];
$id_sha1_projet = $_SESSION["id_sha1_projet"];
$img_projet_src1 = $_SESSION["file_data1"];
$img_projet_src2 = $_SESSION["file_data2"];


$x = $_SESSION["index"][3];
if (isset($_SESSION["img_2"])) {
    $databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET   `img_user`="' . $img_projet_src1 . '" WHERE `id_sha1_user` = "' . $x . '"');
} else {
    $databaseHandler->action_sql('UPDATE  `projet` SET   `img_projet_src1`="' . $img_projet_src1 . '" WHERE `id_sha1_projet` = "' . $id_sha1_projet . '"');

    $databaseHandler->action_sql('UPDATE  `projet` SET   `name_extention_projet`="' . $img_projet_src2 . '" WHERE `id_sha1_projet` = "' . $id_sha1_projet . '"');

    

}






if (isset($_SESSION["img_2"])) {
    unset($_SESSION["img_2"]);
}



if ($_SESSION["home"] == "profil") {
    $databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET   `img_user`="' . $img_projet_src1 . '" WHERE `id_sha1_user` = "' . $id_sha1_projet . '"');
}

 
 
try {
    redimensionnerImageLargeurMax($img_projet_src1, $img_projet_src1, 200);
    echo "L'image a été redimensionnée avec succès !";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

 
require_once '../config/all_pages_script.php' ; 




 
?>



<meta http-equiv="refresh" content="0; URL=../index.php" />

<style>
    body{
        /*
        background-color: black;

        */

 
    }
</style>
</body>
</html>