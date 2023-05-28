<?php
use Todolist\Mvc\Repository\ListRepository;
use Todolist\Mvc\Controller\{
    Controller, Error404Controller, FormController,ListController
};

require_once __DIR__ . "/../vendor/autoload.php";

$dbPath = __DIR__ . "/../banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$listRepository = new ListRepository($pdo);

$routes = require_once "../config/routes.php";

$pathInfo = $_SERVER["PATH_INFO"] ?? "/";
$httpMethod = $_SERVER["REQUEST_METHOD"];

$key = "$httpMethod|$pathInfo";

if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass($listRepository);
} else {
    $controller = new Error404Controller();
}

$controller->process();

?>