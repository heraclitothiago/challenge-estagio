<?php $v->layout("_theme"); ?>

<div class="album py-5 bg-light">
    <div class="container" style="padding-top: 3rem">
        <div class="row">
            <?php
            if ($posts) {
                foreach ($posts as $post) {
                    echo '
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">' .
                        "<a href='" .
                        url("/post/{$post['userId']}/{$post['id']}")
                        . "'>" . str_limit_chars(str_title($post["title"]), 25) . "</a>"
                        . '</h5>
                        <p class="card-text">' . str_limit_chars($post["body"], 115) . '</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><a href="' . url("post/".$post['userId']) . '">por userId ' .
                        $post["userId"] . '</small >
                        </div >
                    </div >
                </div >
            </div >
    ';
                }
            } else {
                echo "<h1>Nada encontrado aqui</h1>";
            }
            ?>
        </div>
    </div>
</div>