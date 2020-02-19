<?php

    $situacao = function($nota) {
        if ($nota < 2) {
            return 'reprovado';
        }
        if ($nota < 6) {
            return 'recuperação';
        }
        return 'aprovado';
    };

    echo $situacao(8);
?>