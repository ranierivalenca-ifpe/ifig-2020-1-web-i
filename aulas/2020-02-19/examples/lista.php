<?php
# ...
$linhas = file('teste.txt');
for($i = 0; $i < sizeof($linhas); $i++) {
    $linhas[$i] = trim($linhas[$i]);
}
# ...
?>
<ul>
    <?php foreach ($linhas as $linha): ?>
        <li><?= $linha ?></li>
    <?php endforeach ?>
</ul>