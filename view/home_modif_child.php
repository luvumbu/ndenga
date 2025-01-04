<link rel="stylesheet" href="view/home_modif_child.css">

 
<?php

$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM projet WHERE  id_sha1_parent_projet ='$id_sha1_projet_dynamic_1_' AND activation_projet='' ";

$databaseHandler->getListOfTables_Child("projet");
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();



$id_sha1_projet_dynamic_1_child = $dynamicVariables['date_inscription_projet'];
$id_sha1_projet__ = $dynamicVariables['id_sha1_projet'];


$id_sha1_projet__ = $dynamicVariables['id_sha1_projet'];

$visibility_1_projet__ = $dynamicVariables['visibility_1_projet'];






$kount = count($id_sha1_projet_dynamic_1_child);




echo '<div class="display_flex_children">';
for ($y = 0; $y < $kount; $y++) {



 

    $img_projet_src1__ = str_replace("../","",$dynamicVariables['img_projet_src1'][$y]); ; 


    $title_projet__ = AsciiConverter::asciiToString($dynamicVariables['title_projet'][$y]);  
    $visibility_1_projet____ = $visibility_1_projet__[$y] ; 
  

   

if( $visibility_1_projet____==""){
?>

<div style="opacity: 0.2;" class="card_child" title="<?php echo $id_sha1_projet__[$y]  ?>" onclick="voir_children(this)">

<?php 
}
else {
?>

<div class="card_child" title="<?php echo $id_sha1_projet__[$y]  ?>" onclick="voir_children(this)">

<?php 
}
?>

        <div>

        <?php 

if($img_projet_src1__ !=""){
 

    echo '<img src="'.$img_projet_src1__.'" alt="">';
}
else {
    echo '<img src="'.$grande_image__.'" alt="">';

}

        ?>
        </div>
          <div>
           
            <h4>
                <?php echo $title_projet__ ?>
            </h4> 
            <h3>Voir projet:</h3>
        </div>
    </div>

<?php
}



echo '</div>';

?>







<style>
    .card_child:hover {
        cursor: pointer;
    }
</style>

<script>
    function voir_children(_this) {
        var ok = new Information("config/voir_children.php"); // création de la classe 

 
        ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

     



        const myTimeout = setTimeout(xxxx, 250);

function xxxx() {
    location.reload() ; 
}
    }
</script>