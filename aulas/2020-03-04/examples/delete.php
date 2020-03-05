<?php

$linhas = file('dados.csv');

$linha_para_apagar = 2;

// unset($linhas[$linha_para_apagar]); // apaga o elemento do array

$linhas[$linha_para_apagar] = "\n";

$conteudo = implode('', $linhas); // note que a "cola" é uma string vazia, já que cada linha possui sua própria quebra de linha (lembre do comportamento da função 'file')

file_put_contents('dados.csv', $conteudo);

?>