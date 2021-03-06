<?php

namespace MagicDeck\Entity;

class User
{

    private int $id;
    private string $email;
    private string $password;
    private int $creation;
    private string $image;
    private array $userList;

    // public function __construct($userList)
    // {
    //     $this->userList = $userList;
    //     $this->email = $userList['boubasano@yahoo.fr'];
    //     $this->password = $userList['admin'];

    // }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCreation(): ?string
    {
        return $this->creation;
    }

    public function setCreation(string $creation): self
    {
        $this->creation = $creation;

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

    public function getUserList(): ?array
    {
        return $this->userList;
    }

    public function setUserList(string $userList): self
    {
        $this->userList = $userList;

        return $this;
    }
}
