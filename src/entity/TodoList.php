<?php

namespace Todolist\Mvc\Entity;

class TodoList {
    public readonly string $name;
    public int $id;
    public string $observations;
    public readonly string $stateList;

    public function __construct(string $name, string $stateList, string $observations) {
        $this->name = $name;
        $this->stateList = $stateList;
        $this->observations = $observations;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
    
}