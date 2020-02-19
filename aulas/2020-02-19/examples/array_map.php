<?php
$numeros = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144];

$quadrados = array_map(
    function($num) {
        return $num * $num;
    }

    ,

    $numeros
);

print_r($quadrados);
?>