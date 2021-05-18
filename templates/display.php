<?php
include __DIR__ . "/header.php";
?>
<!-- SECTION CARDS -->
<section id="gallery" class="mt-5">
    <div class="container">
        <div class="row">

            <?php
            foreach ($items as $oneItem) {
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="<?= $oneItem->img ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $oneItem->name ?></h5>
                            <p class="card-text"><?= $oneItem->desc ?></p>
                            <p class="display-5"><?= $oneItem->price ?></p>
                            <p>@<?= $oneItem->user->nickname ?></p>
                            <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>