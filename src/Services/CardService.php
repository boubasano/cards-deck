<?php

namespace MagicDeck\Services;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use MagicDeck\Entity\Card;



class CardService {

    private $res;
    private $client;

function findAll () 
{

 $apiData = __DIR__.'/../../var/cache/card.json';

if(!file_exists($apiData)){
    $client = new Client();
    //requete client pour recuperer nos api
    $res = $client->request('GET', 'https://api.magicthegathering.io/v1/cards'
    , ['verify' => false]);

    //permet de mettre en cache nos données reçues 
    $requestSaved = file_put_contents($apiData, $res->getBody()->getContents());
}else
$responseJson = file_get_contents($apiData);

$jsonToObject = json_decode($requestSaved);
$cardList = [];

foreach ($cardList->cards as $value) {
    $card = new Card();
    if (!property_exists($value, "manaCost")) {
        $value->manaCost = "";
    }
    if (!property_exists($value, "name")) {
        $value->text = "";
    }
   $card->setName($value->name);
   $card->setManaCost($value->manaCost);
}
}








// // Send an asynchronous request.









// // Send an asynchronous request.
