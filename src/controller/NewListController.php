<?php
namespace Todolist\Mvc\Controller;


use Todolist\Mvc\Entity\TodoList;
use Todolist\Mvc\Repository\ListRepository;


class NewListController implements Controller {
    public function __construct(private ListRepository $listRepository) 
    {
        
    }
    public function process(): void
    {
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
$a = $_POST;

print_r($a);


        $success = $this->listRepository->add(new TodoList($name, $stateList, $observations));
        if ($success === false) {
            header("Location: /?sucesso=0");
        } else {
            header("Location: /?sucesso=1");
        }
    }

}