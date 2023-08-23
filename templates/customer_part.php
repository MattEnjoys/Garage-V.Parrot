<div class="card m-3">
    <div class="card-body m-2">
        <h5 class="card-title1 Red1 h3-p">
            <?= $customer["firstname"] ?>
        </h5>
        <h6 class="card-subtitle Pink h3-p mb-2">
            <?= $customer["lastname"] ?>
        </h6>
        <p class="card-text Red2 h3-p">
            <?= $customer["content"] ?>
        </p>
        <div>
            <h5 class="card-title1 text-center h3-p Black">
                <?= $customer["note"] ?>
            </h5>
        </div>
    </div>
</div>