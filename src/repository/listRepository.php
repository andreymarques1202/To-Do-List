<?php

namespace Todolist\Mvc\Repository;

use Todolist\Mvc\Entity\Todolist;
use PDO;

class ListRepository {
    public function __construct(private PDO $pdo) {
        
    }

    public function add(Todolist $list): bool {
        $query = "INSERT INTO videos (name, state, observations) VALUES (:name, :state, :observations)";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(":name", $list->name);
        $stmt->bindValue(":state", $list->state);
        $stmt->bindValue(":observations", $list->observations);

        $result = $stmt->execute();

        $id = $this->pdo->lastInsertId();

        $list->setId(intval($id));
        
        return $result;
    }

    public function remove(int $id): bool {
        $query = "DELETE FROM tarefas WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(":id", $id);

        return $stmt->execute();
    }

    public function update(Todolist $list): bool {
        $query = "UPDATE tarefas SET name = :name, state = :state, observations = :observatios WHERE id = :id";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindValue(":name", $list->name);
    $stmt->bindValue(":state", $list->state);
    $stmt->bindValue(":observations", $list->observations);
    $stmt->bindValue(":id", $list->id, PDO::PARAM_INT);

    return $stmt->execute();
    }

    public function all(): array {
        $todoList = $this->pdo->query("SELECT * FROM tarefas;")->fetchAll(PDO::FETCH_ASSOC);

        return array_map(
            $this->hydrateList(...), $todoList);
    }

    public function find(int $id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tarefas WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $this->hydrateList($stmt->fetch(PDO::FETCH_ASSOC));
    }

    private function hydrateList(array $listData): Todolist {
        $list = new Todolist($listData["name"], $listData["state"], $listData["observations"]);
        $list->setId($listData["id"]);

        return $list;
    }

}
