<?php

namespace Todolist\Mvc\Entity;

class Todolist {
    public readonly string $name;
    public int $id;
    public string $observations;

    public function __construct(string $name, public string $state) {

    }

    public function setId(int $id): void {
        $this->id = $id;
    }
    
}