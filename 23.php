<?php

require_once './helpers.php';

$numbers = [1 => 0];

for ($i = 2; $i < 28123; $i++) {
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

$abundant = [];

foreach ($numbers as $i => $sum) {
    if ($sum > $i) {
        $abundant[] = $i;
    }
}

$num = count($abundant);

$numbers = array_fill_keys(range(1, 28123), true);

for ($i = 0; $i < $num; $i++) {
    for ($j = $i; $j < $num; $j++) {
        unset($numbers[$abundant[$i] + $abundant[$j]]);
    }
}

echo array_sum(array_keys($numbers)) . PHP_EOL;

echo 'Done' . PHP_EOL;
