<?php

$primes   = [];
$lessThan = 2000000;
$maxCheck = sqrt($lessThan);
$sum      = 2;

for ($i = 3; $i < $lessThan; $i += 2, $max = sqrt($i)) {
    foreach ($primes as $prime) {
        if ($prime <= $max && $i % $prime === 0) {
            continue 2;
        }
    }

    $sum += $i;

    if ($i < $maxCheck) {
        $primes[] = $i;
    }
}

echo 'Answer: ' . $sum . PHP_EOL;
