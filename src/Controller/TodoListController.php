<?php

namespace App\Controller;

use App\Service\TodoListService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoListController extends AbstractController
{
    private TodoListService $listService;


    public function __construct(TodoListService $listService)
    {
        $this->listService = $listService;
    }

}
