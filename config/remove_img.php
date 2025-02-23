<?php
require_once "require_once.php" ;
 


$id_sha1_projet = $_POST["id_sha1_projet"] ; 
$img_projet_src1 = $_POST["img_projet_src1"] ; 
$img_projet_src = $_POST["img_projet_src1"] ; 

$databaseHandler = new DatabaseHandler($dbname, $username);
 
 

$img_projet_src1 = "../src/img/".$_SESSION["index"][3]."/".$img_projet_src1 ;

$databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src1` = '' WHERE `img_projet_src1` = '$img_projet_src1' ");

 
 
?>


      
<?php
     
    $file = '../src/img/'.$_SESSION["index"][3].'/'.$img_projet_src;

     if (file_exists($file)) {
        unlink($file);
        echo "Le fichier a été supprimé.";
    } else {
        echo $file;
    }



       ?>
 