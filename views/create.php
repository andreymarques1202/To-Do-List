<?php

require_once "../templates/header.php";

?>

<div class="container">
    <h1>Criando Tarefa</h1>
    <form action="" id="create-form" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Tarefa:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="adicione uma tarefa" required>
        </div>
        <div class="form-group">
            <label for="state">Estado:</label>
            <input type="text" name="state" id="state" class="form-control" placeholder="Adicione um estado">
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <input type="text" name="observations" id="observations" class="form-control" placeholder="Observações">
        </div>
        <button type="submit" class="btn btn-primary" id="button-create">Criar Tarefa</button>
    </form>
</div>

<?php
    require_once "../templates/footer.php";