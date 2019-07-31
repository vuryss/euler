<?php

$sum = 2;
$a = 1;
$b = 2;

while (true) {
    $c = $a + $b;

    if ($c > 4000000) {
        break;
    }

    if ($c % 2 == 0) {
        $sum += $c;
    }

    $a = $b;
    $b = $c;
}

echo 'Answer: ' . $sum . PHP_EOL;
