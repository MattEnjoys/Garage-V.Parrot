<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/admin.php";

$jours = getAllDays($pdo);
?>

<div class="row my-5">
    <div class="footer col-md-4 col-sm-12 mb-1">
        <h1 class="py-5 h1">Horaires d'ouverture</h1>
        <form method="post"
              action="modification.php">
            <ul class="nav flex-column h2">
                <?php foreach ($jours as $jour): ?>
                    <li class="nav-item mb-2">
                        <hr>
                        <p class="p-0 text-body-secondary text-center mb-1 h2-h5">
                            <?= $jour ?> :
                            <!-- Sélecteur 1 (Matin ouverture) -->
                        <div class="p-0 text-body-secondary mb-1 h2-h5">
                            <label for="horaires_<?= $jour ?>_matin">Heures d'ouverture matin</label>
                            <select name="horaires_<?= $jour ?>_matin"
                                    id="horaires_<?= $jour ?>_matin">
                                <option value="ferme"
                                        selected>00:00</option>
                                <?php
                                // Boucle pour générer les intervalles horaires de 8:00 à 12:30
                                for ($heure = 8; $heure <= 12; $heure++) {
                                    for ($minute = 0; $minute < 60; $minute += 15) {
                                        if ($heure < 12 || ($heure == 12 && $minute <= 30)) {
                                            $heure_format = str_pad($heure, 2, '0', STR_PAD_LEFT);
                                            $minute_format = str_pad($minute, 2, '0', STR_PAD_LEFT);
                                            $heure_minute = "$heure_format:$minute_format";
                                            echo "<option value=\"$heure_minute\">$heure_minute</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!-- Fin Sélecteur 1 (Matin ouverture) -->
                        <!-- Sélecteur 1 (Matin fermeture) -->
                        <div class="p-0 text-body-secondary mb-1 h2-h5">
                            <label for="horaires_<?= $jour ?>_fermeture_matin">Heures de fermeture matin</label>
                            <select name="horaires_<?= $jour ?>_fermeture_matin"
                                    id="horaires_<?= $jour ?>_fermeture_matin">
                                <option value="ferme"
                                        selected>00:00</option>
                                <?php
                                // Boucle pour générer les intervalles horaires de 8:00 à 12:30
                                for ($heure = 8; $heure <= 12; $heure++) {
                                    for ($minute = 0; $minute < 60; $minute += 15) {
                                        if ($heure < 12 || ($heure == 12 && $minute <= 30)) {
                                            $heure_format = str_pad($heure, 2, '0', STR_PAD_LEFT);
                                            $minute_format = str_pad($minute, 2, '0', STR_PAD_LEFT);
                                            $heure_minute = "$heure_format:$minute_format";
                                            echo "<option value=\"$heure_minute\">$heure_minute</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!-- Fin Sélecteur 1 (Matin fermeture) -->
                        <!-- Sélecteur 2 (Après-midi ouverture) -->
                        <div class="p-0 text-body-secondary mb-1 h2-h5">
                            <label for="horaires_<?= $jour ?>_apres_midi">Heures d'ouverture après-midi</label>
                            <select name="horaires_<?= $jour ?>_apres_midi"
                                    id="horaires_<?= $jour ?>_apres_midi">
                                <option value="ferme"
                                        selected>00:00</option>
                                <?php
                                // Boucle pour générer les intervalles horaires de 13:00 à 20:30
                                for ($heure = 13; $heure <= 20; $heure++) {
                                    for ($minute = 0; $minute < 60; $minute += 15) {
                                        if ($heure < 20 || ($heure == 20 && $minute <= 30)) {
                                            $heure_format = str_pad($heure, 2, '0', STR_PAD_LEFT);
                                            $minute_format = str_pad($minute, 2, '0', STR_PAD_LEFT);
                                            $heure_minute = "$heure_format:$minute_format";
                                            echo "<option value=\"$heure_minute\">$heure_minute</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!-- Fin Sélecteur 2 (Après-midi ouverture) -->
                        <!-- Sélecteur 2 (Après-midi fermeture) -->
                        <div class="p-0 text-body-secondary mb-1 h2-h5">
                            <label for="horaires_<?= $jour ?>_fermeture_apres_midi">Heures de fermeture après-midi</label>
                            <select name="horaires_<?= $jour ?>_fermeture_apres_midi"
                                    id="horaires_<?= $jour ?>_fermeture_apres_midi">
                                <option value="ferme"
                                        selected>00:00</option>
                                <?php
                                // Boucle pour générer les intervalles horaires de 13:00 à 20:30
                                for ($heure = 13; $heure <= 20; $heure++) {
                                    for ($minute = 0; $minute < 60; $minute += 15) {
                                        if ($heure < 20 || ($heure == 20 && $minute <= 30)) {
                                            $heure_format = str_pad($heure, 2, '0', STR_PAD_LEFT);
                                            $minute_format = str_pad($minute, 2, '0', STR_PAD_LEFT);
                                            $heure_minute = "$heure_format:$minute_format";
                                            echo "<option value=\"$heure_minute\">$heure_minute</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!-- Fin Sélecteur 2 (Après-midi fermeture) -->
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button type="submit"
                    class="btn btn-primary btn-lg">Mettre à jour</button>
        </form>
    </div>
</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>