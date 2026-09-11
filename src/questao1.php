<?php
    $n1 = (int) readline("Digite o primeiro número: ");
    $n2 = (int) readline("Digite o segundo número: ");
    
    if ($n1 > $n2) {
        echo "O primeiro número é maior: $n1\n";
    } elseif ($n2 > $n1) {
        echo "O segundo número é maior: $n2\n";
    } else {
        echo "Os números são iguais.\n";
    }
?>