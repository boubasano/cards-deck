<?php

namespace MagicDeck\Services\Builder\ApiColorBuilder;

use MagicDeck\Services\Builder\ColorBuilder\ColorBuilderService;
use MagicDeck\Entity\Card;

class ApiColorBuilderService
{

    public function buildColor(array $color) : array
    {
       
       foreach($color as $value){
        $ApiColorList = [];
        if ($value->colors) {
            $colorBuilder = new ColorBuilderService;
            $cardListModel = new Card();
            $cardListModel->setManaCost($value->manaCost);
            $cardListModel->setName($value->name);
            $cardListModel->setDescription($value->text);
            $cardListModel->setImage($value->imageUrl);
            $cardListModel->setType($value->type);
            $cardListModel->setColorList = $colorBuilder->buildColorList($value->colors);
            $ApiColorList [] = $cardListModel;
        }
       }
        return $ApiColorList;
    }
}
