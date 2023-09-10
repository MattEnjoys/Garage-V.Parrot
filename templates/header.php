<?php
require_once __DIR__ . "/../lib/config.php";
require_once __DIR__ . "/../lib/session.php";
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
                        <?php
                        // Assurez-vous que $mainMenu est défini avant d'itérer
                        if (isset($mainMenu) && is_array($mainMenu)) {
                            foreach ($mainMenu as $menuKey => $menuItem) {
                                // Vérifiez si l'élément doit être exclu
                                if (!$menuItem["exclude"]) {
                                    $isActive = ($menuKey === $currentPage) ? "active" : "";
                                    $menuTitle = htmlspecialchars($menuItem["menu_title"], ENT_QUOTES, 'UTF-8'); // Échapper les valeurs pour la sécurité
                                    ?>
                                    <li class="nav-item">
                                        <a href="<?= htmlspecialchars($menuKey, ENT_QUOTES, 'UTF-8'); ?>"
                                           class="nav-link h2-h5 Black text-center <?= $isActive; ?>">
                                            <?= $menuTitle; ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                        }
                        ?>

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
    <main class="B-Pink">