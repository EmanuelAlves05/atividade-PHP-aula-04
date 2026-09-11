<?php
    $nome = (string) readline("Digite o nome do cliente: ");
    $idade = (int) readline("Digite a idade: ");
    $renda_mensal = (float) readline("Digite a renda mensal: ");
    $tempo_emprego = (int) readline("Digite o tempo de emprego (em meses): ");
    $negativado = (string) readline("O cliente está negativado? (s/n): ");

    $idadepermitida = ($idade >= 18 && $idade <= 65);
    $rendaOUestabilidade = ($renda_mensal >= 2000 || $tempo_emprego >= 24);
    $esta_negativado = ($negativado == "s");

    $credito_aprovado = ($idadepermitida && $rendaOUestabilidade && (!$esta_negativado));

    echo "idade:" . ($idadepermitida ?  " permitida" : " não permitida") . "\n";
    echo "renda OU estabilidade:" . ($rendaOUestabilidade ? " atendida" : " não atendida") . "\n";
    echo "nome limpo:" . (!$esta_negativado ? " atendida" : " não atendida") . "\n";

    echo "crédito " . ($credito_aprovado ? "aprovado" : "reprovado") . " para $nome\n";
