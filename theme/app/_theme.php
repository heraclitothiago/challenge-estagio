<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= theme("/assets/css/bootstrap.min.css"); ?>">
    <title>App List</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" title="Visualizar todos os posts" href="<?= url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<?= $v->section("content"); ?>

<script src="<?= theme("/assets/js/bootstrap.bundle.min.js"); ?>"></script>
</body>
</html>
