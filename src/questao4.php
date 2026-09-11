<?php
    $usuario = (string) readline("Digite o nome do usuário: ");
    $senha = (string) readline("Digite a senha: ");

    $credenciaisvalidas = (strcasecmp($usuario, "admin") == 0 && $senha === "php2026");
    if(!$credenciaisvalidas) {
        echo "Acesso negado.\n";
    } else {
        echo "Acesso permitido.\n";
    }
?>