<?php
namespace MagicDeck\Services\ApiService;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

/**
 * This class service go to search data with url and  put in the cache
 * used by CardService
 */

class ApiService{

function requestData(string $url, string $filename): \stdClass
{
 $url = 'https://api.magicthegathering.io/v1/cards';
 $filename = __DIR__.'/../../../var/cache/card.json';

if(!file_exists($url)){
    $client = new Client();
    //requete client pour recuperer nos api
    $res = $client->request('GET', $url
    , ['verify' => false]);
    
    //permet de mettre en cache nos données reçues 

    file_put_contents($filename, $res->getBody()->getContents($url)); 
    
      
}else

file_get_contents($filename);

$data = json_decode(file_get_contents($filename));

 return $data;
}
}





























// namespace MagicDeck\Services\ApiService;

// class ApiService
// {

//     private string $includePath;

//     public function __construct()
//     {
//         $this->includePath = __DIR__ . "/../../../var/cache/";
//     }

//     public function fetch(string $url, string $filename): \stdClass
//     {
//         $filename = $this->includePath . $filename;
//         if (!file_exists($filename)) {
//             $contents = file_get_contents($url);
//             file_put_contents($filename, $contents);
//         } else {
//             $contents = file_get_contents($filename);
//         }
//         return json_decode($contents);
//     }

// }












































































