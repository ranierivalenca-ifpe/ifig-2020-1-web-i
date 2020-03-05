<?php

$linhas = file('dados.csv');
$linhas[] = "uma nova linha\n"; // inserindo no final do array, ou seja, no final do arquivo

var_dump($linhas);

$conteudo = implode('', $linhas); // note que a "cola" é uma string vazia, já que cada linha possui sua própria quebra de linha (lembre do comportamento da função 'file')

var_dump($conteudo);

file_put_contents('dados.csv', $conteudo);

?>