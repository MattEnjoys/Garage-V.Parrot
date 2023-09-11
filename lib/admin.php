<?php
function getUtilisateurs(PDO $pdo, int $limit = null, int $page = null): array|bool
{
    $sql = "SELECT * FROM utilisateurs ORDER BY Id DESC";

    if ($limit && !$page) {
        $sql .= " LIMIT  :limit";
    }
    if ($limit && $page) {
        $sql .= " LIMIT :offset, :limit";
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page - 1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }

    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUtilisateurById(PDO $pdo, int $id): array|bool
{
    $query = $pdo->prepare("SELECT * FROM utilisateurs WHERE Id = :Id");
    $query->bindValue(":Id", $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}


function getTotalUtilisateur(PDO $pdo): int
{
    $sql = "SELECT COUNT(*) as total FROM utilisateurs;";

    $query = $pdo->prepare($sql);

    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    return $result['total'];
}

// Fonction pour vérifier si un utilisateur existe dans la base de données
function utilisateurExists($pdo, $id)
{
    try {
        $query = "SELECT COUNT(*) FROM utilisateurs WHERE Id = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $count = $stmt->fetchColumn();
        return ($count > 0);
    } catch (PDOException $e) {
        // Gérer les erreurs de base de données ici
        return false;
    }
}

// Fonction pour supprimer un utilisateur de la base de données
function deleteUtilisateur($pdo, $id)
{
    try {
        // Vérifiez d'abord si l'utilisateur existe avant de le supprimer
        if (utilisateurExists($pdo, $id)) {
            $query = "DELETE FROM utilisateurs WHERE Id = ?";
            $stmt = $pdo->prepare($query);
            return $stmt->execute([$id]);
        } else {
            // L'utilisateur n'existe pas, retournez false
            return false;
        }
    } catch (PDOException $e) {
        // Gérer les erreurs de base de données ici
        return false;
    }
}

function updatePassword($pdo, $id, $newPassword)
{
    try {
        // Hasher le nouveau mot de passe (assurez-vous d'utiliser des méthodes de hachage sécurisées)
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("UPDATE utilisateurs SET password = :password WHERE id = :id");
        $stmt->bindParam(":password", $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        return $stmt->execute();
    } catch (PDOException $e) {
        // Gérer les erreurs de base de données ici
        return false;
    }
}
// Pages ouvertures.php et modification.php
function getAllDays(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT nom FROM jours");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_COLUMN);
}

// Pages ouvertures.php
function getOpeningHoursForDay($pdo, $day)
{
    try {
        $query = "SELECT ouverture, fermeture FROM jours
                  INNER JOIN horaires ON jours.Id = horaires.Id_jour
                  WHERE jours.nom = :day";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':day', $day, PDO::PARAM_STR);
        $stmt->execute();

        $morningHours = '';
        $afternoonHours = '';

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ouverture = $row['ouverture'];
            $fermeture = $row['fermeture'];

            // Séparez les horaires du matin et de l'après-midi
            if (empty($morningHours)) {
                $morningHours = "Ouvert de $ouverture à $fermeture";
            } else {
                $afternoonHours = "Ouvert de $ouverture à $fermeture";
            }
        }

        if (!empty($morningHours) && !empty($afternoonHours)) {
            return "Matin : $morningHours<br>Après-midi : $afternoonHours";
        } elseif (!empty($morningHours)) {
            return "Matin : $morningHours";
        } elseif (!empty($afternoonHours)) {
            return "Après-midi : $afternoonHours";
        } else {
            return "Fermé";
        }
    } catch (PDOException $e) {
        // Gérez les erreurs de base de données ici (par exemple, enregistrer dans un fichier journal)
        error_log('Erreur de base de données : ' . $e->getMessage());
        return false; // En cas d'erreur, renvoie "false"
    }
}