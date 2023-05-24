<?php

namespace Todolist\Mvc\Controller;

use Todolist\Mvc\Repository\ListRepository;

class ListController {
    public function __construct(private ListRepository $todolist) {
        
    }

    public function process (): void {
        $list = $this->todolist->all();

        require_once __DIR__ . "/../../views/todolist.php";
    }
}