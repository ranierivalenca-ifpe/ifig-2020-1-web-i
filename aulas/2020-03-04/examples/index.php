<?php include 'header.html' ?>
<?php
require 'funcoes.php';
$data = get_data();
?>
<table>
    <?php foreach ($data as $item): ?>
        <tr><!-- ... --></tr>
    <?php endforeach ?>
</table>
<?php include 'footer.html' ?>