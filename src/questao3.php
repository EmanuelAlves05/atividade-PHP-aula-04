<?php
    $valor = (float) readline("Digite o valor do pedido: ");
    $cartao = (string) readline("vc tem cartão? (s/n): \n");
    $pix = (string) readline("vc tem pix? (s/n): \n");

    if($cartao == "s" || $pix == "s") {
        echo "Pagamento aprovado.\n";
    } else {
        echo "Pagamento negado.\n";
    }
?>