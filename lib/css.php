<?php
function generateCssLinks($currentPage)
{
    // Liste des pages et de leurs fichiers CSS correspondants
    $cssFiles = [
        "index.php" => "style.css",
        "carrosserie.php" => "services.css",
        "mecanique.php" => "services.css",
        "entretien.php" => "services.css",
        "vehicule_d_occasion.php" => "vehicule_d_occasion.css",
        "vehicule_d_occasion_detaille.php" => "vehicule_d_occasion_detaille.css",
        "contact.php" => "contact.css",
        "espace_pro.php" => "espace_pro.css"
    ];

    // Ajoute le fichier reset.css à chaque page
    echo '<link rel="stylesheet" href="assets/css/reset.css" />';

    // Vérifie si la page courante a un fichier CSS correspondant
    if (isset($cssFiles[$currentPage])) {
        $cssFile = $cssFiles[$currentPage];
        echo '<link rel="stylesheet" href="assets/css/' . $cssFile . '" />';
    }
}
?>