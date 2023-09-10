<?php require_once __DIR__ . "/templates/header.php"; ?>

<h1 class="text-center"> Bienvenue
    <?php
    // Vérifiez si l'utilisateur est connecté en vérifiant la présence de la variable de session user_id
    if (isset($_SESSION["user_id"])) {
        // Si l'utilisateur est connecté, affichez son nom et prénom
        echo $_SESSION["user_prenom"] . " " . $_SESSION["user_nom"];
    }
    ?>
</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos sint laboriosam dicta eum eveniet autem qui?
    Modi, id saepe dolores obcaecati optio vel quibusdam dicta! Distinctio eius impedit aliquam numquam.</p>

<?php require_once __DIR__ . "/templates/footer.php"; ?>