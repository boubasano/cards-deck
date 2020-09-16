<?php

namespace MagicDeck\Entity;

class Card
{
    
    private int $id;
    private string $name;
    private string $manaCost;
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

    public function getManaCost(): ?string
    {
        return $this->manaCost;
    }

    public function setManaCost(string $manaCost): self
    {
        $this->manaCost = $manaCost;

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
