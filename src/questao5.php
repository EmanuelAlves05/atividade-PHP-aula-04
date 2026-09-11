<?php
    $nome = (string) readline("Digite o nome do aluno: ");
    $nota1 = (float) readline("Digite a primeira nota: ");
    $nota2 = (float) readline("Digite a segunda nota: ");
    $nota3 = (float) readline("Digite a terceira nota: ");

    $media = ($nota1 + $nota2 + $nota3) / 3;
    $aprovado = ($media >= 7.0);
    $recuperacao = ($media >= 5.0 && $media < 7.0);
    $reprovado = ($media < 5.0);

    if ($aprovado) {
        echo "O aluno $nome foi aprovado com média " . number_format($media, 2) . ".\n";
    } elseif ($recuperacao) {
        echo "O aluno $nome está de recuperação com média " . number_format($media, 2) . ".\n";
    } else {
        echo "O aluno $nome foi reprovado com média " . number_format($media, 2) . ".\n";
    }
?>