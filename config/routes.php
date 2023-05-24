<?php 
use Todolist\Mvc\Controller\FormController;
use Todolist\Mvc\Controller\ListController;

return [
    "GET|/" => ListController::class,
    "GET|/create" => FormController::class,
    "POST|/create" => FormController::class 
];