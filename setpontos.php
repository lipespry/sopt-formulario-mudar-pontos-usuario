<?php

require_once('conexao_db.php');

$sql_query = (
    "UPDATE `usuarios`
    SET `pontos` = '".$_POST['pts']."'
    WHERE `ID` = '".$_POST['usuario']."';"
);

if (!($query = mysqli_query($conexao, $sql_query))) {
    printf(
        'Erro ao executar consulta no banco de dados: %s',
        mysqli_error($conexao)
    );
} else {
    echo 'Pontos do usuário definidos com sucesso!';
}

?>
