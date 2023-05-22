<?php

namespace Todolist\entity;

class Todolist {
    public readonly string $name;
    public readonly int $id;
    public readonly string $observations;

    public function __construct($name, $id, $observations) {
        
    }

    public function setId($id): void {
        $this->id = $id;
    }
    
}