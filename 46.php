<?php

require_once './helpers.php';

$start = microtime(true);

$primes = array_flip(ESieve(10000));

for ($i = 9; $i < 10000; $i+=2) {
    if (isset($primes[$i])) {
        continue;
    }

    $found = false;

    foreach ($primes as $key => $dummy) {
        if ($key >= $i) break;

        $a = ($i - $key) / 2;
        $b = sqrt($a);

        if ((int) $b == $b) {
            $found = true;
        }
    }

    if (!$found) {
        echo 'Answer: ' . $i . PHP_EOL;
        break;
    }
}

echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;

