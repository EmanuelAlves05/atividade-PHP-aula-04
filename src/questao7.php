<?php
    $matricula1 = (string) readline("Digite a primeira matrícula: ");
    $matricula2 = (string) readline("Digite a segunda matrícula: ");

    $resultado = (strcasecmp($matricula1, $matricula2));

    if($resultado < 0) {
        echo "Comparando como texto (strcmp): A matrícula $matricula1 vem primeiro\n";
    } elseif($resultado > 0) {
        echo "Comparando como texto (strcmp): A matrícula $matricula2 vem primeiro\n";
    } else {
        echo "Comparando como texto (strcmp): As matrículas são iguais\n";
    }
    if($matricula1 < $matricula2) {
        echo "Comparando com o operador < : A matrícula $matricula1 vem primeiro\n";
    } elseif($matricula1 > $matricula2) {
        echo "Comparando com o operador < : A matrícula $matricula2 vem primeiro\n";
    } else {
        echo "Comparando com o operador < : As matrículas são iguais\n";
    }
?>