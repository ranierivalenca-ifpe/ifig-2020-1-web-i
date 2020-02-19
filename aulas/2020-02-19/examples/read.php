<?php
# ...
// $handle = fopen('teste.txt', 'r');
// echo filesize('teste.txt');
// $conteudo = fread($handle, 10);
$conteudo = file_get_contents('teste.txt');
echo "<pre>$conteudo</pre>";
# ...
?>