<?php
session_start();
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';
require_once '../Class/redimensionnerImageLargeurMax.php';

$img_projet_src1 = $_SESSION["img_projet_src1"]; 

/**
 * Convertit une image WebP en PNG et remplace le fichier original
 * 
 * @param string $filePath Chemin vers le fichier WebP à convertir
 * @return bool True si la conversion a réussi, false sinon
 * @throws Exception Si la conversion échoue
 */
function convertWebpToPngAndReplace($filePath) {
    // Vérifie si le fichier existe et est lisible
    if (!file_exists($filePath) || !is_readable($filePath)) {
        throw new Exception("Le fichier source n'existe pas ou n'est pas accessible.");
    }

    // Vérification alternative du type MIME
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $filePath);
    finfo_close($finfo);

    // Extensions alternatives pour WebP
    $webpMimeTypes = ['image/webp', 'application/octet-stream'];
    
    if (!in_array($mimeType, $webpMimeTypes)) {
        // Vérification par signature de fichier (magic number)
        $fileHandle = fopen($filePath, 'rb');
        $header = fread($fileHandle, 12);
        fclose($fileHandle);
        
        if (strpos($header, 'RIFF') !== 0 || strpos($header, 'WEBP', 8) === false) {
            throw new Exception("Le fichier n'est pas un WebP valide (signature incorrecte). Type détecté: $mimeType");
        }
    }

    // Vérifie l'extension GD
    if (!extension_loaded('gd') || !function_exists('imagecreatefromwebp')) {
        throw new Exception("L'extension GD avec support WebP n'est pas disponible.");
    }

    // Charge l'image WebP
    $image = @imagecreatefromwebp($filePath);
    if ($image === false) {
        // Essai alternatif avec une autre méthode si disponible
        if (function_exists('imagecreatefromstring')) {
            $fileContent = file_get_contents($filePath);
            $image = @imagecreatefromstring($fileContent);
            if ($image === false) {
                throw new Exception("Échec du décodage de l'image WebP.");
            }
        } else {
            throw new Exception("Impossible de charger l'image WebP.");
        }
    }

    // Génère un nom temporaire pour le PNG
    $tempPngPath = tempnam(sys_get_temp_dir(), 'conv_') . '.png';

    // Enregistre en PNG avec qualité maximale
    if (!imagepng($image, $tempPngPath, 9)) {
        imagedestroy($image);
        @unlink($tempPngPath);
        throw new Exception("Échec de l'enregistrement du PNG temporaire.");
    }

    imagedestroy($image);

    // Sauvegarde de l'original (optionnel)
    // copy($filePath, $filePath . '.backup');

    // Remplacement du fichier original
    if (!rename($tempPngPath, $filePath)) {
        @unlink($tempPngPath);
        throw new Exception("Échec du remplacement du fichier original.");
    }

    // Option: changer l'extension en .png
    // $newPath = preg_replace('/\.webp$/i', '.png', $filePath);
    // rename($filePath, $newPath);

    return true;
}

try {
    $imagePath = $img_projet_src1;
    
    // Conversion et remplacement
    if (convertWebpToPngAndReplace($imagePath)) {
        echo "Conversion réussie! Le fichier a été remplacé par sa version PNG.";
        
        // Option: renommer en .png
        // $newPath = preg_replace('/\.webp$/i', '.png', $imagePath);
        // rename($imagePath, $newPath);
    }
} catch (Exception $e) {
    echo "Erreur: " . $e->getMessage();
    
    // Debug supplémentaire
    echo "<pre>Détails: ";
    print_r([
        'file' => $imagePath,
        'mime' => mime_content_type($imagePath),
        'size' => filesize($imagePath)
    ]);
    echo "</pre>";
}