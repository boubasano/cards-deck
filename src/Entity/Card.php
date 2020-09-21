<?php

namespace MagicDeck\Entity;

class Card
{
    
    private int $id;

    private string $name;

    private string $manaCost;

    public array $colorList;

    private string $type;

    private string $description;
    
    private string $image;




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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string  $type): self
    {
        $this->type = $type;

        return $this;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    
}


