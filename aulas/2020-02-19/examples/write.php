<?php

# ...
// $fp = fopen('teste.txt', 'w');
// for ($i = 0; $i < 10; $i++) {
//     fwrite($fp, "linha $i" . PHP_EOL);
// }
// fclose($fp);
# ...

$s = '';
for ($i = 0; $i < 10; $i++) {
    $s = $s ."linha $i" . PHP_EOL;
}
file_put_contents('teste.txt', $s);

# ...

?>