<?php

namespace MagicDeck\Services\Builder;

use MagicDeck\Entity\Card;
use MagicDeck\Services\Builder\ColorBuilderService;
use MagicDeck\Services\ApiService\ApiService;


/**
 * This class permits to build a card and then put the value inside
 */
class CardBuilderService
{

    function cardListBuilder(array $card): array
    {
        $cardList = [];
        $colorBuilder = new ColorBuilderService();
        
        $apiService = new ApiService();
        // $colorBuilder->colorListBuilder($apiCardList);

        // iteration
        foreach ($card as $value) {

            // sanitize
            if (!property_exists($value, "manaCost")) {
                $value->manaCost = "";
                continue;
            }
            if (!property_exists($value, "name")) {
                $value->name = "";
            }
            if (!property_exists($value, "description")) {
                $value->description = "";
            }
            if (!property_exists($value, "image")) {
                $value->image = "";
            }
            if (!property_exists($value, "type")) {
                $value->type = "";
            }
            if (!property_exists($value, "color")) {
                $value->color = "";
            }

            // push data in the Card Object
            $card = new Card();
            $card->setName($value->name);
            $card->setManaCost($value->manaCost);
            $card->setDescription($value->text);
            $card->setImage($value->imageUrl);
            $card->setType($value->type);
            $cardList[] = $card;
            $card->setColorList($value->colors);

        }
        return $cardList;
    }
}











































// $cardList = [];
//         $colorBuilder = new ColorBuilderService();
//         $colorBuilder->colorListBuilder($cardList);

//         $apiCardBuilder = new ApiCardBuilderService();
//         foreach ($apiCardList as $value) {
//             $apiCardBuilder->buildCard($value);
//             if ($value->imageUrl) {
//                 $card = new Card();
//                 $card->setManaCost($value->manaCost);
//                 $card->setName($value->name);
//                 $card->setDescription($value->text);
//                 $card->setImage($value->imageUrl);
//                 $card->setType($value->type);
//                 $card->setColorList($value->colors);
//                 $cardList[] = $card;

//                 var_dump($cardList);
//                 die;
//             }
//         }
//         return $cardList;
