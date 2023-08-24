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

## Dynamiser les cards de vehicules_d_occasion

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

> Je fais un require_once **DIR** . "/lib/cards.php"; sur les fichiers carrosserie.php, mecanique.php et entretien.php.

> Je réalise une boucle sur la card en fonction de la page:
>
> <?php foreach ($cards_carrosserie as $key => $card_carrosserie) { ?> en prenant soint de changer les éléments de la boucle (title et content.)

> Je change les valeurs en fonction des données saisies:
>
> <?= $card_carrosserie["title"] ?>
> <?= $card_carrosserie["content"] ?>

## Dynamiser les cards de services de index.php

> Je récupere les infos en dur de la section et je les mets dans un fichier services.php:

> Je crée service_part.php ou je met la structure de la card que j'appelle en require dans la section services de index.php pour boucler sur les cards de index.php.

## Dynamiser les avis clients de index.php

> Je récupere les infos en dur de la section et je les mets dans un fichier customers.php:

> Je crée customer_part.php ou je met la structure de la card que j'appelle en require dans la section services de index.php pour boucler sur les cards de index.php.

## Dynamiser la page vehicule_d_occasion_detaille.php

> Afin de pointer sur la bonne fiche technique de véhicule, je modifie la page pour la rendre dynamique:

> Je me sert du tableau de car.php et je passe un parametre d'URL en HTTP;
> On parlera d'index en tableau et de id dans la BDD.
> J"ajoute "?", le nom de notre paramètre "test", et = "10 (par exemple)" et on va devoir GET le parametre.

> <?php var_dump($_GET); ?> donnera array(1) { ["test"]=> string(2) "10" }
>
> GET est donc un tableau associatif clé(test) / valeur(10)

> <?php var_dump($_GET["test"]); ?> donnera string(2) "10"

> si on met en parametre d'URL ?id=1, et d'après mon tableau de car.php:

> <?php var_dump($cars); ?> donnera grace au require_once __DIR__ . "/lib/car.php"; array(5) { [0]=> array(7) { ["title"]=> string(8) "Mc Laren" ["model"]=> string(2) "P1" ["year"]=> string(4) "2009" ["motorization"]=> string(20) "Hybride Rechargeable" ["kilometers"]=> string(10) "18 987 kms" ["price"]=> string(10) "13 842 €" ["image"]=> string(15) "Mc Laren P1.jpg" } [1]=> array(7) { ["title"]=> string(20) "Laborghini Aventador" ["model"]=> string(6) "LP-700" ["year"]=> string(4) "2011" ["motorization"]=> string(7) "Essence" ["kilometers"]=> string(10) "21 542 kms" ["price"]=> string(10) "13 842 €" ["image"]=> string(25) "Lamborghini Aventador.jpg" } [2]=> array(7) { ["title"]=> string(4) "Ford" ["model"]=> string(15) "F150 SVT-Raptor" ["year"]=> string(4) "2015" ["motorization"]=> string(7) "Essence" ["kilometers"]=> string(10) "38 952 kms" ["price"]=> string(10) "13 842 €" ["image"]=> string(15) "Ford Raptor.jpg" } [3]=> array(7) { ["title"]=> string(5) "Dodge" ["model"]=> string(19) "Charger SRT HellCat" ["year"]=> string(4) "2020" ["motorization"]=> string(20) "Hybride Rechargeable" ["kilometers"]=> string(10) "24 157 kms" ["price"]=> string(10) "13 842 €" ["image"]=> string(21) "Dodge Charger SRT.jpg" } [4]=> array(7) { ["title"]=> string(4) "Ford" ["model"]=> string(7) "Mustang" ["year"]=> string(4) "2020" ["motorization"]=> string(7) "Essence" ["kilometers"]=> string(10) "19 354 kms" ["price"]=> string(10) "37 416 €" ["image"]=> string(16) "Ford Mustang.jpg" } }

> <?php var_dump($car); ?> donnera le contenu du tableau d'index 1 array(7) { ["title"]=> string(20) "Laborghini Aventador" ["model"]=> string(6) "LP-700" ["year"]=> string(4) "2011" ["motorization"]=> string(7) "Essence" ["kilometers"]=> string(10) "21 542 kms" ["price"]=> string(10) "13 842 €" ["image"]=> string(25) "Lamborghini Aventador.jpg" }

> Maintenant que j'ai les données, je remplace les données brut par le code PHP adéquat.

## Modification du menu

> Afin de pouvoir changer les metadonnées de vehicule_d_occasion_detaille.php, je décide de mettre mon menu dans un fichier a part menu.php.
> Cela dissocie donc le menu du header. Il faudra par la suite inclure menu.php AVANT header.php.
> Je passe le parametre substr à la meta_description pour couper a 100 caractères.
