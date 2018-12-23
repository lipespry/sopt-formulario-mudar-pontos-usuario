<?php

require_once('conexao_db.php');

$query = mysqli_query($conexao, 'SELECT * FROM `usuarios`;');

$usuarios = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<form action="/setpontos.php" method="post">
    Qual usuário deseja mudar?<br>
    <select name="usuario">
        <?php
        foreach ($usuarios as $usuario) { ?>
            <option value="<?= $usuario['ID']; ?>"><?= $usuario['login']; ?></option>
        <?php
        } ?>
    </select><br>
    Novo valor:<br>
    <input type="text" name="pts"><br>
    <input type="submit" value="Enviar">
</form>
