<?php

$conexao = mysqli_connect(
    // Altere conforme necessário
    'xxxxxxxxx',        // Host do banco de dados
    'xxxxxxxxx',        // Usuário
    'xxxxxxxxx',        // Senha
    'xxxxxxxxx'         // Nome do banco de dados
);

if (mysqli_connect_errno()) {
    printf(
        'Erro na conexão com o banco de dados: %s',
        mysqli_connect_error()
    );
    die();
}

