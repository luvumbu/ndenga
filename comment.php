 



<style>
    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    textarea {
        width: 100%;
        height: 80px;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    .message {
        background: #e9ecef;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }

    .author {
        font-weight: bold;
    }
</style>




<?php



$filename  = 'all_coms/'.$id_sha1_projet.".php";



if (file_exists($filename)) {
    include_once  $filename  ; 

 

for ($y=0; $y < count($row_comment_projet ) ; $y++) { 


  $text_comment_projet_  =  $row_comment_projet[$y]["text_comment_projet"] ; 

  $id_comment_projet_ =  $row_comment_projet[$y]["id_comment_projet"] ; 

  /*
  $id_user_sha1_comment_projet_  =  $row_comment_projet[$y] ; 

  $key = array_search( $id_user_sha1_comment_projet_, $id_sha1_user); // $key = 2;
*/

 
 ?>

<div class="container">
    <div id="messages">
       
        <div class="message">
        <p class="author"><?= $id_comment_projet_ ?></p> 
            <p><?= 
            
            
            AsciiConverter::asciiToString($text_comment_projet_ );
            
            ?></p>
        </div>

    </div>
 
</div>
<?php 
}
 
}


?>


<?php 
if (isset($_SESSION["index"])) {
?>

 


    <h2 style="margin-top: 150px;">Poster votre message</h2>
    <textarea id="messageInput" placeholder="Écrivez votre message..."></textarea>
    <button onclick="addComment(this)" title="<?= $id_sha1_projet  ?>" style="margin-bottom: 75px;">Envoyer</button>
<?php
}
?>



<script>
    function addComment(_this) {





        messageInput = document.getElementById("messageInput").value;






        var ok = new Information("../config/addComment_.php"); // création de la classe 
        ok.add("id_sha1_comment_projet", _this.title); // ajout de l'information pour lenvoi 
        ok.add("text_comment_projet", messageInput); // ajout d'une deuxieme information denvoi  
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 



        _this.style.display = "none";




        const myTimeout = setTimeout(demo, 1500);

      function demo(){
        location.reload() ; 
      }



    }

    
</script>



 
<style>
    .demo {
        padding: 15px;
        background-color: #007bff;
        color: white;
        text-align: center;
    }
</style>

</html>