<?php

$mainMenu = [
    "index.php" => [
        "menu_title" => "Accueil",
        "head_title" => "Accueil | Garage V. Parrot",
        "meta_description" => "V.Parrot est un garage de renom de la ville de Toulouse. Depuis plus de quinze ans, Monsieur Parrot propose des services professionnels de réparation automobile. Il est également spécialistes en entretien, diagnostic et réparation de véhicules.",
        "exclude" => false
    ],
    "carrosserie.php" => [
        "menu_title" => "Carrosserie",
        "head_title" => "Carrosserie | Garage V. Parrot",
        "meta_description" => "Tous les services de carrosserie proposés par le garage.",
        "exclude" => false
    ],
    "mecanique.php" => [
        "menu_title" => "Mécanique",
        "head_title" => "Mécanique | Garage V. Parrot",
        "meta_description" => "Tous les services de mécanique proposés par le garage.",
        "exclude" => false
    ],
    "entretien.php" => [
        "menu_title" => "Entretien",
        "head_title" => "Entretien | Garage V. Parrot",
        "meta_description" => "Tous les services d'entretien proposés par le garage.",
        "exclude" => false
    ],
    "vehicules_d_occasion.php" => [
        "menu_title" => "Véhicules d'occasion",
        "head_title" => "Véhicules d'occasion | Garage V. Parrot",
        "meta_description" => "Garage V.Parrot, c'est également des véhicules d'occasion révisés, nettoyés et garantis deux ans.",
        "exclude" => false
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
        "meta_description" => "Contacter les équipes de V.Parrot.",
        "exclude" => false
    ],
    "espace_pro.php" => [
        "menu_title" => "Espace Pro",
        "head_title" => "Espace Pro | Garage V. Parrot",
        "meta_description" => "Espace dédiés aux professionnels.",
        "exclude" => false
    ],
];


/**
 * Tableau représentant le menu principal de l'interface d'administration.
 * Chaque élément du tableau est une page de l'interface d'administration avec ses métadonnées associées.
 * Chaque élément est représenté par une clé correspondant au nom du fichier de la page,
 * et une valeur étant un tableau associatif contenant les métadonnées suivantes :
 * - "menu_title" : Le titre affiché dans le menu pour cette page.
 * - "head_title" : Le titre affiché dans l'en-tête de la page (balise <title>).
 * - "meta_description" : La description utilisée dans la balise meta pour le référencement.
 */
$mainMenuAdmin = [
    "liste.php" => [
        "menu_title" => "Liste des employés",
        "head_title" => "Liste employés",
        "meta_description"
        => "Voir tous les employé enregistrés."
    ],
    "inscription.php" => [
        "menu_title" => "Nouvel employé",
        "head_title" => "Nouvel employé",
        "meta_description"
        => "Ajouter un nouvel employé."
    ],
];

// $mainMenuEmployes = [
//     "index_admin.php" => [
//         "menu_title" => "Employes",
//         "head_title" => "Accueil Admin TechTrendz",
//         "meta_description"
//         => "Admin TechTrendz"
//     ],
//     "index_employes.php" => [
//         "menu_title" => "Employes",
//         "head_title" => "Arcticles TechTrendz",
//         "meta_description"
//         => "Les articles de TechTrendz"
//     ],
// ];