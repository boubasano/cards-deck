<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Magic Deck</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="/node_modules/materialize-css/dist/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
</head>

<body>
    <header>
        <?php
        include __DIR__ . '/header/header.php';
        ?>
    </header>

    <main>
        <?php
        include __DIR__ . '/cards/all.php';
        ?>

    </main>

    <footer>
        <?php
        include __DIR__ . '/footer/footer.php';
        ?>

    </footer>
    <script type="text/javascript" src="/node_modules/materialize-css/extras/noUiSlider/js"></script>
    <script type="text/javascript" src="/node_modules/materialize-css/dist/js/materialize.js"></script>
    <script type="text/javascript" src="/assets/js/app.js"></script>
</body>

</html>