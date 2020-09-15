<?php

namespace MagicDeck\Entity;

class Card
{
    private int $id;
    private string $name;
    private string $mana_cost;
    public array $colorList;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMana_cost(): ?string
    {
        return $this->mana_cost;
    }

    public function setMana_cost(string $mana_cost): self
    {
        $this->mana_cost = $mana_cost;

        return $this;
    }

    public function getColorList(): ?array
    {
        return $this->colorList;
    }

    public function setColorList(string $colorList): self
    {
        $this->colorList = $colorList;

        return $this;
    }
}
