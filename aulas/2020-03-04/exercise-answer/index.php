<?php

// $dados = [
//     ['Robyn', 'Incarnato', 'Guatemala'],
//     ['Lulu', 'Spiva', 'Qatar'],
//     ['Lizette', 'Morales', 'Croatia'],
//     ['Hector', 'Shadley', 'Austria']
// ];

$dados = file('dados.csv');
// $dados = [
//     'Robyn---Incarnato---Guatemala',
//     'Lulu---Spiva---Qatar',
//     'Lizette---Morales---Croatia',
//     'Hector---Shadley---Austria'
// ];
for($i = 0; $i < sizeof($dados); $i++) {
    $dados[$i] = explode('---', $dados[$i]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        tr:nth-child(2n) {
            background: hsl(0, 0%, 80%);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>País</th>
        </tr>
        <?php foreach ($dados as $linha): ?>
            <tr>
                <?php foreach ($linha as $dado): ?>
                    <td><?= $dado ?></td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>