<?php

namespace Todolist\Mvc\Controller;

class Error404Controller implements Controller {
    public function process(): void
    {
        http_response_code(404);
    }
}