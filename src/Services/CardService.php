<?php

namespace MagicDeck\Services;

use MagicDeck\Services\ApiService\ApiService;
use MagicDeck\Services\Builder\CardBuilderService;

/**
 * This service use the ApiService to get data and to keep it
 */
class CardService
{
    public function findAll(): array
    {
        $apiService = new ApiService();
        $cardBuilder = new CardBuilderService();

        $url = $apiService->requestData('https://api.magicthegathering.io/v1/cards', __DIR__.'/../../../var/cache/card.json');
        $cardList = [];
        $cardList = $cardBuilder->cardListBuilder($cardList);
       
        return $cardList;
      
    }

}





// // Send an asynchronous request.









// // Send an asynchronous request.
