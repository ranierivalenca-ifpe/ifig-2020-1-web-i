<?php

$dados = file('teste.txt');
$dados = array_map(function($el) {
    return trim($el);
}, $dados);

var_dump($dados);
// echo $dados[0];

?>