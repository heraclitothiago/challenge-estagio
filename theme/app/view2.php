<?php $v->layout("_theme"); ?>

<div class="container">
    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2><?= $post['title']; ?></h2>
            <p style="margin-bottom: 1.25rem; color: #999">by userId <a href="#"><?= $post['userId']; ?></a></p>
            <p><?= $post['body']; ?></p>
        </div>
    </div>
</div>
