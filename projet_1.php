 <?php

$element_array = array(
    'https://t3.ftcdn.net/jpg/05/35/47/38/360_F_535473874_OWCa2ohzXXNZgqnlzF9QETsnbrSO9pFS.jpg',
    'https://i.pinimg.com/originals/2f/75/be/2f75beb4f91360a68f9d4aa5e985ed85.gif',
    'https://i.pinimg.com/originals/47/ca/c8/47cac854462569b133f9799a3fb16f69.gif',
    'https://i.pinimg.com/originals/63/59/99/635999fcf5c4a54de2215c55b88ff68f.gif',
    'https://i.pinimg.com/originals/a2/53/ef/a253ef4ed39517e57fc673b788869be4.gif'
    ) ; 

 

    $img_src =$element_array[rand( 0,4)];

    $title_projet_1 = $projet_1["title_projet"][0];


    /*


$finalArray = [

   "admin" =>     $id_sha1_user_array,
   "projet_1" =>  $projet_1,
   "projet_2" =>  $projet_2

];


*/
    ?>



 <div class="title_projet_1">
     <div>
         <h1><?= $title_projet_1 ?></h1>

     </div>
 </div>

 <link rel="stylesheet" href="../css_hexagon.css">
 <?php
    /*
var_dump($projet_2["title_projet"]) ; 
var_dump($projet_2["id_sha1_projet"]) ; 



*/

    $img_projet_src1_2 = $projet_2["img_projet_src1"];
    $title_projet_2 = $projet_2["title_projet"];
    $description_projet_2 = $projet_2["description_projet"];
    $id_sha1_projet = $projet_2["id_sha1_projet"];

  
    ?>


 <div class="projet_2">

     <?php

        for ($i = 0; $i < count($projet_2["title_projet"]); $i++) {

        ?>

         <div class='<?= $id_sha1_projet[$i] ?> section_1' id="<?= 'id_' . $id_sha1_projet[$i]  ?>" onclick='function_projet_2(this)'>
             <?php



                echo '<img class="projet_2_img" src="' . $img_projet_src1_2[$i] . '" alt="" srcset="">';

echo '<br/>' ; 
            
echo   $img_projet_src2_2[$i]  ; 


               echo    '<i class="title_projet_2"> '.$title_projet_2[$i].' </i>';







                ?>
         </div>


     <?php



        }
        ?>
 </div>

 <div id="section_1"></div>

 

 



 <style>
     .title_projet_1 {
         background-color: #bd4a23;
         color: white;
         text-align: center;

     }

     .title_projet_1 div {
         padding: 15px;
     }
     
.src_img{
    width: 50%;
    margin: auto;
}
.src_img img {
    width: 100%;
    margin-top: 100px;
    margin-bottom: 100px;

}
     .projet_2 {
         display: flex;
         justify-content: space-around;
     }

     .projet_2 div {
         padding: 15px;
         margin-top: 75px;
         width: 250px;
         text-align: center;
         font-size: 1.5em;
     }

     .projet_2 div:hover {
         cursor: pointer;
     }


     .projet_2_img {
         width: 70%;
         border-radius: 17px;
         border: 1px solid rgba(0, 0, 0, 0.2);

     }


     body {
         margin: 0;
     }


     .display_none {
display: none;
     }
     .title_projet_2{
        text-align: center;
        font-size: 1.2em;
     }
 </style>

 <script>
     function function_projet_2(_this) {

         // Diviser la chaîne des classes avec un underscore comme séparateur
         const classArray = _this.className.split(' ');
         console.log(classArray); // Affiche ["class1", "class2", "class3"]





  /*
     var id_des_ =   document.getElementById("id_des_"+classArray[0]).className  ; 




         if(id_des_=="display_none") {
            
            document.getElementById("id_des_"+classArray[0]).className ="id_des_" ; 
         }
         else {
            document.getElementById("id_des_"+classArray[0]).className ="display_none" ; 

         }
       

                 const para = document.createElement("p");
         para.innerHTML = "This is a paragraph.";
         document.getElementById("section_1").appendChild(para);


         */



 

         const xhttp = new XMLHttpRequest();
         xhttp.onload = function() {
             document.getElementById(classArray[1]).innerHTML =
                 this.responseText;
         }
         xhttp.open("GET", "../projet_1_data.php/" + classArray[0]);
         xhttp.send();



       
     }





     // Fonction pour récupérer les classes d'un élément par son ID et les mettre dans un tableau
 </script>


 