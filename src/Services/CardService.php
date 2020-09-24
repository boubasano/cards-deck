<?php

namespace MagicDeck\Services;

use MagicDeck\Services\ApiService\ApiService;
use MagicDeck\Services\Builder\CardBuilder\CardBuilderService;

/**
 * This service use the ApiService to get data and to keep it
 */
class CardService
{

    /**
     * function findAll() has to be moved in card controller
     */
    public function findAll () : array
    {  

        
        $n = filter_input(INPUT_GET, "page");
        $cache = "cards";
        $url = "https://api.magicthegathering.io/v1/cards?page=$n";
        $colorList =["red", "green", "blue", "black", "white", ""];
        $color = filter_input(INPUT_GET, "color");

        if (in_array($color, $colorList)){
            $url = $url."&color=$color";
            $cache = $cache. "-$color";
        }
        $apiService = new ApiService();
        $CardBuilder = new CardBuilderService();

        $data = $apiService->requestData($url, __DIR__."/../../var/cache/$cache.json");
        $buildedCard = $CardBuilder->buildCardList($data->cards);

        return $buildedCard;
        
        

}
}





      


    //     $apiService = new ApiService();
    //     $CardBuilder = new CardBuilderService();
    //     $data = $apiService->requestData($url."?".$queryString, __DIR__."/../../var/cache/$cache.json");
    //     $cache = $cache. "-$color";
    //     $buildedCard = $CardBuilder->buildCardList($data->cards);
        
    //     return $buildedCard;
   
    // }






// // Send an asynchronous request.









// // Send an asynchronous request.
