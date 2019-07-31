<?php

require_once './helpers.php';

// Brute force
$start = microtime(true);
$i = 1;

foreach (permutationsGenerator([0,1,2,3,4,5,6,7,8,9]) as  $permutation) {
    if ($i++ === 1000000) {
        echo 'Answer: ' . $permutation . PHP_EOL;
        echo 'Brute force time: ' . (microtime(true) - $start) . PHP_EOL;
        break;
    }
}

// Smart way
$permutation = '';
$limit       = 10;
$numbers     = range(0, $limit - 1);
$target      = 1000000;
$start       = microtime(true);

for ($i = 1; $i <= $limit; $i++) {
    $step = gmp_intval(gmp_fact($limit - $i));
    $index = 0;

    for ($j = 0; $j < $limit; $j++) {
        if ($j * $step < $target) {
            $index = $j;
            continue;
        }

        break;
    }

    $permutation .= $numbers[$index];
    array_splice($numbers, $index, 1);
    $target -= $index * $step;
}

echo 'Answer: ' . $permutation . PHP_EOL;
echo 'Smart way time: ' . (microtime(true) - $start) . PHP_EOL;
