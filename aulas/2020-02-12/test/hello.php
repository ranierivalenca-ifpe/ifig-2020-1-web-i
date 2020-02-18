<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello world</title>
</head>
<body>
<?php
    $nome = 'starlord';
    echo 'o professor é ' . $nome;
?>
<ul>
<?php
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            echo "<li><strong>$i</strong></li>";
        } else {
            echo '<li>' . $i . '</li>';
        }
    }
?>
</ul>
<ul>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <?php if ($i == 5): ?>
            <li>
                <strong><?= $i ?></strong>
            </li>
        <?php else: ?>
            <li>
                <?php echo $i ?>
            </li>
        <?php endif ?>
    <?php endfor ?>
</ul>

<?php
    $gastos = array(
        'combustível', // índice 0
        'diária',      // índice 1
        'almoço',      // índice 2
        'jantar'       // índice 3
    );

    $valores = [
        200, // índice 0
        200, // índice 1
        100, // índice 2
        120  // índice 3
    ];
?>
<h1>Gastos com a viagem</h1>
<h2>Tipos</h2>
<ul>
    <?php for ($i = 0; $i < sizeof($gastos); $i++): ?>
        <li><?= $gastos[$i] ?></li>
    <?php endfor ?>
</ul>
<h2>Valores</h2>
<ul>
    <?php foreach ($valores as $valor): ?>
        <li><?= $valor ?></li>
    <?php endforeach ?>
</ul>
</body>
</html>