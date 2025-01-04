<?php
/**
 * Crée un dossier s'il n'existe pas déjà.
 *
 * @param string $cheminDossier Le chemin du dossier à créer.
 * @param int $permissions (Optionnel) Les permissions à appliquer au dossier (par défaut 0755).
 * @return string Un message indiquant le résultat de l'opération.
 */
function creerDossierSiExistePas(string $cheminDossier, int $permissions = 0755): string {
    if (!is_dir($cheminDossier)) {
        if (mkdir($cheminDossier, $permissions, true)) {
            return "Dossier '$cheminDossier' créé avec succès.";
        } else {
            return "Erreur : impossible de créer le dossier '$cheminDossier'.";
        }
    } else {
        return "Le dossier '$cheminDossier' existe déjà.";
    }
}

// Exemple d'utilisation
//echo creerDossierSiExistePas('mon_dossier');
?>
