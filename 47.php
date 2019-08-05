<?php

require_once './helpers.php';

$start = microtime(true);
$a = 0;

$primes = ESieve(200000);

function countUniqueFactors($i)
{
    global $primes;

    $a = [];

    foreach ($primes as $prime) {
        if ($prime > $i) break;

        while ($i % $prime === 0) {
            $i /= $prime;
            $a[$prime] = true;
        }
    }

    return count($a);
}

for ($i = 210; $i < 200000; $i++) {
    $a = countUniqueFactors($i) === 4 ? $a + 1 : 0;

    if ($a === 4) {
        echo 'Answer: ' . ($i - 3) . PHP_EOL;
        break;
    }
}

echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
