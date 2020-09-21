<?php

namespace MagicDeck\Services\Utilitaries;

class View {

function view($path, $vars = null, $include = true) {

// Format : resource.page

$pathArray = explode('.', $path);

$url = '';

foreach($pathArray as $p) {
    $url .= $p . '/';
}

$url = substr($url, 0, -1);

$url .= '.php';

$fullUrl = 'templates/' . $url;

if ($include) {

    if ($vars) { extract($vars); }
    include($fullUrl);
}

return $fullUrl;

}
}