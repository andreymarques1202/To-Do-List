<?php

use Todolist\Mvc\entity\Todolist;
use Todolist\Mvc\Repository\ListRepository;

$data = $_POST;

if($data["type"] === "create") {
    $todolist = new ListRepository($pdo);

    $success = $this->list->add(new Todolist($data["name"], $data["id"], $data["observations"]));
    if($success === false) {
        header("Location: /?sucesso=0");
    } else {
        header("Location: /?sucesso=1");
    }
    
}