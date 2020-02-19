<?php

$carros = [
    ['Nissan', 'Skyline GTR', 2016, 'PHP'],
    ['Lamborghini', 'Diablo', 2015, 'Lamborghini'],
    ['VW', 'Fusca', 1960, 'FABIO' ],
    ['VW', 'Virtus', 2020, 'PIZA']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minha tabela</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td, th {
            padding: 0.3em;
        }
        table {
            width: 80%;
            margin: auto;
        }
        tr:nth-child(even) {
            background: hsl(0, 0%, 90%);
        }
        tr:hover {
            background: hsl(0, 0%, 80%);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
        </tr>
        <?php foreach ($carros as $indice => $carro): ?>
            <tr>
                <td><?= $carro[0] ?></td>
                <td><?= $carro[1] ?></td>
                <td><?= $carro[2] ?></td>
                <td><?= $carro[3] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>