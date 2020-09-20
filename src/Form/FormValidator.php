<?php

namespace MagicDeck\Form;

@session_start();
include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/src/Form/Form.php';

/* =============================================
    validation if posted
============================================= */


if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken('my-form') === true) {

    // create validator & auto-validate required fields
    $validator = Form::validate('my-form');

    // additional validation
    $validator->maxLength(100)->validate('message');
    $validator->email()->validate('user-email');

    // check for errors
    if ($validator->hasErrors()) {
        $_SESSION['errors']['my-form'] = $validator->getAllErrors();
    } else {
        $email_config = array(
            'sender_email'    => 'you@your-email.com',
            'sender_name'     => 'Php Form Builder',
            'recipient_email' => addslashes($_POST['user-email']),
            'subject'         => 'Contact from Php Form Builder',
            'filter_values'   => 'my-form, submit-btn, token'
        );
        $sent_message = Form::sendMail($email_config);
        Form::clear('my-form');
    }
}


