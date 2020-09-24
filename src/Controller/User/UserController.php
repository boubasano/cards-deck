<?php

namespace MagicDeck\Controller\User;

use MagicDeck\Controller\Controller;
use MagicDeck\Entity\User;
use MagicDeck\Form\Form;
use MagicDeck\Form\FormInterface;
use MagicDeck\Form\UserForm;



class UserController extends Controller
{

    public function __construct()
    {
    }

    public function create()
    {
        $user = new User();
        $form = new UserForm();
        $this->userList =  $form->buildForm(["boubasano@yahoo.fr", "admin"]);
        
        var_dump($this->userList);

        $this->render("user/create.html.php", []);
    }
    
}

    





    // function handleRequest(stdClass $user): array
    // {
        
    //         $vote->question = (string)filter_input(INPUT_POST, "question");
    //         $vote->expiration = strtotime((string)filter_input(INPUT_POST, "expiration"));
    //         $vote->optionList = createOptionList(filter_input_array(INPUT_POST)["optionList"]);
    //         return handleError($vote);
    //     }
    //     $vote->optionList = createOptionList(["", ""]);
    //     return [];
    // }
    
    // function handleError(stdClass $vote): array
    // {
    //     $errorList = [];
    //     if (!$vote->question) {
    //         $errorList["question"] = true;
    //     }
    //     if (!$vote->expiration || time() > $vote->expiration) {
    //         $errorList["expiration"] = true;
    //     }
    //     foreach ($vote->optionList as $key => $option) {
    //         if (!$option->label) {
    //             $errorList["option-$key"] = true;
    //         }
    //     }
    //     return $errorList;
