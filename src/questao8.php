<?php
    $entrada = readline("Digite um valor\n");

    $resultado1 = ($entrada == 10);
    $resultado2 = ($entrada === 10);

    echo "$entrada == 10 → " . ($resultado1 ? "true" : "false") . "\n";
    echo "$entrada === 10 → " . ($resultado2 ? "true" : "false") . "\n";

    echo "Tipo de entrada: " . gettype($entrada) . "\n";
?>