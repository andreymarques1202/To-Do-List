<?php

require_once "../templates/header.php";

?>

<div class="container">
    <h1>Criando Tarefa</h1>
    <form id="create-form" method="POST">
        <div class="form-group">
            <label for="name">Tarefa:</label>
            <input type="text" name="name" id="name" value="<?= $list?->name ?>" class="form-control" placeholder="adicione uma tarefa" required>
        </div>
        <div class="form-group">
            <label for="state">Estado:</label>
            <input type="text" name="state" value="<?= $list?->stateList?>" id="state" class="form-control" placeholder="Adicione um estado">
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <input type="text" name="observations" value="<?= $list?->observations?>" id="observations" class="form-control" placeholder="Observações">
        </div>
        <button type="submit" class="btn btn-primary" id="button-create">Gerar Tarefa</button>
    </form>
</div>

<?php
    require_once "../templates/footer.php";