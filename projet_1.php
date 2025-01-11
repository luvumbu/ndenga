<?php




//var_dump($projet_1);


$array_4_x = array();

$cars = array();

for ($a = 0; $a < count($projet_1['title_projet']); $a++) {

?>
    <div class="projet_1">
        <h1>
            <?= $projet_1['title_projet'][$a] ?>
        </h1>

    </div>

    <div class="array_projet_2">


    <?php

}



for ($a = 0; $a < count($projet_2['title_projet']); $a++) {

    /*
    if($projet_3[$a]['1736371261_226'][0]==$projet_2['id_sha1_projet'][$a]) {
        var_dump($projet_3[$a]) ; 

    }


*/







    ?>
        <div class="projet_2" onclick="projet_2_f(this)" title="<?= "id_" . $projet_2['id_sha1_projet'][$a] ?>">

            <div>
                <img src="<?= $projet_2['img_projet_src1'][$a]  ?>" alt="">
            </div>


            <div>
                <h1>
                    <?= $projet_2['title_projet'][$a] ?>
                </h1>
            </div>

            <div>
                <i>
                    <?= $projet_2['id_sha1_projet'][$a] ?>
                </i>
            </div>
        </div>

    <?php
}










    ?>
    </div>



    <?php
    $array = array();
    for ($a = 0; $a < count($projet_2['title_projet']); $a++) {



        if (in_array('id_' . $projet_3[$a]["id_sha1_projet"][0], $array)) {
        } else {
            array_push($array, 'id_' . $projet_3[$a]["id_sha1_projet"][0]);
        }

    ?>


        <div class="display_none display_none_all"><?= 'id_' . $projet_3[$a]["id_sha1_parent_projet"][0] ?></div>
        <div class="display_none" id="id_<?= $projet_3[$a]["id_sha1_parent_projet"][0] ?>">
            <?php





            //var_dump($projet_3[$a]) ;
            //var_dump(count($projet_3[$a]["title_projet"])) ;


            ?>
            <div class="projet_3_flex">
                <?php
                for ($b = 0; $b < count($projet_3[$a]["title_projet"]); $b++) {
                    /*
                    echo  '<div>' . $projet_3[$a]["title_projet"][$b] . '</div>';

                    */

                    echo  '<div title="id_' . $projet_3[$a]["id_sha1_projet"][$b] . '" onclick="projet_3_f(this)" >' . $projet_3[$a]["title_projet"][$b] . '</div>';
                }

                ?>
            </div>
        </div>
        </div>

    <?php
    }




    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!



    for ($a = 0; $a < count($projet_2['title_projet']); $a++) {










        //var_dump($projet_3[$a]) ;
        //var_dump(count($projet_3[$a]["title_projet"])) ;


    ?>
        <div class="">
            <?php
            for ($b = 0; $b < count($projet_3[$a]["title_projet"]); $b++) {
                /*
                echo  '<div>' . $projet_3[$a]["title_projet"][$b] . '</div>';

                */









                for ($b = 0; $b < count($projet_3[$a]["title_projet"]); $b++) {



                    //var_dump($cars,[$a], $projet_3[$a]["id_sha1_projet"][$b]) ; 
                    //$cars[$b][0] 


            ?>
                    <?php
                    for ($c = 0; $c < count($projet_4[$a]["title_projet"]); $c++) {




                        if (in_array('id_' . $projet_4[$a]["id_sha1_projet"][$c], $array_4)) {
                        } else {
                            //  array_push($array_4_x, 'id_' . $projet_4[$a]["id_sha1_projet"][$c]);
                            array_push($array_4_x, $projet_4[$a]);

                            //  var_dump($projet_4[$a]["title_projet"]);

                            //  var_dump($projet_4[$a]["id_sha1_parent_projet"][$c]);
                            // var_dump($projet_4[$a]["id_sha1_projet"][$c]);


                        }
                    }

                    ?>

            <?php
                }
            }

            ?>



        <?php
    }


        ?>
        </div>













        <style>
            .projet_3_flex {
                display: flex;
                justify-content: space-around;
                margin-top: 75px;
            }

            .projet_3_flex div {
                border-radius: 17px;
                border: 1px solid black;
                padding: 15px;

            }

            .display_none {
                display: none;
            }

            .array_projet_2 {
                display: flex;
                justify-content: space-around;
                text-align: center;
                margin-top: 60px;
            }

            .projet_1 {
                text-align: center;
                background-color: #bd4a23;
                padding: 15px;
                color: white;
            }

            .projet_3_flex div {
                cursor: pointer;
            }

            .projet_2 img {
                border-radius: 17px;
                padding: 30px;
                border: 1px solid black;
            }

            .projet_2:hover {
                cursor: pointer;
            }

            body {
                margin: 0;
            }

            .projet_3 {


                margin-bottom: 50px;
            }
        </style>

        <script>
            function projet_2_f(_this) {

                var display_none_all_length = document.getElementsByClassName("display_none_all").length;

                var display_none_all_ = document.getElementsByClassName("display_none_all");

                for (var x = 0; x < display_none_all_length; x++) {

                    document.getElementById(display_none_all_[x].innerHTML).className = "display_none";
                }




                document.getElementById(_this.title).className = "projet_3"



            }

            function projet_3_f(_this) {




                quantite = document.getElementsByClassName("display_none_all2").length;

                for (var xx = 0; xx < quantite; xx++) {



                    document.getElementById(document.getElementsByClassName("display_none_all2")[xx].innerHTML).className = "display_none";
                }



                document.getElementById(_this.title).className = "projet_3_flex";
            }
        </script>

        <?php

        //var_dump($array_4_x) ; 


        //var_dump($array_4_x) ;



        $list_array = array();
        $list_array_info = array();
        $list_array_parent = array();

        $array_4_z = array();






        /*
      var_dump($list_array ); 
      var_dump($list_array_info ); 
      var_dump($list_array_parent ); 
*/

        //var_dump($array_4_x) ; 


        $no_rep = array();

        $total = 0;
        for ($i = 0; $i < count($array_4_x); $i++) {
            //echo  $array_4_x[$i] ; 




            for ($y = 0; $y < count($array_4_x[$i]["id_sha1_projet"]); $y++) {

                $total++;

                //  var_dump($array_4_x[$i]["id_sha1_projet"][$y]) ; 



                if (in_array($array_4_x[$i]["id_sha1_projet"][$y], $array_4_z)) {
                } else {
                    array_push($array_4_z, $array_4_x[$i]["id_sha1_projet"][$y]);

                    $no_rep[$total]["id_sha1_projet"] = $array_4_x[$i]["id_sha1_projet"][$y];
                    $no_rep[$total]["title_projet"] = $array_4_x[$i]["title_projet"][$y];
                    $no_rep[$total]["id_sha1_parent_projet"] = $array_4_x[$i]["id_sha1_parent_projet"][$y];
                }
            }
        }








        //var_dump($no_rep) ; 

        //var_dump($projet_3 ) ;  


        $verif_array = array();
        for ($i = 0; $i < count($projet_3); $i++) {


            /*
    var_dump($projet_3[$i]['id_sha1_projet'])  ; 
    var_dump($projet_3[$i]['title_projet'])  ; 
echo '_---------------------------------------------------------------------------------_' ;
*/



            for ($j = 0; $j < count($projet_3[$i]['id_sha1_projet']); $j++) {



                if (in_array($projet_3[$i]['id_sha1_projet'][$j], $verif_array)) {
                } else {
                    array_push($verif_array, $projet_3[$i]['id_sha1_projet'][$j]);




                    echo '<div class="display_none" id="id_' . $no_rep[$a]["id_sha1_parent_projet"] . '">';


        ?>
                    <div class="display_none display_none_all2"><?= 'id_' . $no_rep[$a]["id_sha1_parent_projet"] ?></div>

        <?php

                    foreach ($no_rep as $a => $v) {
                        //echo $no_rep[$a]['id_sha1_projet'] ; 




                        //var_dump($no_rep[$a]);

                        for ($z = 0; $z < count($no_rep[$a]["id_sha1_projet"]); $z++) {





                            // var_dump($no_rep[$a]["id_sha1_projet"][$z]) ; 

                            if ($projet_3[$i]['id_sha1_projet'][$j] == $no_rep[$a]["id_sha1_parent_projet"]) {
                                // var_dump($no_rep[$a]["id_sha1_parent_projet"]) ; 
                                //   var_dump($no_rep[$a]);


                                echo "<div>";
                                echo $no_rep[$a]["title_projet"];
                                echo "</div>";

                                //  var_dump($projet_3[$i]['id_sha1_projet'][$j]) ;   echo "<br/>-" ; 
                                //var_dump($projet_3[$i]['id_sha1_projet'][$j]) ; 

                            }
                        }
                    }

                    echo '</div>';
                }
            }
        }


        ?>


        <style>
            .black_ {
                background-color: black;
            }
        </style>