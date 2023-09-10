<?php
/**
 * Ajoute un nouvel utilisateur à la base de données avec le rôle approprié.
 *
 * @param PDO $pdo L'objet PDO pour la connexion à la base de données.
 * @param string $prenom Le prénom de l'utilisateur à ajouter.
 * @param string $nom Le nom de famille de l'utilisateur à ajouter.
 * @param string $email L'adresse e-mail de l'utilisateur à ajouter.
 * @param string $password Le mot de passe de l'utilisateur à ajouter (sera haché avant d'être stocké dans la base de données).
 * @return bool Renvoie true en cas de succès, false en cas d'échec.
 */
function addUser(PDO $pdo, string $prenom, string $nom, string $email, string $password)
{
    // Compte le nombre d'utilisateurs actuellement dans la base de données.
    $userCount = $pdo->query("SELECT COUNT(*) FROM utilisateurs")->fetchColumn();

    // Détermine le rôle de l'utilisateur en fonction du nombre d'utilisateurs.
    if ($userCount === 0) {
        $role = 1; // Premier utilisateur, "SuperAdmin".
    } elseif ($userCount === 1) {
        $role = 2; // Deuxième utilisateur, "Admin".
    } else {
        $role = 3; // Tous les autres utilisateurs, "Employé".
    }

    // Prépare la requête SQL pour insérer un nouvel utilisateur dans la table 'utilisateurs'.
    $sql = "INSERT INTO `utilisateurs` (`prenom`, `nom`, `email`, `password`, `Id_role`) VALUES (:prenom, :nom, :email, :password, :Id_role);";

    // Prépare la requête SQL en utilisant PDO.
    $query = $pdo->prepare($sql);

    // Hache le mot de passe avant de le stocker dans la base de données.
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Lie les valeurs des paramètres de la requête SQL aux variables passées en argument à la fonction.
    $query->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindParam(':nom', $nom, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':Id_role', $role, PDO::PARAM_INT);

    // Exécute la requête SQL préparée et retourne le résultat (true si l'insertion est réussie, sinon false).
    return $query->execute();
}



/**
 *  Vérifie si les informations d'identification (email et mot de passe) d'un utilisateur sont valides.
 *
 * @param PDO $pdo L'objet PDO pour la connexion à la base de données.
 * @param string $email L'adresse e-mail de l'utilisateur à vérifier.
 * @param string $password Le mot de passe de l'utilisateur à vérifier.
 * @return array|false Renvoie les informations de l'utilisateur si les informations de connexion sont valides, sinon renvoie false.
 */
function verifyUserLoginPassword(PDO $pdo, string $email, string $password): array|bool
{
    // Prépare une requête SQL pour sélectionner toutes les colonnes de la table 'utilisateurs' où l'email correspond à celui fourni.
    $query = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");

    // Lie la valeur de :email au paramètre $email.
    $query->bindParam(':email', $email, PDO::PARAM_STR);

    // Exécute la requête SQL.
    $query->execute();

    // Récupère la première ligne de résultat de la requête SQL (correspondant à l'utilisateur avec l'email donné).
    $user = $query->fetch();

    // érifie si $user existe (c'est-à-dire qu'un utilisateur avec cet email a été trouvé) et si le mot de passe correspond en utilisant password_verify.
    if ($user && password_verify($password, $user['password'])) {
        // Retourne l'ensemble des informations de l'utilisateur s'il est authentifié avec succès.
        return $user;
    } else {
        // Retourne false si l'authentification a échoué (utilisateur introuvable ou mot de passe incorrect)
        return false;
    }
}