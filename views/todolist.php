<?php
    require_once "../templates/header.php";
?>

    <div class="container">
        <table class="table" id="list-table">
            <thead>
                <tr>
                   <th scope="col">Tarefa</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Observações</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="col-id"></td>
                    <td scope="row"></td>
                    <td class="actions">
                        <a href="show.php"><i class="fas fa-eye check-icon"></i></a>
                        <a href="edit.php"><i class="fas fa-edit edit-icon"></i></a>
                        <form action="" method="post" class="delete-form">
                            <input type="hidden" name="type" value="delete">
                            <input type="hidden" name="id" value="">
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <p id="empty-list-text"><a href="/create">Clique aqui para adicionar Tarefas</a>.</p>

<?php
    require_once "../templates/footer.php";