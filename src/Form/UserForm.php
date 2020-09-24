<?php

namespace MagicDeck\Form;

use MagicDeck\Entity\User;

/**
 * This class prepares Entity User to get filled with data from form
 */

class UserForm
{
    function buildForm($userList)
    {
        $user = new User($userList);
        $this->email = (string)filter_input(INPUT_POST, "email");
        $this->password = (string)filter_input(INPUT_POST, "password");
        // $this->userCard = (array)filter_input_array(INPUT_POST)["submit"];

        

        return $userList;
    }
}
