<?php

namespace Todolist\Mvc\Controller;

use Todolist\Mvc\Repository\ListRepository;

class ListController {
    public function __construct(private ListRepository $listRepository) {
        
    }

    public function process (): void {
        $todolist = $this->listRepository->all();

        require_once __DIR__ . "/../../views/todolist.php";
    }
}