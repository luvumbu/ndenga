
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title id="title">dddddddddddddddddde</title>
 </head>
 <body>
  

 <style>
  .title_h1 {
    text-align: center;
  }
 </style>

<p id="demo"></p>
 

<h1 id="title_h1" class="title_h1"></h1>
 


<h2 class="title_h2" id="title_h2"></h2>
<input type="text">

<script>
 

 

 
 
 
</script>
<?php 


// Exemple de  URL 



 /* 

http://localhost/ndenga/parse.php/projet__id_sha1_projet__173579660394__id_sha1_parent_projet
 
 */



 ?>
<script>
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
   
 

 



 


console.log(myObj) ; 


document.getElementById("title_h1").innerText = myObj.projet_01.finalArray_name1['title_projet'];  
 
document.getElementById("title").innerText = myObj.projet_01.finalArray_name1['title_projet'];  
 


document.getElementById("title_h2").innerText = myObj.projet_01.finalArray_name2['title_projet'];  
 


/*





*/
  }
};
xmlhttp.open("GET", "../json.php/"+lastSegment, true);
xmlhttp.send();

 


 





</script>




<p>Take a look at <a href="json.php" target="_blank">json_demo.txt</a></p>

</body>
</html>