# GARAGE V.PARROT

Après avoir réalisé le site en HTML CSS JS et Bootstrap, je rends dynamique mon site en le passant en PHP.

Dans un premier temps, je passe tous les fichier .html en .php.
Pour résoudre les bug d'affichage image et css, j'enlève tous les "/" au début de mes "/assets" et links css.
Puis, en structurant le travail, je réalise le projet en différentes étapes:

## Centraliser le header et le footer

> Création d'un dossier templates avec deux fichiers header.php et footer.php
> Je récupère le header de index.php et on le met dans header.php.
> Je récupère le footer de index.php et on le met dans footer.php.

> Je réalise des require_once **DIR** . importer les deux fichiers dans toutes les pages depuis le repertoire courant.

## Adapter le CSS en fonction de la page courrante

> Grace à cette fonction PHP, je rends les feuilles de style CSS dynamiques en fonction de la page courante.

> function getCurrentPageCSS()
> {
> $currentPage = basename($\_SERVER['PHP_SELF']);
>
> // Définir une correspondance entre les noms de pages et les noms de fichiers CSS
> $pageToCSS = [
>
> > 'index.php' => 'style.css',
> > 'carrosserie.php' => 'services.css',
> > 'mecanique.php' => 'services.css',
> > 'entretien.php' => 'services.css',
> > 'vehicule_d_occasion.php' => 'vehicule_d_occasion.css',
> > 'vehicule_d_occasion_detaille.php' => 'vehicule_d_occasion_detaille.css',
> > 'contact.php' => 'contact.css',
> > 'espace_pro.php' => 'espace_pro.css',
> > ];
>
> // Vérifier si la page actuelle existe dans la correspondance, sinon utiliser un CSS par défaut
> if (array_key_exists($currentPage, $pageToCSS)) {
>        return $pageToCSS[$currentPage];
> } else {
> return 'style.css';
> }
> }

> $currentPageCSS = getCurrentPageCSS();

## Mise en place du menu dynamique

> Grace à cette fonction PHP, je rends le menu dynamique avec une classe active sur les items.

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

> Grace à cette fonction PHP, je rends dynamique ces données.

>    <title>
>        <?= $mainMenu[$currentPage]["head_title"]; ?>
>    </title>

>   <meta name="description" content="<?= $mainMenu[$currentPage]["meta_description"]; ?>">

## Dynamiser les cars de vehicules_d_occasion

> Je crée les dossiers uploads et voitures pour y mettre les images de voitures.

> Dans un premier temps, je marque en dur les données pour travailler avec un tableau.

> $cars = [
> ["title" => "Mc Laren", "model" => "P1", "year" => "2009", "motorization" => "Hybride Rechargeable", "kilometers" => "18 987 kms", "price" => "13 842 €", "image" => "Mc Laren P1.jpg"],
> ["title" => "Laborghini Aventador", "model" => "LP-700", "year" => "2011", "motorization" => "Essence", "kilometers" => "21 542 kms", "price" => "13 842 €", "image" => "Lamborghini Aventador.jpg"],
> ["title" => "Ford", "model" => "F150 SVT-Raptor", "year" => "2015", "motorization" => "Essence", "kilometers" => "38 952 kms", "price" => "13 842 €", "image" => "Ford Raptor.jpg"],
> ["title" => "Dodge", "model" => "Charger SRT HellCat ", "year" => "2020", "motorization" => "Hybride Rechargeable", "kilometers" => "24 157 kms", "price" => "13 842 €", "image" => "Dodge Charger SRT.jpg"]
> ];

> Je réalise une boucle sur la card:
>
> <?php foreach ($cars as $key => $car) { ?> en prenant soint de changer les éléments de la boucle (le titre, le modele, ...)

> Je change les valeurs en fonction des données saisies:
>
> <?= $car["title"] ?>
> <?= $car["model"] ?>
> <?= $car["year"] ?>,...

> Puis je viens centraliser dans un fichier car.php à part que j'appelle selon les besoins.

## Dynamiser les cards que l'Administrateur vas charger dans le site par la suite pour les trois services.

> Dans un premier temps, je crée le fichier cards.php dans lequel je marque en dur les données pour travailler avec un tableau.

> $cards_carrosserie = [
> [
>
> > "title" => "Réparations",
> > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
> > in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
> > professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
> > Lorem Ipsum passage"
> > ],
> > [
> >
> > > > "title" => "Redressement de la carrosserie",
> > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random
> > > > text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
> > > > McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
> > > > consectetur, from a Lorem Ipsum passage"
> > > > ],
> > > > [
> > > >
> > > > > > > > "title" => "Covering",
> > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
> > > > > > > > a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
> > > > > > > > at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
> > > > > > > > passage"
> > > > > > > > ],
> > > > > > > > [
> > > > > > > >
> > > > > > > > > > > > > > > > "title" => "Teintage des vitres",
> > > > > > > > > > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It
> > > > > > > > > > > > > > > > has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
> > > > > > > > > > > > > > > > Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
> > > > > > > > > > > > > > > > a Lorem Ipsum passage"
> > > > > > > > > > > > > > > > ],
> > > > > > > > > > > > > > > > ];
>
> $cards_entretien = [
> [
>
> > "title" => "Climatisation",
> > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
> > in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
> > professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
> > Lorem Ipsum passage"
> > ],
> > [
> >
> > > > "title" => "Vidange",
> > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random
> > > > text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
> > > > McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
> > > > consectetur, from a Lorem Ipsum passage"
> > > > ],
> > > > [
> > > >
> > > > > > > > "title" => "Révision",
> > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
> > > > > > > > a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
> > > > > > > > at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
> > > > > > > > passage"
> > > > > > > > ],
> > > > > > > > [
> > > > > > > >
> > > > > > > > > > > > > > > > "title" => "Changement des filtres",
> > > > > > > > > > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It
> > > > > > > > > > > > > > > > has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
> > > > > > > > > > > > > > > > Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
> > > > > > > > > > > > > > > > a Lorem Ipsum passage"
> > > > > > > > > > > > > > > > ],
> > > > > > > > > > > > > > > > ];
>
> $cards_mecanique = [
> [
>
> > "title" => "Pneumatiques, parrallélisme et freinage",
> > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
> > in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
> > professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
> > Lorem Ipsum passage"
> > ],
> > [
> >
> > > > "title" => "Boîte de vitesse, distribution et embrayage",
> > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random
> > > > text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
> > > > McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
> > > > consectetur, from a Lorem Ipsum passage"
> > > > ],
> > > > [
> > > >
> > > > > > > > "title" => "Climatisation",
> > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
> > > > > > > > a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
> > > > > > > > at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
> > > > > > > > passage"
> > > > > > > > ],
> > > > > > > > [
> > > > > > > >
> > > > > > > > > > > > > > > > "title" => "Amortisseurs",
> > > > > > > > > > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It
> > > > > > > > > > > > > > > > has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
> > > > > > > > > > > > > > > > Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
> > > > > > > > > > > > > > > > a Lorem Ipsum passage"
> > > > > > > > > > > > > > > > ],
> > > > > > > > > > > > > > > > ];

> Je vais un require_once **DIR** . "/lib/cards.php"; sur les fichiers carrosserie.php, mecanique.php et entretien.php.

> Je réalise une boucle sur la card en fonction de la page:
>
> <?php foreach ($cards_carrosserie as $key => $card_carrosserie) { ?> en prenant soint de changer les éléments de la boucle (title et content.)

> Je change les valeurs en fonction des données saisies:
>
> <?= $card_carrosserie["title"] ?>
> <?= $card_carrosserie["content"] ?>

## Dynamiser les cars de services de index.php

> je récupere les infos en dur de la section et je les mets dans un fichier services.php:

> $services = [
> [
>
> > "title" => "Carrosserie",
> > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at",
> > "image" => "Carrosserie.jpg"
> > ],
> > [
> >
> > > > "title" => "Mécanique",
> > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at",
> > > > "image" => "Mécanique.jpg"
> > > > ],
> > > > [
> > > > > > > > "title" => "Entretien",
> > > > > > > > "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at",
> > > > > > > > "image" => "Entretien.jpg"
> > > > > > > > ],
> > > > ];

> Je crée service_part.php ou je met la structure de la card que j'appelle en require dans la section services de index.php pour boucler sur les cards de index.php.

## Dynamiser les avis clients de index.php
