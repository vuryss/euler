<?php

require_once './helpers.php';

$start = microtime(true);

$primes = ESieve(1000000);

$sum = [];
$total = 0;

foreach ($primes as $prime) {
    $total += $prime;
    $sum[$prime] = $total;
}

$max = 0;
$stored = 0;

foreach ($primes as $prime) {
    foreach ($sum as $prm => $sumToPrime) {
        if ($sumToPrime < $prime) continue;

        $current = array_search($prm, $primes) + 1;

        if ($sumToPrime == $prime) {
            if ($current > $max) {
                $max = $current;
                $stored = $prime;
            }
            break;
        }

        foreach ($primes as $index => $p) {
            $diff = $sumToPrime - $sum[$p];

            if ($diff < $prime) break;

            if ($diff == $prime) {
                $current -= $index + 1;
                if ($current > $max) {
                    $max = $current;
                    $stored = $prime;
                }
                break;
            }
        }

        break;
    }
}

echo 'Answer: ' . $stored . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
