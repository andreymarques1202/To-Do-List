<?php
namespace Todolist\Mvc\Controller;

use Todolist\Mvc\Repository\ListRepository;

class FormController implements Controller {
    public function __construct(private ListRepository $todolist) {

    }
    
    public function process(): void {
        $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
        $list = null;

        if($id !== false && $id !== null) {
            $list = $this->todolist->find($id);
        }

        require_once __DIR__ . "/../../views/create.php";
    }
}