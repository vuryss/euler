<?php

require_once './helpers.php';
$a = array_fill_keys([0, 2, 4, 5, 6, 8], true);
$max = 0;


foreach (permutationsGenerator(range(1, 7)) as $num) {
    if (isset($a[$num[7 - 1]])) continue;

    if (isPrime($num)) {
        if ($num > $max) {
            $max = $num;
        }
    }
}

echo 'Answer: ' . $max . PHP_EOL;
