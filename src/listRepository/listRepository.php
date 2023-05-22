<?php

namespace Todolist\Repository;
use PDO;
use Todolist\entity\Todolist;

class ListRepository {
    public function __construct(private PDO $pdo)
    {
        
    }

    public function add(Todolist $list): bool {
        $query = "INSERT INTO tarefas (name, observations) VALUES (:name, :observations)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(":name", $list->name);
        $stmt->bindValue(":observations", $list->observations);

        $result = $stmt->execute();

        $id = $this->pdo->lastInsertId();
        $list->setId(intval($id));

        return $result;
    }

    public function all(): array {
        $list = $this->pdo->query("SELECT * FROM tarefas")->fetchAll(PDO::FETCH_ASSOC);

        return array_map(
            $this->hydrateList(...),
            $list
        );
    }

    public function find(int $id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tarefas WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $this->hydrateList($stmt->fetch(PDO::FETCH_ASSOC));
    }


    private function hydrateList(array $listData): Todolist {
        $list = new Todolist($listData["name"],$listData["id"], $listData["observations"]);
        $list->setId($listData["id"]);

        return $list;
    }
}