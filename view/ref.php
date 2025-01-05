<?php

require 'view/model_blog1.php';
require 'view/model_blog2.php';
require 'view/model_blog3.php';

$projet_3 = [] ; 
$projet_4 = [] ; 
//for($a = 0 ; $a <$kount ; $a++)


/*
for($a = 0 ; $a <$kount ; $a++)
{
// require 'view/model_blog11.php' ; 
$id_sha1_projet =  $id_sha1_projet__[$a] ;
require 'view/model_blog11.php' ; 
array_push($projet_2 ,$namex) ; 
}
 
*/



//var_dump($projet_1) ; 
//var_dump($projet_2) ;  


//var_dump($id_sha1_projet_name2) ; 



$count = count($projet_2['id_sha1_projet']);


for ($b = 0; $b< $count; $b++) {   
   require 'view/model_blog4.php';
}


 
 




 


$count = count($projet_3[0]["id_sha1_projet"]);
 

 
for ($b = 0; $b< $count; $b++) {   
   require 'view/model_blog5.php';
}



 
 
$finalArray = [

   "admin" =>     $id_sha1_user_array,
   "projet_1" =>  $projet_1,
   "projet_2" =>  $projet_2,
   "projet_3" =>  $projet_3,
   "projet_4" =>  $projet_4

];


 