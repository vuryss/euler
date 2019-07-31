<?php

require_once './helpers.php';

$size = 1001;
$levels = ($size + 1) / 2;
$sum = 0;

for ($i = 2; $i <= $levels; $i++) {
    $a = pow(($i * 2) - 1, 2);
    $b = $i * 2 - 2;
    $sum += 4 * ($a - $b);
}

echo 'Answer: ' . ++$sum . PHP_EOL;
