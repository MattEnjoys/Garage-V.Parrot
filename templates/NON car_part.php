<div class="col d-flex justify-content-center">
    <div class="card m-3"
         style="width: 18rem">
        <img src="uploads/voitures/<?= $voitures["photo"] ?>"
             class="card-img-top"
             alt="<?= $marque["nom"] ?>" />
        <div class="card-body B-Grey">
            <h5 class="h2-h5 text-center">
                <?= $marque["nom"] ?>
            </h5>
            <h5 class="h2-h5 text-center">
                <?= $modeles["nom"] ?>
            </h5>
            <p class="card-text Red1 h3-p">
                Année de construction
            </p>
            <p class="card-text-Year text-end Red1 h3-p">
                <?= $voitures["annee"] ?>
            </p>
            <p class="card-text Red1 h3-p">
                Motorisation
            </p>
            <p class="card-text-Year text-end Red1 h3-p">
                <?= $modeles["cylindre"] ?>
            </p>
            <p class="card-text Red1 h3-p">
                Kilomètres rééls
            </p>
            <p class="card-text-Year text-end Red1 h3-p">
                <?= $voitures["kilometrage"] ?>
            </p>
            <hr />
            <div class="d-flex justify-content-between m-3">
                <p class="card-text price Black h3-p">
                    Prix
                </p>
                <p class="card-text-Year price Black h3-p">
                    <?= $voitures["prix"] ?>
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <a href="vehicule_d_occasion_detaille.php?id=<?= $key ?>"
                   class="btn btn-order h2-h5 Black text-center">Fiche technique</a>
            </div>
        </div>
    </div>
</div>