<?php
// Chemin d'accès à l'image par défaut des voitures et vérifie si le nom de l'image est fourni
$imagePath = $photo !== null
    // Si oui, utilise le dossier des images de voiture et le nom de l'image (échappé pour la sécurité)
    ? _CARS_IMAGES_FOLDER_ . htmlentities($photo)
    // Sinon, utilise l'image par défaut depuis le dossier des images générales
    : _ASSETS_IMAGES_FOLDER_ . "Car_Default.jpg";
// Texte alternatif pour l'image et vérifie si le nom de l'image est fourni
$altText = $photo !== null
    // Si oui, défini le texte alternatif comme "Nos nouveautés"
    ? "Nos nouveautés"
    // Sinon, défini le texte alternatif comme "Pas d'image à cette annonce."
    : "Image par défaut";

?>
<div class="carousel-item<?= $key === 0 ? ' active' : '' ?>">
    <img src="<?= $imagePath ?>"
         class="d-block w-100"
         alt="<?= $altText ?>" />
</div>