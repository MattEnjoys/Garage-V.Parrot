<?php
// require_once __DIR__ . "/lib/cards.php";
?>
<div class="CardCustomers">
    <div class="ContentCard col d-flex justify-content-center p-3">
        <div class="card B-Grey">
            <div class="card-body">
                <h5 class="card-title h2 text-center text-uppercase p-2 B-Red1">
                    <?= $card["title"] ?>
                </h5>
                <p class="card-text h3-p p-2">
                    <?= $card["content"] ?>
                </p>
            </div>
        </div>
    </div>
</div>