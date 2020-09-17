<?php
# Os dois são usadas para validação se foi iniciada e se ela está vazia
if (isset($_POST['nome']) && empty($_POST['nome'])) {
    echo 'Preencha o nome <br>';
}

if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
    echo 'Preencha o cpf <br>';
}

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
    echo 'Apenas números no CPF<br>';
}
?>
<form method="post" action="">
    <label>
        Nome completo*:
        <input type="text" name="nome">
    </label>

    <label>
        CPF*:
        <input type="text" name="cpf">
    </label>

    <input type="submit" value="cadastrar">
</form>