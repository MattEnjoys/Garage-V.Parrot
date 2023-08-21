# GARAGE V.PARROT

Après avoir réalisé le site en HTML CSS JS et Bootstrap, je rends dynamique mon site en le passant en PHP.

Dans un premier temps, je passe tous les fichier .html en .php.
Pour résoudre les bug d'affichage image et css, j'enlève tous les "/" au début de mes "/assets" et links css.
Puis, en structurant le travail, je réalise le projet en différentes étapes:

## Centraliser le header et le footer

> Création d'un dossier templates avec deux fichiers header.php et footer.php
> On récupère le header de index.php et on le met dans header.php.
> On récupère le footer de index.php et on le met dans footer.php.

> On réalise des require_once **DIR** . importer les deux fichiers dans toutes les pages depuis le repertoire courant.

## Mise en place du menu dynamique

> Grace à cette fonction PHP, on rends le menu dynamique avec une classe active sur les items.

> <?php foreach ($mainMenu as $key => $menuItem) {
>   if (!array_key_exists("exclude", $menuItem)) {
>   ?>
>   <li class="nav-item"><a href="<?= $key; ?>"
>   class="nav-link h2-h5 Red1 text-center
>   <?php if ($key === $currentPage) {
>   echo "active";
>  }
>   ?>"><?= $menuItem["menu_title"]; ?></a>
>   </li>
>   <?php }
>   } ?>

## Rendre le head title et la meta description dynamique

> Grace à cette fonction PHP, on rends dynamique ces données.

>    <title>
>        <?= $mainMenu[$currentPage]["head_title"]; ?>
>    </title>

>   <meta name="description" content="<?= $mainMenu[$currentPage]["meta_description"]; ?>">

> |
> |
> On crée les dossiers uploads et voitures pour y mettre les images de voitures.
> |
> |
> En fonction de la page affichée, il faudra afficher le bon CSS correspondant.
