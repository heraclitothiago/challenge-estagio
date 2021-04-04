<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= theme("/assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>">
    <title>App List</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= url('/')?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<?= $v->section("content"); ?>
<script src="<?= theme("/assets/js/jquery-3.5.1.slim.min.js"); ?>"></script>
<script src="<?= theme("/assets/js/bootstrap.bundle.min.js"); ?>"></script>
</body>
</html>
