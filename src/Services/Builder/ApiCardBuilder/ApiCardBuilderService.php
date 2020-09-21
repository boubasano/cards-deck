<?php

namespace MagicDeck\Services\Builder\ApiCardBuilder;

class ApiCardBuilderService
{

    public function buildCard(\stdClass $card): \stdClass
    {
       
        $card->imageUrl = $card->imageUrl ?? "";
        $card->text = $card->text ?? "";
        $card->manaCost = $card->manaCost ?? "";
        $card->name = $card->name ?? "";
        $card->type = $card->type ?? "";

        return $card;
    }
}



















// namespace MagicDeck\Service\Builder;
// class ApiCardBuilderService
// {

//     public function buildCard(\stdClass $card): \stdClass
//     {   
//         $card->imageUrl = $card->imageUrl ?? "";
//         $card->text = $card->text ?? "";
//         $card->manaCost = $card->manaCost ?? "";
//         return $card;
//     }

// }