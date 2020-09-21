<?php

namespace MagicDeck\Services\Builder\ColorBuilder;

use MagicDeck\Entity\Color;
class ColorBuilderService
{

    public function buildColorList(array $apiColorList): array
    {
        $colorList = [];
        foreach ($apiColorList as $colorItem) {
            $color = new Color();
            $color->setValue($colorItem);
            $colorList[] = $color;
        }
        return $colorList;
       
    }

}