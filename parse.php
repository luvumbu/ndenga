
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title id="demo"></title>
 </head>
 <body>
  
<style>
  .card_element{
     
    text-align: center;
   
  }
  .card_element img{
    width: 100% ;
    border-radius: 17%;
  }
  .card_element  {
    display: flex;
    justify-content: space-around;
  }
  .card_element div {
    width: 200px;
    margin: 15px;
 
  }
</style>


 <div class="card_element" id="card_element">
   
 </div>


 
<script>
 

 <?php 
 /* 


id_projet
activation_projet
id_general
id_user_projet
id_sha1_user_projet

id_sha1_projet
id_sha1_parent_projet
id_sha1_parent_projet2
cryptage_projet
input_cryptage_projet

name_projet
name_extention_projet
statue_projet
title_projet
description_projet

password_projet
visibility_1_projet
visibility_2_projet
screen_shoot_projet
img_projet_src1

img_projet_src2
img_projet_visibility
group_projet
heure_debut_projet
date_debut_projet

dure_projet
publication_date_j_projet
publication_date_h_projet
shop_projet
date_inscription_projet
 


*/

?>

<?php 
/*

id_user
date_user
id_sha1_user
id_parent_user
description_user
title_user
img_user
nom_user
prenom_user
email_user
activation_user
date_inscription_user


*/

?>

 


 
 
</script>



<div id="display_flex" class="display_none"></div>
 

<style>
  .display_none{
    display:none ;
      }
</style>
<script>

var el1 = "https://luvumbu.com/blog.php/173590596151";

var en_ligne ="" ;
var local ="" ; 
var el2 = "../blog.php/173610581617" ; 



function by_id(val1,val2) {
  document.getElementById(val1).innerHTML = val2 ; 
}

 


  function getLastSegment(url) {
    // Supprimer les éventuels paramètres de requête
    let cleanUrl = url.split('?')[0];
    // Diviser l'URL en segments par "/"
    let segments = cleanUrl.split('/');
    // Retourner le dernier segment non vide
    return segments.filter(segment => segment.trim() !== "").pop();
}

let lastSegment = getLastSegment(window.location.href);


console.log( lastSegment) ; 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
   
 
















/*


var id_projet = myobj.id_projet[x];
var activation_projet = myobj.activation_projet[x];
var id_general = myobj.id_general[x];
var id_user_projet = myobj.id_user_projet[x];
var id_sha1_user_projet = myobj.id_sha1_user_projet[x];

var id_sha1_projet = myobj.id_sha1_projet[x];
var id_sha1_parent_projet = myobj.id_sha1_parent_projet[x];
var id_sha1_parent_projet2 = myobj.id_sha1_parent_projet2[x];
var cryptage_projet = myobj.cryptage_projet[x];
var input_cryptage_projet = myobj.input_cryptage_projet[x];

var name_projet = myobj.name_projet[x];
var name_extention_projet = myobj.name_extention_projet[x];
var statue_projet = myobj.statue_projet[x];
var title_projet = myobj.title_projet[x];
var description_projet = myobj.description_projet[x];

var password_projet = myobj.password_projet[x];
var visibility_1_projet = myobj.visibility_1_projet[x];
var visibility_2_projet = myobj.visibility_2_projet[x];
var screen_shoot_projet = myobj.screen_shoot_projet[x];
var img_projet_src1 = myobj.img_projet_src1[x];

var img_projet_src2 = myobj.img_projet_src2[x];
var img_projet_visibility = myobj.img_projet_visibility[x];
var group_projet = myobj.group_projet[x];
var heure_debut_projet = myobj.heure_debut_projet[x];
var date_debut_projet = myobj.date_debut_projet[x];

var dure_projet = myobj.dure_projet[x];
var publication_date_j_projet = myobj.publication_date_j_projet[x];
var publication_date_h_projet = myobj.publication_date_h_projet[x];
var shop_projet = myobj.shop_projet[x];
var date_inscription_projet = myobj.date_inscription_projet[x];




*/









/*
id_projet
activation_projet
id_general
id_user_projet
id_sha1_user_projet

id_sha1_projet
id_sha1_parent_projet
id_sha1_parent_projet2
cryptage_projet
input_cryptage_projet

name_projet
name_extention_projet
statue_projet
title_projet
description_projet

password_projet
visibility_1_projet
visibility_2_projet
screen_shoot_projet
img_projet_src1

img_projet_src2
img_projet_visibility
group_projet
heure_debut_projet
date_debut_projet

dure_projet
publication_date_j_projet
publication_date_h_projet
shop_projet
date_inscription_projet


*/






// https://luvumbu.com/parse.php/projet__id_sha1_projet__173590596151__id_sha1_parent_projet

// http://localhost/ndenga/parse.php/projet__id_sha1_projet__173590596151__id_sha1_parent_projet








 


   
 
 
  




// Exemple d'utilisation
const totalElements = Object.keys(myObj).length ; 
console.log(totalElements) ; 
 


// Extraire les noms des propriétés et les stocker dans un tableau
const propertyNames = Object.keys(myObj);

console.log(propertyNames); // Affiche : ['a', 'b', 'c']






console.log(myObj) ; 

 

 
 
  }
};
//xmlhttp.open("GET", "../json.php/"+lastSegment, true);
xmlhttp.open("GET", el1, true);

xmlhttp.send();

 


 





</script>





<style>
  .header_1{
    text-align: center;
    padding: 15px; 
    background-color: orange;
    font-size: 2em;
  color:white ; 
  }
  body{
    margin: 0;
  }
</style>





<style>
  .display_flex{
    display: flex;
    justify-content: space-around;
  }
</style>
 

</body>
</html>