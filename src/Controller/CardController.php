<?php

namespace MagicDeck\Controller;

use MagicDeck\Services\CardService;
use MagicDeck\Services\Utilitaries\View;

class CardController
{

    function showAll(): void
    {
        $cardService = new CardService();
        $cardList = $cardService->findAll();
        $page = filter_input(INPUT_GET, "page");
        $total_pages = 321;
        if ($page) {
            echo $page;
        } else {
            $page = 1;
        }
        $msg= strtoupper('malheureusement pas de pages ici vous pouvez toujours nous aider à faire grossir notre catalogue');

        if ($page>$total_pages){

          echo  "<script type='text/javascript'>alert('$msg');</script>";
             
        }
        $count = 4;
        $offset = ($page-1) * $count;

        

        // $itemsperpage = "10";
        // $pagesNumber = "30";
        // $totalpages = ceil($itemsperpage / $pagesNumber);


        // if (filter_input(INPUT_GET, 'page') && is_numeric(filter_input(INPUT_GET, 'page'))) 
        // {
        //     $page = (int) filter_input(INPUT_GET, 'page');
        // } else {
        //     $page = 1;  // default page number
        // }
        // if ($page > $totalpages) {

        //     // set current page to last page
        //     $page = $totalpages;
        // }
        // // if current page is less than first page
        // if ($page < 1) {
        //     // set current page to first page
        //     $page = 1;
        // }

        // $offset = ($page - 1) * $itemsperpage;

        include __DIR__ . "/../../templates/base.php";


        //    $view = new View();
        //    $view->view('all', compact("cardList"));
    }
}
