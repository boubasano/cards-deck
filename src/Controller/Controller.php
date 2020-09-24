<?php

namespace MagicDeck\Controller;

use MagicDeck\Form\FormInterface;

class Controller
{
    protected string $pathTemplate = __DIR__ . "/../../templates/";

    public function render(string $pathName, array $values)
    {

        extract($values);
        include $this->pathTemplate . $pathName;
    }

    public function fill($userList): array
    {


        // $errorList[] = $form->fill($user['userList']);

    }

    /**
     * Is the form valid
     *
     * @return bool
     */
    public function isValid(): bool
    {
    }
    /**
     * Is the form submitted
     *
     * @return bool
     */
    public function isSubmitted(): bool
    {
    }
    
    
}















//     protected string $path;



// public function render($path, $data = null, $include = true) {

// $pathArray = explode('.', $path);

// $url = '';

// foreach($pathArray as $p) {
//     $url .= $p . '/';
// }

// $url = substr($url, 0, -1);

// $url .= '.php';

// $fullUrl = __DIR__ . 'templates/' . $url;

// if ($include) {

//     if ($data) { extract($data); }
//     include($fullUrl);
// }

// return $fullUrl;

// }