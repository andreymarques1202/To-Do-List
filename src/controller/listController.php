<?php

namespace Todolist\Controller;

use Todolist\Repository\ListRepository;

class ListController {
    public function __construct(private ListRepository $todolist) {
        
    }

    public function process (): void {
        $list = $this->todolist->all();

        require_once __DIR__ . "/../../views/todolist.php";
    }
}