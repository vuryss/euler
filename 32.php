<?php

$numbers = [];
$found = [];

for ($i = 100; $i < 9876; $i++) {
    for ($j = 1; $j < 100; $j++) {
        $product = $i * $j;
        $string = $i . $j . $product;

        if (strlen($string) != 9) {
            continue;
        }

        $digits = str_split($string);
        sort($digits);
        $digits = implode('', $digits);

        if ($digits != '123456789') {
            continue;
        }

        $numbers[] = $product;
        $found[] = $j;

        if (in_array($i, $found)) {
            break 2;
        }
    }
}

echo 'Answer: ' . array_sum(array_unique($numbers)) . PHP_EOL;
