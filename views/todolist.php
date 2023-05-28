<?php
    require_once "../templates/header.php";
?>

    <div class="container">
        <table class="table" id="list-table">
            <thead>
                <tr>
                    <th>ID</th>
                   <th>Tarefa</th>
                    <th>Estado</th>
                    <th>Observações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($todolist as $list): ?>
                    <td><?= $list->id ?></td>
                    
                    <td class="actions">
                        <a href="/edit"><i class="fas fa-edit edit-icon"></i></a>
                        <a href="/delete"><i class="fas fa-times delete-icon"></a></i></button>
                        
                    </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
            
        </table>
    </div>

    <p id="empty-list-text"><a href="/create">Clique aqui para adicionar Tarefas</a>.</p>
<?php
    require_once "../templates/footer.php";
?>