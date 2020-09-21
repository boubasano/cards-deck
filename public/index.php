<?php

namespace MagicDeck;

/**
 * composer autoload
 */
require __DIR__. "/../vendor/autoload.php";

use MagicDeck\Controller\CardController;

$url = filter_input(INPUT_SERVER, "REQUEST_URI");

if ("/cards" === $url || "/cards?" === substr($url, 0, 7)) {
    $controller = new CardController();
    $controller->showAll();
}
else if ("/cards?color=".$url === substr($url, 0, 7)) {
    $controller = new CardController();
    $controller->showAll();
}
else if ("/cards?page=".$url === substr($url, 0, 7)) {
    $controller = new CardController();
    $controller->showAll();
}
// if ($requestURL == '/cards') {
//     // do stuff for the homepage
// }

// elseif ($requestURL == '/register') {
//     // do stuff for registration
// }

// // should match just "/some-unique-url-here"
// elseif (preg_match("/([\/A-Za-z0-9\-]+)/",$requestURL)) { 
//     // query database for that url variable
// }

// // should match "/some-unique-url/and-another-unique-url"
// elseif (preg_match("(^\/[A-Za-z0-9\-]+\/[A-Za-z0-9\-]+)/",$requestURL)) {
//     // query database for first and second variable
// }

// else {
//     // 404 stuff
// }
