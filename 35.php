<?php

require_once './helpers.php';

$start  = microtime(true);
$primes = array_fill_keys(ESieve(1000000), true);
$count  = 0;

foreach (array_keys($primes) as $prime) {
    $p = (string) $prime;

    // Up until 100 we can just reverse the number
    if ($prime < 100 && !isset($primes[strrev($p)])) {
        continue;
    }

    $p = str_split($p);

    for ($i = 0, $len = count($p) - 1; $i < $len; $i++) {
        array_push($p, array_shift($p));

        if (!isset($primes[implode('', $p)])) {
            continue 2;
        }
    }

    $count++;
}

echo 'Answer: ' . $count . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
