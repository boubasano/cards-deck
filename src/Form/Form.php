<?php

use phpformbuilder\Form;
use phpformbuilder\Validator\Validator;

/* =============================================
    start session and include form class
============================================= */

$form_id = 'my-form';

session_start();
include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/phpformbuilder/Form.php';

/* =============================================
    validation if posted
============================================= */

if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken($form_id) === true) {
    // do stuff
}

/* ==================================================
    The Form
================================================== */

$form = new Form($form_id, 'horizontal', 'data-fv-no-icon=true, novalidate');
// $form->setMode('development');

// enable Ajax loading
$form->setOptions(['ajax' => true]);

// add your fields & plugins here

// render the form
$form->render();