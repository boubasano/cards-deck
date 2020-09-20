<?php

namespace MagicDeck\Controller;

use MagicDeck\Services\CardService;
use MagicDeck\Entity\Card;

class CardController {

    function showAll ()
    {
        $cards = new CardService();
        $cards->findAll();
        
        return $cards;
        include __DIR__.'/../Services/CardService.php';
    }

    
}