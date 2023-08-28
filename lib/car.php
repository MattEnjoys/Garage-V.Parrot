<?php
// $cars = [
//     [
//         "marque" => "Mc Laren",
//         "model" => "Mansory",
//         "year" => "2014",
//         "motorization" => "Essence",
//         "kilometers" => "16 000 km",
//         "price" => "129 000 €",
//         "image" => "McLaren Mansory.jpg",
//         "content" => "Quickly design and customize responsive mobile-first
//                 sites with Bootstrap, the world’s most popular
//                 front-end open source toolkit, featuring Sass
//                 variables and mixins, responsive grid system,
//                 extensive prebuilt components, and powerful
//                 JavaScript plugins.",
//         "option1" => "Ma première option",
//         "option2" => " Ma deuxième option",
//         "equipement1" => "Premier équipement",
//         "equipement2" => "Deuxième équipement"
//     ],
//     [
//         "marque" => "Lamborghini Aventador",
//         "model" => "LP-700",
//         "year" => "2011",
//         "motorization" => "Essence",
//         "kilometers" =>
//         "21 542 kms",
//         "price" => "13 842 €",
//         "image" => "Lamborghini Aventador.jpg",
//         "content" => "Quickly design and customize responsive mobile-first
//                 sites with Bootstrap, the world’s most popular
//                 front-end open source toolkit, featuring Sass
//                 variables and mixins, responsive grid system,
//                 extensive prebuilt components, and powerful
//                 JavaScript plugins.",
//         "option1" => "Ma première option",
//         "option2" => " Ma deuxième option",
//         "equipement1" => "Premier équipement",
//         "equipement2" => "Deuxième équipement"
//     ],
//     [
//         "marque" => "Ford",
//         "model" => "F150 SVT-Raptor",
//         "year" => "2015",
//         "motorization" => "Essence",
//         "kilometers" => "38 952 kms",
//         "price" => "13 842 €",
//         "image" => "Ford Raptor.jpg",
//         "content" => "Quickly design and customize responsive mobile-first
//                 sites with Bootstrap, the world’s most popular
//                 front-end open source toolkit, featuring Sass
//                 variables and mixins, responsive grid system,
//                 extensive prebuilt components, and powerful
//                 JavaScript plugins.",
//         "option1" => "Ma première option",
//         "option2" => " Ma deuxième option",
//         "equipement1" => "Premier équipement",
//         "equipement2" => "Deuxième équipement"
//     ],
//     [
//         "marque" => "Dodge",
//         "model" => "Charger SRT HellCat",
//         "year" => "2020",
//         "motorization" => "Hybride Rechargeable",
//         "kilometers" => "24 157 kms",
//         "price" => "13 842 €",
//         "image" => "Dodge Charger SRT.jpg",
//         "content" => "Quickly design and customize responsive mobile-first
//                 sites with Bootstrap, the world’s most popular
//                 front-end open source toolkit, featuring Sass
//                 variables and mixins, responsive grid system,
//                 extensive prebuilt components, and powerful
//                 JavaScript plugins.",
//         "option1" => "Ma première option",
//         "option2" => " Ma deuxième option",
//         "equipement1" => "Premier équipement",
//         "equipement2" => "Deuxième équipement"
//     ],
//     [
//         "marque" => "Ferrari",
//         "model" => "Laferrari",
//         "year" => "2020",
//         "motorization" => "Essence",
//         "kilometers" => "19 354 kms",
//         "price" => "37 416 €",
//         "image" => "Ferrari Laferrari.jpg",
//         "content" => "Quickly design and customize responsive mobile-first
//                 sites with Bootstrap, the world’s most popular
//                 front-end open source toolkit, featuring Sass
//                 variables and mixins, responsive grid system,
//                 extensive prebuilt components, and powerful
//                 JavaScript plugins.",
//         "option1" => "Ma première option",
//         "option2" => " Ma deuxième option",
//         "equipement1" => "Premier équipement",
//         "equipement2" => "Deuxième équipement"
//     ]
// ];

// Fonction pour récupérer les images des voitures
function getImages(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM voitures ORDER BY Id DESC LIMIT 3");
    $query->execute();
    $voitures = $query->fetchAll(PDO::FETCH_ASSOC);

    return $voitures;
}

// Fonction pour récupérer les infos completes de services
function getServices(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM services");
    $query->execute();
    $services = $query->fetchAll(PDO::FETCH_ASSOC);

    return $services;
}

// Fonction pour récupérer les infos pour une Cards dans vehicules_d_occasion.php.
// Fonction qui retourne un array ( donc un tableau associatif ou indexé ex: id voiture, kilometrage, ...) et false si quelque chose ne se passe pas correctement lors de l'execution de la requete. (Si la requete échoue, la fonction renvoie false pour indiquer qu'il y a un problème.).
// Cela indique ke type de données attendus en résultat et les eventuelles valeurs qui pouraient avoir un problème. Cela améliore la lisibilité du code.
function getCars(PDO $pdo): array|false
{
    // Requête SQL pour récupérer les informations des voitures avec les détails de marque et de modèle
    $query = "SELECT
    -- Alias pour l'identifiant de la voiture
    v.Id AS voiture_id,
    -- Kilométrage de la voiture
    v.kilometrage,
    -- Année de fabrication de la voiture
    v.annee,
    -- Prix de la voiture
    v.prix,
    -- Nom de la photo de la voiture
    v.photo,
    -- Alias pour le nom de la marque (utilisé pour la jointure avec la table marque)
    m.nom AS marque_nom,
    -- Alias pour le nom du modèle (utilisé pour la jointure avec la table modeles)
    mdl.nom AS modele_nom,
    -- Alias pour la cylindrée du modèle (utilisé pour la jointure avec la table modeles)
    mdl.cylindre AS modele_cylindre
FROM
-- Depuis la table voiture
    voitures v
JOIN
-- Jointure avec la table marque en utilisant l'identifiant de la marque
    marque m ON v.Id_marque = m.Id
JOIN
-- Jointure avec la table modeles en utilisant l'identifiant du modèle
    modeles mdl ON m.Id_modele = mdl.Id";

    // Préparez la requête SQL en utilisant l'objet PDO
    $statement = $pdo->prepare($query);

    // Exécutez la requête préparée
    $statement->execute();

    // Récupérez tous les résultats de la requête sous forme de tableau associatif
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Renvoyez le tableau associatif contenant les données des voitures
    return $result;
}