<?php
    require_once "../templates/header.php";
?>

    <div class="container">
        <table class="table" id="list-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                   <th scope="col">Tarefa</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Observações</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($todolist as $list): ?>
                <tr>
                    <td scope="row" class="col-id"><?= $list->id ?></td>
                    <td scope="row"><?= $list->name?></td>
                    <td scope="row"><?= $list->stateList?></td>
                    <td scope="row"><?= $list->observations ?></td>
                    <td class="actions">
                        <a href="/edit?id=<?= $list->id; ?>"><i class="fas fa-edit edit-icon"></i></a>
                        <a href="/delete?id=<?= $list->id; ?>"><i class="fas fa-times delete-icon"></a></i></button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    </div>

    <p id="empty-list-text"><a href="/create">Clique aqui para adicionar Tarefas</a>.</p>
<?php
    require_once "../templates/footer.php";
?>