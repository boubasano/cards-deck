<?php
 namespace MagicDeck\Services;

 use MagicDeck\Services\CardService;
use GuzzleHttp\Client;


class RetrieverService
{
function requestData()
{
    $client = new Client(['verify' => false

    ]);
    $response = $client->get('http://api.magicthegathering.io/v1/cards');
    
return $response->getBody()->getContents();
   
   
}
    
}
