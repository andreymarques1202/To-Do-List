<?php
namespace Todolist\Mvc\Controller;

use Todolist\Mvc\Repository\ListRepository;

class DeleteListController implements Controller {
    public function __construct(private ListRepository $listRepository) {
        
    }

    public function process(): void
    {
        $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
        if ($id === null || $id === false) {
            header("Location: /?sucesso=0");
            return;
        }

        $success = $this->listRepository->remove($id);
        if ($success === false) {
            header("Location: /?sucesso=0");
        } else {
            header("Location: /?sucesso=1");
        }
    }
}