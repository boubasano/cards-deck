<?php

    // set namespace
    use phpformbuilder\Form;

    // start session
    session_start();

    // include Form.php
    include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/phpformbuilder/Form.php';

    // instanciate form and add fields
    $form = new Form('my-form', 'horizontal', 'novalidate', 'material');
    $form->addInput('text', 'user-name', 'Your Name', 'name', 'required=required');
    [...]
    ?>

    
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My form</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <?php

    // call css files for plugins
    $form->printIncludes('css');
    ?>
    </head>
    <body>
    <h1 class="text-center">My form</h1>
    <div class="container">
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    <?php

    // render the form
    $form->render();
    ?>
    </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <?php

    // call required js files and js code to activate plugins
    $form->printIncludes('js');
    $form->printJsCode();
    ?>
    </body>
    </html>