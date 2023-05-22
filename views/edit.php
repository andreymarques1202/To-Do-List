<?php
    require_once "../templates/header.php";
?>
<div class="container">
    <h1 id="main-title">Editar Tarefa</h1>
    <form action="" id="create-form" method="post">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="name">Tarefa:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="state">Estado:</label>
            <input type="text" name="state" id="state" class="form-control">
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <input type="text" name="observations" id="observations" class="form-control">
        </div>
    </form>
</div>

<?php
    require_once "../templates/footer.php";