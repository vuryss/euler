<?php

$num = 600851475143;
$factors = [];
$maxFactor = (int) sqrt($num);

for ($i = 2; $i <= $maxFactor; $i++) {
    if ($num % $i === 0) {
        $factors[] = $i;
    }
}

foreach ($factors as $key => $factor) {
    $maxF = (int) sqrt($factor);

    for ($i = 2; $i <= $maxF; $i++) {
        if ($factor % $i === 0) {
            unset($factors[$key]);
            break;
        }
    }
}

echo 'Answer: ' . end($factors) . PHP_EOL;
