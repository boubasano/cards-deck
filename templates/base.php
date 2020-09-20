<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Vote App</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="/node_modules/materialize-css/dist/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Mag</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
                <?php
                // contenu de la page
                echo $content;
                ?>
          
    </main>

    <footer>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="/node_modules/materialize-css/extras/noUiSlider/js"></script>
    <script type="text/javascript" src="/node_modules/materialize-css/dist/js/materialize.js"></script>
    <script type="text/javascript" src="/assets/js/app.js"></script>
</body>

</html>