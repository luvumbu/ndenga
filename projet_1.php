 <?php



    $element_array = array(
        'https://t3.ftcdn.net/jpg/05/35/47/38/360_F_535473874_OWCa2ohzXXNZgqnlzF9QETsnbrSO9pFS.jpg',
        'https://i.pinimg.com/originals/2f/75/be/2f75beb4f91360a68f9d4aa5e985ed85.gif',
        'https://i.pinimg.com/originals/47/ca/c8/47cac854462569b133f9799a3fb16f69.gif',
        'https://i.pinimg.com/originals/63/59/99/635999fcf5c4a54de2215c55b88ff68f.gif',
        'https://i.pinimg.com/originals/a2/53/ef/a253ef4ed39517e57fc673b788869be4.gif'
    );



    $img_src = $element_array[rand(0, 4)];

    $title_projet_1 = $projet_1["title_projet"][0];


    $description_projet_1 = $projet_1["description_projet"][0];




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
 <?php

    if ($projet_1['id_sha1_parent_projet'][0] != "") {

       
    ?>
     <div class="parent_class" >
         <p>Source principal</p>
         <a href="<?= $projet_1['id_sha1_parent_projet'][0] ?>"><img width="50" height="50" src="https://img.icons8.com/flat-round/50/link--v1.png" alt="link--v1" /></a>
     </div>
 <?php
    }

    ?>

 <?php

    $img_projet_src1 = $projet_1["img_projet_src1"][0];


    ?>

 <div class="img_projet_src1">
     <img src="<?= $img_projet_src1 ?>" alt="">
 </div>

 <div class="description_projet_1">

     <div>



         <?php




            $description_projet_1 = str_replace("&lt;", "<", $description_projet_1);
            $description_projet_1 = str_replace("&gt;", ">", $description_projet_1);



            for ($ifram = 0; $ifram < strlen($description_projet_1); $ifram++) {
             
         
                echo $description_projet_1[$ifram];
            }



            ?>
     </div>
 </div>
 <style>
     .description_projet_1 {

         width: 80%;
         margin: auto;
         margin-top: 175px;
         margin-bottom: 75px;
         
         
     }

       iframe{
text-align: center;
   width: 100%;
   margin-top: 25px;
   margin-bottom: 25px;

         
     }
 </style>
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

         <div  style="text-align:center" class='<?= $id_sha1_projet[$i] ?> section_1' id="<?= 'id_' . $id_sha1_projet[$i]  ?>" onclick='function_projet_2(this)'>
             <?php



                echo '<img class="projet_2_img" src="' . $img_projet_src1_2[$i] . '" alt="" srcset="">';

                echo '<br/>';

                echo   $img_projet_src2_2[$i];

                ?>

             <div>
                 <b>
                     <a href="<?= $id_sha1_projet[$i] ?>">
                         <img width="50" height="50" src="https://img.icons8.com/flat-round/50/link--v1.png" alt="link--v1" />
                     </a>
                 </b>
             </div>

             <?php


                echo    '<i class="title_projet_2"> ' . $title_projet_2[$i] . ' </i>';







                ?>
         </div>


     <?php



        }
        ?>





 </div>

 <div id="section_1" style="margin-top:75px"></div>
 <?php
    for ($i = 0; $i < count($projet_2["title_projet"]); $i++) {



    ?>
     <div class="liste_elements_">


         <div>
             <h3 style="text-align:center">
                 <?php



                    if ($description_projet_2[$i] != "") {
                        echo  $title_projet_2[$i];
                        $class_element = "";
                    } else {
                        $class_element = "display_none";
                    }
                    ?>
             </h3>
         </div>

         <div>
             <?php

                $string_description_projet_2 = AsciiConverter::asciiToString($description_projet_2[$i]);

                $string_description_projet_2 = str_replace("&lt;", "<", $string_description_projet_2);
                $string_description_projet_2 = str_replace("&gt;", ">", $string_description_projet_2);









                ?>
         </div>
         <div class="<?= $class_element ?>">
             Voir <?= $title_projet_2[$i]; ?>
         </div>
     </div>
 <?php

    }
    ?>







 <?php








    $color_projet = $projet_1["color_projet"][0];



    $_SESSION["color_projet"] = $color_projet;






    ?>


 <style>
     .liste_elements_ {
         margin-top: 75px;
         width: 80%;
         margin: auto;
         margin-top: 75px;
         margin-bottom: 75px;


     }



     .title_projet_1 div {
         padding: 15px;
     }

     .src_img {
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
         flex-wrap: wrap;
         width: 80%;
         margin: auto;
        
     }

     .projet_2 div {
         padding: 15px;
         
         width: 250px;
         text-align: center;
         font-size: 1.5em;
         margin: 25px;
         margin-top: 75px;
         text-align: center;
     }

     .projet_2 div:hover {
         cursor: pointer;
     }





     body {
         margin: 0;
         background-color: url("");
     }


     .display_none {
         display: none;
     }

     .title_projet_2 {
         text-align: center;
         font-size: 1.2em;
     }

     .parent_class {
         width: 100%;

         text-align: center;
         margin-top: 75px;
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

     class Information {
         constructor(link) {
             this.link = link;
             this.identite = new FormData();
             this.req = new XMLHttpRequest();
             this.identite_tab = [];
         }
         info() {
             return this.identite_tab;
         }
         add(info, text) {
             this.identite_tab.push([info, text]);
         }
         push() {
             for (var i = 0; i < this.identite_tab.length; i++) {
                 console.log(this.identite_tab[i][1]);
                 this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);
             }
             this.req.open("POST", this.link);
             this.req.send(this.identite);
             console.log(this.req);
         }
     }



     function envoie_comment(_this) {




         const classArray = _this.className.split(' ');
         console.log(classArray); // Affiche ["class1", "class2", "class3"]


         var name_ = document.getElementById("text_" + classArray[0]).value;



         var ok = new Information("../config/add_commet.php"); // création de la classe 
         ok.add("id_sha1_comment_projet", classArray[0]); // ajout d'une deuxieme information denvoi 
         ok.add("text_comment_projet", name_); // ajout d'une deuxieme information denvoi 





         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 







         const myTimeout = setTimeout(x, 250);

         function x() {




             const xhttp = new XMLHttpRequest();
             xhttp.onload = function() {
                 document.getElementById("comment_" + classArray[0]).innerHTML =
                     this.responseText;
             }
             xhttp.open("GET", "../comment_ajax.php/" + classArray[0]);
             xhttp.send();
         }








     }

     function val_comment_function(_this) {





         /*
                  const classArray = _this.className.split(' ');
                  console.log(classArray); // Affiche ["class1", "class2", "class3"]


                  var name_ = document.getElementById("name_" + classArray[0]).value;
                  var comment_ = document.getElementById("comment_" + classArray[0]).value;


                  console.log(name_);
                  console.log(comment_);



                  var ok = new Information("../config/add_commet.php"); // création de la classe 
                  ok.add("name_comment_projet", name_); // ajout de l'information pour lenvoi 
                  ok.add("text_comment_projet", comment_); // ajout d'une deuxieme information denvoi
                  ok.add("id_sha1_comment_projet", classArray[0]); // ajout d'une deuxieme information denvoi 




                  console.log(ok.info()); // demande l'information dans le tableau
                  ok.push(); // envoie l'information au code pkp 


                  //    _this.style.display ="none" ; 

         */

     }


     function val_comment_function2(_this) {
         const classArray = _this.className.split(' ');
         console.log(classArray); // Affiche ["class1", "class2", "class3"]


         var name_ = document.getElementById("name_" + classArray[0]).value;
         var comment_ = document.getElementById("comment_" + classArray[0]).value;


         console.log(name_);
         console.log(comment_);



         var ok = new Information("../config/add_commet.php"); // création de la classe 
         ok.add("name_comment_projet", name_); // ajout de l'information pour lenvoi 
         ok.add("text_comment_projet", comment_); // ajout d'une deuxieme information denvoi
         ok.add("id_sha1_comment_projet", classArray[0]); // ajout d'une deuxieme information denvoi 




         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 
     }
 </script>


 <style>
     .img_projet_src1 {
         max-width: 600px;
         margin: auto;
         margin-top: 75px;
     }

     .img_projet_src1 img {
         width: 100%;
     }
 </style>



 <?php



    echo '<style>
      .projet_2_img {
         width: 70%;
         border-radius: 17px;
         border: 1px solid ' . $projet_1["color_projet"][0] . ';

     }
</style>
';
    ?>



 <?php


    if ($projet_1["color_projet"][0] == '') {
        echo '<style>
    .title_projet_1 {
        background-color: ' . $projet_1["color_projet"][0] . ';
        text-align:center ; 

        
        color:black ; 
    }
</style>';
    } else {
        echo '<style>
    .title_projet_1 {
        background-color: ' . $projet_1["color_projet"][0] . ';
        text-align:center ; 

        
  
        
    }
</style>';
    }




    ?>




 <style>
     body {

         background-repeat: no-repeat;
         background-size: 100% 32.5%;

     }

     .projet_2_img {
         box-shadow: 2px 2px black;
     }

     .img_projet_src1 img {
         box-shadow: 2px 2px black;
         border-radius: 17px;

     }
     body {
    background-image: url("https://img.freepik.com/vecteurs-libre/fond-particules-technologie-style-realiste_23-2148426704.jpg?t=st=1738397647~exp=1738401247~hmac=35c9463d6ab0c1275a62571325d3297abf8886ed1dce717c36116ff7cc8fb5be&w=740");
  
  background-size: 100% 600px;
  }
  .title_projet_1 {
    color: white;
    text-shadow: 1px 1px 4px black;
  }
 </style>