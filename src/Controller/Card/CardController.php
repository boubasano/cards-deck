<?php

namespace MagicDeck\Controller\Card;

use MagicDeck\Services\CardService;
use MagicDeck\Controller\Controller;


class CardController extends Controller
{

    function showAll()
    {
        $cardService = new CardService();
        $cardList = $cardService->findAll();
        $page = filter_input(INPUT_GET, "page");
        $totalPages = 321;
        if (!$page) {
            $page = 1;
        } 
        $msg= strtoupper('malheureusement pas de pages ici vous pouvez toujours nous aider à faire grossir notre catalogue');

        if ($page>$totalPages){

          echo  "<script type='text/javascript'>alert('$msg');</script>";
             
        }
        $count = 10;
        $offset = ($page-1) * $count;

        return $this->render('cards/all.php', [
            'cardList' => $cardList,
            'page' => $page,
            'totalPages' => $totalPages,
            'count' => $count,
            'offset' => $offset,
            'msg'   => $msg,
        ]);

        // include __DIR__ . "/../../templates/base.php";
    }
}
