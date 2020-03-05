<?php
// $fp = fopen('dados.csv', 'a');
// fwrite($fp, 'ola mundo');
// fclose($fp);
// $fp = fopen('eu.txt', 'a');
// fclose($fp);
$fp = fopen('dados.csv', 'a');
$nome = 'ranieri';
$sobre = 'valennnnnca';
$pais = 'pernambuco';
fwrite($fp, "$nome---$sobre---$pais" . PHP_EOL);

?>