<?php

namespace Todolist\Mvc\Controller;

use Todolist\Mvc\Entity\TodoList;
use Todolist\Mvc\Repository\ListRepository;

class EditListController {
    public function __construct(private ListRepository $listRepository)
    {
        
    }

    public function process() {
        $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
        if ($id === false || $id === null) {
            header("Location: /?sucesso=0");
            return;
        }

        $name = filter_input(INPUT_POST, "name");
        if ($name === false) {
            header("Location: /?sucesso=0");
            return;
        }

        $stateList = filter_input(INPUT_POST, "state");
        if ($stateList === false) {
            header("Location: /?sucesso=0");
            return;
        }

        $observations = filter_input(INPUT_POST, "observations");
        if ($observations === false) {
            header("Location: /?sucesso=0");
            return;
        }

        $list = new TodoList($name, $stateList, $observations);
        $list->setId($id);

        $success = $this->listRepository->update($list);

        if ($success === false) {
            header("Location: /?sucesso=0");
        } else {
            header("Location: /?sucesso=1");
        }
    }
}