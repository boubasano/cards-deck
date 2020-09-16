<?php

use MagicDeck\Services\CardService;

require __DIR__. "/../vendor/autoload.php";

$result = new CardService();




var_dump($result->findAll());



// $requestURL = $_SERVER['REQUEST_URI'];

// if ($requestURL == '/') {
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
