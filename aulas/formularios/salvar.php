<?php

$linha = $_POST['nome'] . ',' . $_POST['idade'] . "\n";
file_put_contents('dados.csv', $linha);

?>