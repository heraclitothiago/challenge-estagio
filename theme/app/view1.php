<?php $v->layout("_theme"); ?>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php
            foreach ($posts as $post) {
                echo '
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">' .
                    "<a href='".
                    url()
                    ."'>".str_limit_chars(str_title($post["title"]), 25)."</a>"
                    . '</h5>
                        <p class="card-text">' . str_limit_chars($post["body"], 115) . '</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="card-link">Card link</a>
                            <small class="text-muted">por userId ' .
                    $post["userId"] . '</small >
                        </div >
                    </div >
                </div >
            </div >
    ';
            }
            ?>
        </div>
        <?= $pagination; ?>
    </div>
</div>