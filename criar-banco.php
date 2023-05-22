<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");
$pdo->exec('CREATE TABLE tarefas (id INTEGER PRIMARY KEY, name TEXT, observations TEXT);');
