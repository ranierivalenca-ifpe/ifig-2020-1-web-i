<?php
    // ...
    /*
    function status($nota) {
        if ($nota >= 6) {
            return 'aprovado';
        } else if ($nota >= 2) {
            return 'final';
        }
        return 'reprovado';
    }
    */

    # Função para somar elementos de um array
    function soma($values) {
        $soma = 0;
        foreach($values as $val) {
            $soma = $soma + $val;
        }
        return $soma;
    }
    // ...


    $arr = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144];
    echo "a soma dos valores eh " . soma($arr);
?>