<?php

require_once './helpers.php';

$start = microtime(true);
$numbers = [];
$primes = [17, 13, 11, 7, 5, 3, 2];

foreach (permutationsGenerator(range(0, 9)) as $number) {
    if ($number[0] === '0') continue;
    if ($number[3] % 2 !== 0) continue;
    if ($number[5] !== '5') continue;

    for ($i = 0; $i < 7; $i++) {
        $subNum = (int) substr($number, -3 - $i, 3);

        if ($subNum % $primes[$i] !== 0) {
            continue 2;
        }
    }

    $numbers[] = $number;
}

echo 'Answer: ' . array_sum($numbers) . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
