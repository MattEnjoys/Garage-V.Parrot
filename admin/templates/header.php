<?php
require_once __DIR__ . "/../../lib/config.php";
require_once __DIR__ . "/../../lib/session.php";
require_once __DIR__ . "/../../lib/menu.php";
// adminOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Back_Office</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
          href="../assets/css/reset.css">
</head>

<body>

    <div class="container d-flex">
        <header>
            <div class="d-flex flex-column align-items-center flex-shrink-0 p-3 text-bg-dark"
                 style="width: 280px;">
                <a href="./index_admin.php"
                   class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <?php
                    if (isset($_SESSION['user_role'])) {
                        $userRole = $_SESSION['user_role'];
                        if ($userRole === 'SuperAdmin' || $userRole === 'Admin') {
                            echo '<div class="row rowfooter justify-content-center">
                                <p class="fs-4">Panel Administrateur</p>';
                        } elseif ($userRole === 'Employé') {
                            echo '<div class="row rowfooter justify-content-center">
                                <p class="fs-4">Panel Employé</p>';
                        }
                    }
                    ?>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto align-items-center">
                    <?php foreach ($mainMenuAdmin as $key => $menuItem) {
                        if (!array_key_exists("exclude", $menuItem)) {
                            ?>
                            <li class="nav-item">
                                <a href="<?= $key; ?>"
                                   class="nav-link px-2 <?php if ($key === $currentPage)
                                       echo "active"; ?>">
                                    <?php if ($key === "liste_admin.php") { ?>
                                        <i class="bi bi-speedometer2 pe-none me-2"></i>
                                    <?php } elseif ($key === "ouvertures.php") { ?>
                                        <i class="bi bi-table pe-none me-2"></i>
                                    <?php } ?>
                                    <?= $menuItem["menu_title"]; ?>
                                </a>
                            </li>
                        <?php }
                    } ?>
                </ul>
                <hr>
                <div class="d-flex flex-column flex-shrink-0 text-bg-dark">
                    <?php if (isset($_SESSION['user_role']) && in_array($_SESSION['user_role'], ['SuperAdmin', 'Admin', 'Employé'])) { ?>
                        <a href="../logout.php"
                           class="btn btn-primary">Déconnexion</a>
                    <?php } ?>
                </div>
            </div>
        </header>
        <!-- Fin NavBar de Bootstrap -->
        <main class="d-flex flex-column px-4">