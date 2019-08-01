<?php

$numbers = [];

for ($i = 9000; $i < 10000; $i++) {
    $m = 1;
    $n = '';

    while (strlen($n) < 9) {
        $n .= $i * $m++;
    }

    if (strlen($n) > 9) {
        continue;
    }

    $t = str_split($n);
    sort($t);
    $t = implode('', $t);

    if ($t !== '123456789') {
        continue;
    }

    $numbers[] = (int) $n;
}

echo 'Answer: ' . max($numbers) . PHP_EOL;
