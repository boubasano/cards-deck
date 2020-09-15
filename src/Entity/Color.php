<?php

namespace MagicDeck\Entity;

class Color
{

    private int $id;
    private string $value;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

}
