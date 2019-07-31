<?php

require 'helpers.php';

$start = microtime(true);

$numbers = [];

for ($i = 2; $i < 10000; $i++) {
    $primes = primeFactorisation($i);
    $sum = 0;

    if (count($primes) === 1) {
        $numbers[$i] = 1;
        continue;
    }

    $products = [];

    foreach (allCombinations($primes) as $combination) {
        $products[] = array_product($combination);
    }

    $sum += array_sum(array_unique($products, SORT_NUMERIC));

    $numbers[$i] = $sum + 1 - $i;
}

$sum = 0;

foreach ($numbers as $number => $sumOfFactors) {
    if ($sumOfFactors > 1 && $sumOfFactors < 10000 && $number !== $sumOfFactors && $number === $numbers[$sumOfFactors]) {
        $sum += $number;
    }
}

echo 'Answer: ' . $sum . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
