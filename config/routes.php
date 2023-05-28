<?php

use Todolist\Mvc\Controller\DeleteListController;
use Todolist\Mvc\Controller\FormController;
use Todolist\Mvc\Controller\ListController;
use Todolist\Mvc\Controller\NewListController;

return [
    "GET|/" => ListController::class,
    "GET|/create" => FormController::class,
    "POST|/create" => NewListController::class,
    "GET|/delete" => DeleteListController::class
];