<?php

namespace MagicDeck\Form;

function newsForm ():void
{
$form = new Form('form_ID', 'horizontal', 'class=myclass', 'materialize-css');
$form->setAction($url, [$add_get_vars = true]);
$form->addInput('text', 'name', '', 'Name', 'required=required');
$form->addInput('text', 'first-name', '', 'First name', 'required=required');
$form->addBtn('button', 'cancel', 0, 'Cancel', 'class=btn btn-warning ladda-button, data-style=zoom-in', 'btn-group');
$form->addBtn('submit', 'submit-btn', 1, 'Submit', 'class=btn btn-success ladda-button, data-style=zoom-in', 'btn-group');
$form->printBtnGroup('btn-group');


}

    
   






















// $form = new Form($form_ID, $layout = 'horizontal', $attr = 'onclick=alert(\'formulaire envoyé\')', $framework = 'Material design');

//   /**
//     * Sets form layout options to match your framework
//     * @param array $user_options (Optional) An associative array containing the
//     *                            options names as keys and values as data.
//     */
// $form->setOptions($options);

// /**
//  * By default the mode is on production
//  */
// $form->setMode($mode);

// /**
//  * the method used is POST, called only to change the method
//  */
// $form->setMethod($method);

// /**
//  * By default Action is set on .htmlspecialchars($_SERVER["PHP_SELF"])
//  * used to prevent html or javascript injections 
//  * if $add_get_vars is set to false,url vars will be removed from destination page.
//  * Example: www.myUrl.php?var=value => www.myUrl.php
//  */
// $form->setAction($url, [$add_get_vars = true]);


// /**
//  * We can add many input on same form
//  */
// $form->startFieldset('legend', $fieldset_attr = '', $legend_attr = '');
//  // code here
// $form->endFieldset();

   