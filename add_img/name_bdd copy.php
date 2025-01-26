<?php

session_start();
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
$databaseHandler = new DatabaseHandler($dbname, $username);
$name_extention_projet = $_SESSION["name_extention_projet"];
$id_sha1_projet = $_SESSION["id_sha1_projet"];
$img_projet_src1 = $_SESSION["file_data1"];
$img_projet_src2 = $_SESSION["file_data2"];


$x = $_SESSION["index"][3];
if (isset($_SESSION["img_2"])) {
    $databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET   `img_user`="' . $img_projet_src1 . '" WHERE `id_sha1_user` = "' . $x . '"');
} else {
    $databaseHandler->action_sql('UPDATE  `projet` SET   `img_projet_src1`="' . $img_projet_src1 . '" WHERE `id_sha1_projet` = "' . $id_sha1_projet . '"');
    $databaseHandler->action_sql('UPDATE  `projet` SET   `name_extention_projet`="' . $img_projet_src2 . '" WHERE `id_sha1_projet` = "' . $id_sha1_projet . '"');
}






if (isset($_SESSION["img_2"])) {
    unset($_SESSION["img_2"]);
}



if ($_SESSION["home"] == "profil") {

 
   
 
 
    $databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET   `img_user`="' . $img_projet_src1 . '" WHERE `id_sha1_user` = "' . $id_sha1_projet . '"');

   
}
?>



<?php

function redimensionnerImageLargeurMax($source, $destination, $largeurMax) {
    // Charger l'image source
    $infosImage = getimagesize($source);
    $largeurOriginale = $infosImage[0];
    $hauteurOriginale = $infosImage[1];
    $typeImage = $infosImage[2];

    // Calcul du ratio pour ajuster la hauteur
    $ratioOriginal = $largeurOriginale / $hauteurOriginale;

    // Calculer la nouvelle largeur et la nouvelle hauteur
    $nouvelleLargeur = $largeurMax;
    $nouvelleHauteur = $largeurMax / $ratioOriginal;

    // Créer une nouvelle image à partir de l'image source
    switch ($typeImage) {
        case IMAGETYPE_JPEG:
            $imageSource = imagecreatefromjpeg($source);
            break;
        case IMAGETYPE_PNG:
            $imageSource = imagecreatefrompng($source);
            break;
        case IMAGETYPE_GIF:
            $imageSource = imagecreatefromgif($source);
            break;
        default:
            throw new Exception("Type d'image non pris en charge");
    }

    // Créer l'image redimensionnée
    $imageRedimensionnee = imagecreatetruecolor($nouvelleLargeur, $nouvelleHauteur);

    // Conserver la transparence pour les PNG et GIF
    if ($typeImage == IMAGETYPE_PNG || $typeImage == IMAGETYPE_GIF) {
        imagecolortransparent($imageRedimensionnee, imagecolorallocatealpha($imageRedimensionnee, 0, 0, 0, 127));
        imagealphablending($imageRedimensionnee, false);
        imagesavealpha($imageRedimensionnee, true);
    }

    // Redimensionner l'image
    imagecopyresampled(
        $imageRedimensionnee,
        $imageSource,
        0, 0, 0, 0,
        $nouvelleLargeur, $nouvelleHauteur,
        $largeurOriginale, $hauteurOriginale
    );

    // Sauvegarder l'image redimensionnée
    switch ($typeImage) {
        case IMAGETYPE_JPEG:
            imagejpeg($imageRedimensionnee, $destination, 90); // 90 = qualité
            break;
        case IMAGETYPE_PNG:
            imagepng($imageRedimensionnee, $destination);
            break;
        case IMAGETYPE_GIF:
            imagegif($imageRedimensionnee, $destination);
            break;
    }

    // Libérer la mémoire
    imagedestroy($imageSource);
    imagedestroy($imageRedimensionnee);
}

// Exemple d'utilisation avec largeur max de 280px
try {
    redimensionnerImageLargeurMax($img_projet_src1, "image_redimensionnee.jpg", 280);
    echo "L'image a été redimensionnée avec succès !";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}




?>

<meta http-equiv="refresh" content="0; URL=../index.php" />