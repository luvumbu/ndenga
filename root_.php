
    <div class="root">
        <div>
            <h1><?= $id_sha1_user_array["title_user"][0] ?></h1>
        </div>

        <div>
            <img src="<?= $id_sha1_user_array["img_user"][0] ?>" alt="">
        </div>

        <div>
            <h1><?= $id_sha1_user_array["description_user"][0] ?></h1>
        </div>
        <div>
        <h1><?= $id_sha1_user_array["date_user"][0] ?></h1>

        </div>
    </div>


    <style>
        .root {
            text-align: center;
            width: 300px; 
            border: 1px solid black;
        }
        .root img {
          width: 100%;
        }
    </style>

    <?php
    /*

 
 
$finalArray = [

   "admin" =>     $id_sha1_user_array,
   "projet_1" =>  $projet_1,
   "projet_2" =>  $projet_2,
   "projet_3" =>  $projet_3,
   "projet_4" =>  $projet_4

];


*/


    ?>


</body>

</html>