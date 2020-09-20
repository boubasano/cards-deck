<?php

namespace MagicDeck\Services\Builder;

use MagicDeck\Entity\Color;
class ColorBuilderService
{

    public function colorListBuilder(array $colorList): array
    {
        $colorList = [];
        foreach ($colorList as $value) {
            $color = new Color();
            $color->setValue($value);
            $colorList[] = $color;
        }
        return $colorList;
       
    }

}