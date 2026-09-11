<?php
    $idade = (int) readline("Digite a idade: ");
    $ingresso = readline("Vc possui ingresso? (s/n): ");

    if ($idade >= 18 && $ingresso === 's') {
        echo "Entrada permitida.\n";
    } else {
        echo "Entrada negada.\n";
    }
?>