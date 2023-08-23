<?php
$mainMenu = [
    "index.php" => [
        "menu_title" => "Accueil",
        "head_title" => "Accueil | Garage V. Parrot",
        "meta_description" => "V.Parrot est un garage de renom de la ville de Toulouse. Depuis plus de quinze ans, Monsieur Parrot propose des services professionnels de réparation automobile. Il est également spécialistes en entretien, diagnostic et réparation de véhicules."
    ],
    "carrosserie.php" => [
        "menu_title" => "Carrosserie",
        "head_title" => "Carrosserie | Garage V. Parrot",
        "meta_description" => "Tous les services de carrosserie proposés par le garage."
    ],
    "mecanique.php" => [
        "menu_title" => "Mécanique",
        "head_title" => "Mécanique | Garage V. Parrot",
        "meta_description" => "Tous les services de mécanique proposés par le garage."
    ],
    "entretien.php" => [
        "menu_title" => "Entretien",
        "head_title" => "Entretien | Garage V. Parrot",
        "meta_description" => "Tous les services d'entretien proposés par le garage."
    ],
    "vehicules_d_occasion.php" => [
        "menu_title" => "Véhicules d'occasion",
        "head_title" => "Véhicules d'occasion | Garage V. Parrot",
        "meta_description" => "Garage V.Parrot, c'est également des véhicules d'occasion révisés, nettoyés et garantis deux ans."
    ],
    "vehicule_d_occasion_detaille.php" => [
        "menu_title" => "Véhicules d'occasion détaillé",
        "head_title" => "Véhicules d'occasion détaillé| Garage V. Parrot",
        "meta_description" => "Fiche technique du véhicule concerné.",
        "exclude" => true
    ],
    "contact.php" => [
        "menu_title" => "Contact",
        "head_title" => "Contact | Garage V. Parrot",
        "meta_description" => "Contacter les équipes de V.Parrot."
    ],
    "espace_pro.php" => [
        "menu_title" => "Espace Pro",
        "head_title" => "Espace Pro | Garage V. Parrot",
        "meta_description" => "Espace dédiés aux professionnels."
    ],
];

function getCurrentPageCSS()
{
    $currentPage = basename($_SERVER['PHP_SELF']);

    // Définir une correspondance entre les noms de pages et les noms de fichiers CSS
    $pageToCSS = [
        'index.php' => 'style.css',
        'carrosserie.php' => 'services.css',
        'mecanique.php' => 'services.css',
        'entretien.php' => 'services.css',
        'vehicule_d_occasion.php' => 'vehicule_d_occasion.css',
        'vehicule_d_occasion_detaille.php' => 'vehicule_d_occasion_detaille.css',
        'contact.php' => 'contact.css',
        'espace_pro.php' => 'espace_pro.css',
    ];

    // Vérifier si la page actuelle existe dans la correspondance, sinon utiliser un CSS par défaut
    if (array_key_exists($currentPage, $pageToCSS)) {
        return $pageToCSS[$currentPage];
    } else {
        return 'style.css';
    }
}

$currentPageCSS = getCurrentPageCSS();
$currentPage = basename($_SERVER["SCRIPT_NAME"]);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <!--Métadonnées-->
    <meta name="description"
          content="<?= $mainMenu[$currentPage]["meta_description"]; ?>">
    <meta name="keywords"
          content="garagiste, réparation automobile, entretien, diagnostic, Toulouse" />
    <meta name="robots"
          content="index, follow" />
    <meta name="author"
          content="Vincent Parrot" />
    <meta name="language"
          content="fr" />
    <!-- Meta Open Graph -->
    <meta property="og:title"
          content="Garagiste à Toulouse - Réparation et Entretien Automobile" />
    <meta property="og:description"
          content="Garagiste de renom depuis plus de quinze ans, services professionnels de réparation automobile à Toulouse. Spécialistes en entretien, diagnostic et réparation de véhicules." />
    <meta property="og:image"
          content="https://vparrot-html.mebzant.frassets/images/logo.png" />
    <meta property="og:url"
          content="https://vparrot-html.mebzant.fr/" />
    <meta property="og:type"
          content="website" />
    <!-- Autres balises -->
    <link rel="canonical"
          href="https://vparrot-html.mebzant.fr/" />
    <link rel="alternate"
          hreflang="fr"
          href="https://vparrot-html.mebzant.fr/" />

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"
          href="assets/images/Logo.svg"
          type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous" />
    <!-- CSS -->

    <link rel="stylesheet"
          href="assets/css/reset.css" />
    <link rel="stylesheet"
          href="assets/css/<?= $currentPageCSS; ?>" />

    <title>
        <?= $mainMenu[$currentPage]["head_title"]; ?>
    </title>
</head>

<body>
    <!--
            ___________________________________________________________________________________________
                                                    NAVBAR
            ___________________________________________________________________________________________
        -->
    <header>
        <nav class="cc-navbar navbar navbar-expand-lg position-fixed w-100">
            <div class="container-fluid">
                <a class="navbar-brand"
                   href="/PHP/Passage en PHP/Garage-V.Parrot/index.php">
                    <img src="assets/images/Logo transparent.png"
                         alt="Logo Garage"
                         width="250"
                         class="Logo" />
                </a>
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                     id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($mainMenu as $key => $menuItem) {
                            if (!array_key_exists("exclude", $menuItem)) {
                                ?>
                                <li class="nav-item"><a href="<?= $key; ?>"
                                       class="nav-link h2-h5 Black text-center
                            <?php if ($key === $currentPage) {
                                echo "active";
                            }
                            ?>"><?= $menuItem["menu_title"]; ?></a>
                                </li>
                            <?php }
                        } ?>
                    </ul>
                    <div class="NavFollow">
                        <ul class="Follow d-flex justify-content-center p-0">
                            <li>
                                <a href="https://www.facebook.com/Garage V.Parrot">
                                    <img src="assets/images/facebook.png"
                                         alt="Logo Facebook"
                                         width="50"
                                         class="" /></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/Garage V.Parrot">
                                    <img src="assets/images/twitter.png"
                                         alt="Logo Twitter"
                                         width="50" /></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/Garage V.Parrot">
                                    <img src="assets/images/instagram.png"
                                         alt="Logo Instagram"
                                         width="50" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--
            ___________________________________________________________________________________________
                                                    FIN NAVBAR
            ___________________________________________________________________________________________
        -->
    <!--
            ___________________________________________________________________________________________
                                                    MAIN
            ___________________________________________________________________________________________
        -->
    <main class="">